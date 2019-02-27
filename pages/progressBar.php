<!DOCTYPE html>
<html>
<style>
#myProgress {
  width: 100%;
  background-color: dimgray;
  opacity: .8;
  bottom: 0px;
  position: absolute;
  z-index: 3;
}

#myBar {
  width: 1%;
  height: 13px;
  background-color: whitesmoke;
}
    
</style>
<body>
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