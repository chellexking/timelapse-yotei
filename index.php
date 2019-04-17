<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <!--
    Links by sequence:
    - local css stylesheet
    - fa-fa icons library
    - local javascript file
    - javascript library for timelapse video
    -->
    <link rel="stylesheet" href="style.php" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>

<!-- The default body loading screen with hidden body to be triggered by function "loadingScreen()" -->
<body onload="loadingScreen()" style="margin:0;">

    <div id="loader"></div>
    <div id="pageDisplay" style="display:none;">

    <!-- side bar buttons -->
    <?php include 'sidePanel.php'; ?>

    <!-- main display image panel -->
    <div id="myModal" class="modal">
        <img id="panelImage" style="max-width:100%;" onclick="fullscreen();"></div>

    <!-- bottom column for image selection -->
    <?php include 'imageColumn.php'; ?>

    <!-- ruler grid for bottom panel -->
    <?php include 'ruler.php'; ?>

    </div>

    <!-- livestream video play -->
    <?php include 'timeLapse24h.php'; ?>
    <?php include 'timeLapse48h.php'; ?>

</body>
</html>
