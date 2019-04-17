
<div class ="horizontal-line"></div>

    <!-- Image column Display -->
        <div class="columnAbove">
          <?php
          /**
            * This php script is used to display images on the top layer of the image column, which limits the amount of images to display.
            *
            * This reduces the rendering time of the images to allow shorter loading time of webpage.
            */
          $files = glob("48hr/*.*");
            foreach($files as $num)
            {
            echo $image = '<img src="'.$num.'" height="80px" width="3%" style=\'overflow:hidden;\'">';
            }
          ?>
        </div>

    <!-- Ruler Grid container -->
        <div class="ruler-container">
            <?php
            /**
              * Draws all the small ruler grids into 'ruler-containter'.
              */
            for ($smallRuler = 0; $smallRuler <= 180 ; $smallRuler++){

            ?>

        <div class="ruler-small"></div>

            <?php
            }

            /**
              * Creates two variables to get actual current time as start time and determine end time.
              *
              * Uses a for loop for every hour after this hour for 24 hours to add long grid and time.
              *
              */

              $start=strtotime('now');
              $end=strtotime('+23 hour');

              for ($i=$start; $i<=$end; $i = $i + 60*60)
              {

            ?>
                <div class="ruler">
                <div class="time">
            <?php
                date_default_timezone_set ('Asia/Tokyo');
                echo date('H',$i)."\n";
            ?>
                </div>
                </div>
            <?php
              }
            ?>
        </div>

    <!-- livecam container for bottom right -->
        <div class="livecamContainer" onclick="display(this);">
        <div class="liveText"> LIVE </div>
            <div class="cameraIcon">
            <i class="fa fa-camera-retro fa-2x" ></i></div>
        </div>


<style>
/* styling for ruler!! */
.ruler {
    width: .13%;
    height: 15px;
    background: white;
    position: sticky;
    float:left;
    margin-right: 3.8%;
    bottom: 85px;
    right:100px;
}

.ruler-container {
  margin: 0 auto;
  position: absolute;
  height: 8px;
  bottom: 72px;
  width: 100%;
  left: 1.5em;
  right: 100px;
}

.ruler-small {
    width: .07%;
    height: 8px;
    background: white;
    position: relative;
    float: left;
    margin-left: .5%;
    right: 130px;
}

@media (max-width: 1919.9px) {
    .ruler-small {
        display: none;
    }
}

.time {
    padding-top: 16px;
    font-size: 13px;
    font-weight: bold;
    margin-left: -8px;
    color: white;
    right: 100px;
}

.horizontal-line {
    position: absolute;
    width: 100%;
    height: .1%;
    background: white;
    bottom : 79.9px;
    left: 0px;
    right: 0px;
}

.columnAbove {
    position: fixed;
    bottom: 0;
    display: relative;
    height: 80px;
    left: 0;
    right: 80px;
}

</style>
