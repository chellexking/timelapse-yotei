<style>
/* the bottom image Column */
.column {
    position: fixed;
    right: 100px;
    bottom: 0px; 
    left: 0px; 
    display: inline-flex;
    height: 80px;
    z-index: 2;
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

<div class="column">   
          <?php
            
          $files = glob("images/*.*");
          foreach($files as $num)
            {
            echo $image = '<img src="'.$num.'" height="100px" width="3%" style=\'overflow:hidden;\'
              onclick="display(this);" class="demo cursor">';
          }
          ?>
</div>