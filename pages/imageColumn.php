<div class="column">   
          <?php
            
          $files = glob("../images/*.*");
          foreach($files as $num)
            {
            echo $image = '<img src="'.$num.'" height="100px" width="3%" style=\'overflow:hidden;\'
              onclick="display(this);" class="demo cursor">';
          }
          ?>
</div>