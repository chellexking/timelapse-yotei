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
</style>

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