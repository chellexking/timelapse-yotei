        <div class = "sideButton1" style = "top: 10em;">
            <i class="far fa-heart"></i>
            <div class = "sidePanelFav">
                <div class = "sidePanelContent">
                    Favourite Images    
                    <hr style="margin-right: 1em;">
                    <div id="imageBorder" style="width:50%; font-size: 15px; ">
                        <center>
                        <img src="../images/2019-01-10_143A20.jpg" style="height: 100px; width: 180px;" onmouseover="borderImg(this);" onmouseout="normalImg(this);"> <br>
                        <?php echo date("F d Y", filemtime("../images/2019-01-10_143A20.jpg"));
                        ?>
                        </center>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class = "sideButton1" style ="top:11.8em;">
            <i class="fas fa-play-circle"></i>
                <div class = "sidePanelVideo">
                <div class = "sidePanelContent">
                    Timelapse Videos    
                    <hr style="margin-right: 1em;">
                    <div id="imageBorder" style="width:50%; font-size: 15px; ">
                        <center>
                        <img src="../images/2019-01-10_143A20.jpg" style="height: 100px; width: 180px;" onclick="showTimelapse();" onmouseover="borderImg(this);" onmouseout="normalImg(this);" > <br>
                        24 Hours
                        </center>
                    </div>
                    <br> 
                    <div id="imageBorder" style="width:50%; font-size: 15px; ">
                        <center>
                        <img src="../images/2019-01-10_143A20.jpg" style="height: 100px; width: 180px;" onclick="showTimelapse();" onmouseover="borderImg(this);" onmouseout="normalImg(this); "> <br>
                        48 Hours
                        </center>
                    </div>
                </div>
            </div>    
        </div>

<style>
/* side panel display */

.sidePanelFav {
    display: none;
    height: 12em;
    width: 16em;
    background: #323232;
    border-radius: 20px 0 20px 20px;
    margin-left: -14.5em;
/*    margin-top: -7em;*/
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
/*    margin-top: -7em;*/
    margin-bottom: 100px;
}

.sidePanelContent { 
    font-size : .65em;
    padding-left: 15px;
    padding-top: 10px;
    font-family: arial;
}

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
function borderImg(x){
    x.style.border = "thin solid #FFFFFF"; 
}
function normalImg(x){
    x.style.border="none";
}    
</script>