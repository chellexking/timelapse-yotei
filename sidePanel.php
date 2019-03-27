<!-- This file represents the 3 buttons on the right which comprises of favourite images, timelapse video, and image save button. -->
        
        <!-- Button 1 -->
        <div class = "sideButton1" style = "top: 10em;">
            <i class="far fa-heart"></i>
            <!-- This div will be displayed on hover -->
            <div class = "sidePanelFav">
                <div class = "sidePanelContent">
                    Favourite Images    
                    <hr style="margin-right: 1em;">
                    <div id="imageBorder" style="width:50%; font-size: 15px; ">
                        <center>
                        <img src="images/2019-01-10_143A20.jpg" style="height: 100px; width: 180px;" onmouseover="borderImg(this);" onmouseout="normalImg(this);"> <br>
                        <?php
                            /** 
                             * Gets the date where file is created and display in month|date|year format.
                             */
                            echo date("F d Y", filemtime("images/2019-01-10_143A20.jpg"));
                        ?>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Button 2 -->
        <div class = "sideButton1" style ="top:11.8em;">
            <i class="fas fa-play-circle"></i>
            <!-- This div will be displayed on hover -->     
            <div class = "sidePanelVideo">
                <div class = "sidePanelContent">
                    Timelapse Videos    
                    <hr style="margin-right: 1em;">
                    <div id="imageBorder" style="width:50%; font-size: 15px; ">
                        <center>
                        <!-- When image is clicked, timelapse video will be played triggered by "showTimelapse()" function. 
                             When moused over, image will be highlighted -->    
                        <img src="images/2019-01-10_143A20.jpg" style="height: 100px; width: 180px;" onclick="showTimelapse();" onmouseover="borderImg(this);" onmouseout="normalImg(this);" > <br>
                        24 Hours
                        </center>
                    </div>
                    <br> 
                    <div id="imageBorder" style="width:50%; font-size: 15px; ">
                        <center>
                        <img src="images/2019-01-10_143A20.jpg" style="height: 100px; width: 180px;" onclick="showTimelapse();" onmouseover="borderImg(this);" onmouseout="normalImg(this); "> <br>
                        48 Hours
                        </center>
                    </div>
                </div>
            </div>    
        </div>
        
        <!-- Button 3 -->
        <div class="sideButton" onclick="saveImage();">
            <i class="fas fa-cloud-download-alt"> </i> Save </div>

<style>
/* side panel display */

.sidePanelFav {
    display: none;
    height: 12em;
    width: 16em;
    background: #323232;
    border-radius: 20px 0 20px 20px;
    margin-left: -14.5em;
    overflow-y: scroll;
    margin-bottom: 100px;
}

.sidePanelVideo {
    display: none;
    height: 12em;
    width: 16em;
    background: #323232;
    border-radius: 20px 0 20px 20px;
    margin-left: -14.5em;
    margin-bottom: 100px;
}

.sidePanelContent { 
    font-size : .65em;
    padding-left: 15px;
    padding-top: 10px;
    font-family: arial;
}

/* side buttons!!! */
    
/* for Button 3 */    
.sideButton {
    overflow: hidden;
    width: 70px;
    color: aliceblue;
    z-index: 1;
    position: absolute;
    font-size: 120%;
    background: #4F4C4C;
    border-radius: 10%;
    bottom: 100px;
    right: .8em;
    padding: .3em .5em .3em .5em;
    font-family: inherit;
}

.sideButton:hover{
    cursor: pointer;
    background: #908F8F;
    -webkit-transition: all .3s ease-in;
}    
    
/* for Button 1 and 2 */    
.sideButton1 {
    height:  1em;
    width: 50px;
    color: aliceblue;
    z-index: 2;
    position: absolute;
    font-size: 180%;
    background: #4F4C4C;
    border-radius: 10%;
    right: -.8em;
    padding: .3em .5em .3em .5em;
    cursor: pointer;
}

.sideButton1:hover .sidePanelFav { 
    display: block;
    cursor: pointer;
}

.sideButton1:hover .sidePanelVideo { 
    display: block;
    cursor: pointer;
}
</style>

<script>
/**
  * shows border upon image hover
  */
function borderImg(x){
    x.style.border = "thin solid #FFFFFF"; 
}
function normalImg(x){
    x.style.border="none";
}    
</script>