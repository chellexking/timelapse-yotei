
<!-- This file stores the scripts for functionality of timelapse video. -->
<?php include "getLatestFile.php" ?>
<!-- First div for 24hr timelapse display -->
<div id="liveStream" style="display:none">

    <?php
    /**
      * Loops through and displays all the images in directory '/images'.
      *
      * Modified in scripts for images to display in form of timelapse video.
      *
      */
      $files = glob("48hr/*.*");

      foreach(array_slice($files,0,$half_filecount) as $num)
      {
        $image = '<img src="'.$num.'" style="max-height:100%; max-width:100%">';
        echo $image;
      }
      ?>


    <div id="closeButton"> <i class="fa fa-times" aria-hidden="true" onclick="hideTimelapse();"></i> </div>

    <div id="playButton"> <i class="fa fa-play" aria-hidden="true"></i></div>

    <div id="pauseButton" style="display:none;"> <i class="fa fa-pause" aria-hidden="true"></i> </div>

    <div id="myProgress">
        <div id="myBar"></div>
    </div>

</div>

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
    z-index: 2;
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

<script>
    /**
      * This line hides all  the images in '#liveStream' with index greater than 0.
      * Thus result to displaying only one(1) image at a time.
      */

     $("#liveStream > img:gt(0)").hide();

    /**
      * @function
      *
      * showTimeLapse() shows the timelapse page upon click from home page.
      *
      * playSlideshow() plays the timelapse video upon click of play button and changes the play button to pause button.
      *
      * Uses setInterval() and clearInterval() to play and pause timelapse video.
      */

            var x = document.getElementById("liveStream");

    function showTimelapse24h(){

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
                  document.getElementById("pauseButton").style.display = "none";
                } else {
                  width++;
                  elem.style.width = width + '%';
                }}, 125);
            }

            pauseButton.onclick =
                function pauseSlideshow(){
                document.getElementById("pauseButton").style.display = "none";
                clearInterval(slideInterval);
                clearInterval(progressBar);
            }
    }

      function hideTimelapse(){

        x.style.display = "none";
        clearInterval(slideInterval);
        clearInterval(progressBar);

      }

</script>
