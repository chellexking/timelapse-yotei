<?php
    header("Content-type: text/css; charset: UTF-8");

    $dir = "48hr";
    $files = scandir($dir, SCANDIR_SORT_DESCENDING);
    $latestImg = $files[0];

?>


html {
    overflow: hidden;
}

/*image display on page */
.modal {
    background: url("48hr/<?php echo $latestImg; ?>");
    background-repeat: no-repeat;
    max-height: 100%;
    max-width: 100%;
    min-width: 100%;
    background-position: center;
    background-size: cover;
    cursor: -webkit-zoom-in;
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 80px;
    overflow: hidden;
}

#panelImage {
    object-position: center;
    height: 100%;
    width: 100%;
    object-fit: cover;
    max-width: 100%;
    min-width: 1024px;
    min-height: 100%;
    position: relative;
    cursor: -webkit-zoom-in;
}


#panelImage-fullscreenCursor {
    object-position: center;
    height: 100%;
    width: 100%;
    object-fit: cover;
    max-width: 100%;
    min-width: 1024px;
    min-height: 100%;
    cursor: -webkit-zoom-out;
}

/* live cam at bottom right */
.livecamContainer{
    position: fixed;
    background: url("48hr/<?php echo $latestImg; ?>");
    background-size: cover;
    background-repeat: no-repeat;
    overflow: hidden;
    height: 80px;
    width: 100px;
    bottom:0;
    right:0;
    z-index: -1;
}
.livecamContainer:hover{
    cursor: pointer;

}
.cameraIcon {
    padding-top: 5px;
    font-size: 25px;
    font-weight: bold;
    margin-left: 25px;
    color: white;
}
.liveText{
    color: white;
    background: #EC2D2D;
    font-size: 18px;
    padding-left: 30px;

}

/*loader!!! */

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
