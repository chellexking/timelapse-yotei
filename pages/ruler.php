
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
</style>


<div class ="horizontal-line"></div>

<!-- ruler container for front display panel -->
        <div class="columnAbove">
          <?php
    
          $files = glob("../images/*.*");
            foreach($files as $num)
            {
            echo $image = '<img src="'.$num.'" height="80px" width="3%" style=\'overflow:hidden;\'
              onclick="display(this);">';
          }
          ?>
        </div>

<!-- ruler container for the back -->
    
        <div class="ruler-container">

            <?php
                
            for ($smallRuler = 0; $smallRuler <= 180 ; $smallRuler++){
            
            ?>    
                <div class="ruler-small"></div>
            
            <?php    
            }

//make for loop for every hour after this hour for 24 hours

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