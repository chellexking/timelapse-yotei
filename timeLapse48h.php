
<!-- This file stores the scripts for functionality of timelapse video. -->

<!-- First div for 24hr timelapse display -->
<div id="liveStream48h" style="display:none">

    <?php
    /**
      * Loops through and displays all the images in directory '/images'.
      *
      * Modified in scripts for images to display in form of timelapse video.
      *
      */

    $files48h = glob("48hr/*.*");
    foreach($files48h as $num48h)
    {
        $image48h = '<img src="'.$num48h.'" style="max-height:100%; max-width:100%">';
      echo $image48h;
    }

    ?>

    <div id="closeButton48h"> <i class="fa fa-times" aria-hidden="true" onclick="hideTimelapse48h();"></i> </div>

    <div id="playButton48h"> <i class="fa fa-play" aria-hidden="true"></i></div>

    <div id="pauseButton48h" style="display:none;"> <i class="fa fa-pause" aria-hidden="true"></i> </div>

    <div id="myProgress48h">
        <div id="bar48h"></div>
    </div>

</div>

<style>
/*timelapse video */
#liveStream48h {
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

#liveStream48h > img {
    object-position: center;
    height: 100%;
    width: 100%;
    object-fit: cover;
    max-width: 100%;
    min-width: 1024px;
    min-height: 100%;
    position: absolute;
}

#myProgress48h {
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

#bar48h {
  margin-left: 25px;
  margin-top: 12px;
  width: 1%;
  height: 4px;
  background-color: whitesmoke;
}

#playButton48h,
#pauseButton48h{
    font-size: 15px;
    background-color: dimgray;
    position: absolute;
    bottom: 0px;
    z-index: 4;
    padding: 5px 10px;
    color: darkgray;
    border-radius: 5px;
}

#closeButton48h{
    position: absolute;
    z-index: 4;
    top: 15px;
    right: 15px;
    font-size: 30px;
    color: aliceblue;
}

#closeButton48h:hover{
    cursor: pointer;
}

#playButton48h:hover,
#pauseButton48h:hover{
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

     $("#liveStream48h > img:gt(0)").hide();

    /**
      * @function
      *
      * showTimeLapse() shows the timelapse page upon click from home page.
      *
      * playSlideshow() plays the timelapse video upon click of play button and changes the play button to pause button.
      *
      * Uses setInterval() and clearInterval() to play and pause timelapse video.
      */

            var y = document.getElementById("liveStream48h");

    function showTimelapse48h(){

            y.style.display = "block";

            var width = 1;

            playButton48h.onclick =
                function playSlideshow48h(){
                document.getElementById("pauseButton48h").style.display = "block";
                slideInterval48h = setInterval(function() {
                    $('#liveStream48h > img:first')
                    .fadeOut(500)
                    .next()
                    .fadeIn(500)
                    .end()
                    .appendTo('#liveStream48h');
                },  250);

                var bar48h = document.getElementById("bar48h");
                progressBar48h = setInterval(function(){
                if (width >= 100) {
                  clearInterval(progressBar48h);
                  clearInterval(slideInterval48h);
                  document.getElementById("pauseButton48h").style.display = "none";

                } else {
                  width++;
                  bar48h.style.width = width + '%';
                }}, 250);
            }

            pauseButton48h.onclick =
                function pauseSlideshow48h(){
                document.getElementById("pauseButton48h").style.display = "none";
                clearInterval(slideInterval48h);
                clearInterval(progressBar48h);
            }
    }

      function hideTimelapse48h(){

        y.style.display = "none";
        clearInterval(slideInterval48h);
        clearInterval(progressBar48h);

      }

</script>
