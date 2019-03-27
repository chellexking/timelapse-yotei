<div class="column">   
          <?php
            /** 
             * Retrieves and structures the images in the columns at bottom of page.
             *
             * Loops through all images in directory '/images' and display all with transparency 0.
             */

          $files = glob("images/*.*");
          foreach($files as $num)
            {
            echo $image = '<img src="'.$num.'" height="100px" width="3%" style=\'overflow:hidden;\' onclick="display(this);" class="demo cursor">';
          }
          ?>
</div>

<style>
.column {
    position: fixed;
    right: 100px;
    bottom: 0px; 
    left: 0px; 
    display: inline-flex;
    height: 80px;
    z-index: 2;
}
    
.demo {
  opacity: 0;
}

.demo:hover {
  opacity: 0.7;
}
            
.cursor {
  cursor: pointer;
} 
</style>

<script>
/**
 * This function allows selected image from column to enlarge and display on main display image panel, 'panelImage'.
 * @function
 * @param {string} element - The url of the image selected
 */
function display(element) {
    document.getElementById("panelImage").src = element.src;    
    document.getElementById("myModal").style.display = "block";
    
/**
 * Attach the variable 'element' to the globally scoped object, 'imageURL' to be used for 'saveImage()' function.
 */
    imageURL.link = element.src;
}    
</script>