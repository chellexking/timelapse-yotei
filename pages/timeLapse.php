<!DOCTYPE html> 
<style>
/*timelapse video */
#liveStream {
    max-height: 100%;
    max-width: 100%;
    min-width: 100%;
    background-position: center;
    background-size: cover;
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 80px;
    overflow: hidden;
}

#liveStream > img { 
    object-position: center;
    height: 100%;
    width: 100%;
    object-fit: cover;
    max-width: 100%;
    min-width: 1024px;
    min-height: 100%;
    position: absolute;
}
    
#myProgress {
  width: 100%;
  right: 0px;
  background-color: dimgray;
  opacity: .8;
  bottom: 0px;
  position: absolute;
  z-index: 3;
  left: 30px;
  height: 27px;
}

#myBar {
  margin-left: 25px; 
  margin-top: 12px;
  width: 1%;
  height: 4px;
  background-color: whitesmoke;
}
    
#playButton,
#pauseButton{
    font-size: 15px;
    background-color: dimgray;
    position: absolute;
    bottom: 0px;
    z-index: 4;
    padding: 5px 10px;
    color: darkgray;
    border-radius: 5px;
}   

#closeButton{
    position: absolute;
    z-index: 4;
    top: 15px;
    right: 15px;
    font-size: 30px;
    color: aliceblue;
}    
    
    #closeButton:hover{
        cursor: pointer;
    }
    
    #playButton:hover,
    #pauseButton:hover{
        cursor: pointer;
        background-color: darkgrey;
        color: aliceblue;
    }    
    
</style>

<div id="liveStream" style="display:none">   
    
    <?php
    $files = glob("../images/*.*");
    foreach($files as $num)
    {
        $image = '<img src="'.$num.'" style="max-height:100%; max-width:100%">';
      echo $image;
    }
    ?>

    <div id="closeButton"> <i class="fa fa-times" aria-hidden="true" onclick="showTimelapse();"></i> </div>    
        
    <div id="playButton"> <i class="fa fa-play" aria-hidden="true"></i></div>
    
    <div id="pauseButton" style="display:none;"> <i class="fa fa-pause" aria-hidden="true"></i> </div>
    
    <div id="myProgress">
        <div id="myBar"></div>
    </div>
    
</div>

<script>
//selects the image in the id #livestream that is after index 0, hide all the images that are greater than index 0. 
    $("#liveStream > img:gt(0)").hide();
    
//timelapse function upon button click
function showTimelapse(){
    var x = document.getElementById("liveStream");
    
    if(x.style.display === "none"){
        x.style.display = "block";
    
        var width = 1;
        
        playButton.onclick = 
            function playSlideshow(){
            document.getElementById("pauseButton").style.display = "block";
            slideInterval = setInterval(function() { 
                $('#liveStream > img:first')
                .fadeOut(500)
                .next()
                .fadeIn(500)
                .end()
                .appendTo('#liveStream');
            },  250);
            
            var elem = document.getElementById("myBar");  
            progressBar = setInterval(function(){
            if (width >= 100) {
              clearInterval(progressBar);
              clearInterval(slideInterval);
            } else {
              width++; 
              elem.style.width = width + '%'; 
            }}, 250);
        }
        
        pauseButton.onclick = 
            function pauseSlideshow(){
            document.getElementById("pauseButton").style.display = "none";
            clearInterval(slideInterval);
            clearInterval(progressBar);
        } 
    }
    else{
        x.style.display="none";
        clearInterval(slideInterval);
        clearInterval(progressBar);
    } 
}
    
</script>