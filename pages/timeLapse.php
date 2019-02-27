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
  margin-top: 10px;
  width: 1%;
  height: 4px;
  background-color: whitesmoke;
}
    
#playPauseButton {
    font-size: 15px;
    background-color: dimgray;
    position: absolute;
    bottom: 0px;
    z-index: 4;
    padding: 5px 10px;
    color: darkgray;
    border-radius: 5px;
}   

    #playPauseButton:hover {
        cursor: pointer;
        background-color: darkgrey;
        color: aliceblue;
        border-radius: 5px;
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

    <div id="playPauseButton"> <i class="fa fa-play" aria-hidden="true"></i> </div>
    <div id="myProgress">
        <div id="myBar"></div>
    </div>
    
</div>

<script>
        $("#liveStream > img:gt(0)").hide();
    
    function move() {
  var elem = document.getElementById("myBar");  
  var width = 1;
  var id = setInterval(frame, 250);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
    
    
</script>