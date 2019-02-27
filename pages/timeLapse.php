<div id="liveStream" style="display:none">   
    
    <?php
    $files = glob("../images/*.*");
    foreach($files as $num)
    {
        $image = '<img src="'.$num.'" style="max-height:100%; max-width:100%">';
      echo $image;
    }
//    exit; 
    ?>

<?php include 'progressBar.php' ?>
    
</div>

<script>
        $("#liveStream > img:gt(0)").hide();
</script>