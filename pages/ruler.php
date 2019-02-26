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