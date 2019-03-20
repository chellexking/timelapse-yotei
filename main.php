<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <!--
    By sequence:     
    - local stylesheet
    - fa-fa icons library
    - local javascript file
    - javascript library for timelapse video
    -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>
    
<body onload="loadingScreen()" style="margin:0;">

    <!-- the loading page and default body display style -->
    <div id="loader"></div>
    <div id="pageDisplay" style="display:none;">
    
        <!-- side bar fav button,
             side bar play button,
             side bar save button -->
        <?php include 'sidePanel.php'; ?>

        <div class="sideButton" onclick="saveImage();">
            <i class="fas fa-cloud-download-alt"> </i> Save </div>

    <!-- display image -->
    <div id="myModal" class="modal"> 
        <img id="img01" style="max-width:100%;" onclick="fullscreen();"></div>    
        
    <!-- bottom column for image selection --> 
    <?php include 'imageColumn.php'; ?>
    
    <!-- ruler for bottom panel --> 
    <?php include 'ruler.php'; ?>
    
    <!-- livecam container for bottom right -->
        <div class="livecamContainer">
        <div class="liveText"> LIVE </div>    
            <div class="cameraIcon">
            <i class="fa fa-camera-retro fa-2x" ></i></div>
        </div>
        </div>    

    <!-- livestream video play --> 
    <?php include 'timeLapse.php'; ?>

</body>
</html>