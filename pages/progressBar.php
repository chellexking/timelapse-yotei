<!DOCTYPE html>
<html>
<style>
#myProgress {
  width: 100%;
  right: 0px;
  background-color: dimgray;
  opacity: .8;
  bottom: 0px;
  position: absolute;
  z-index: 3;
  left: 30px;
  height: 27px;
}

#myBar {
  margin-left: 25px; 
  margin-top: 10px;
  width: 1%;
  height: 4px;
  background-color: whitesmoke;
}
    
#playPauseButton {
    font-size: 15px;
    background-color: dimgray;
    position: absolute;
    bottom: 0px;
    z-index: 4;
    padding: 5px 10px;
    color: darkgray;
    border-radius: 5px;
}   

    #playPauseButton:hover {
        cursor: pointer;
        background-color: darkgrey;
        color: aliceblue;
        border-radius: 5px;
    }    
    
</style>
<body>

    <div id="playPauseButton"> <i class="fa fa-play" aria-hidden="true"></i> </div>
    <div id="myProgress">
        <div id="myBar"></div>
    </div>
</body>
      

<script>
function move() {
  var elem = document.getElementById("myBar");  
  var width = 1;
  var id = setInterval(frame, 250);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
    
    
</script>

</html>