// Declare a single global-scoped object to be used in function 'display()' to assign it with value of selected image.
var imageURL = {};

// Image save function
function saveImage() {
    if (imageURL !== null){
        // Call the globally scoped object
        window.open(imageURL.link);
    }
}

// Fullscreen toggle functions
function fullscreen(){
    if(!document.fullscreenElement){
        document.documentElement.requestFullscreen();
    } else {
        document.exitFullscreen();
    }
}

// Fullscreen cursor properties; switch between zoom in and zoom out cursor.
document.addEventListener("fullscreenchange", function (event){
if(document.fullscreenElement){
    document.getElementById('panelImage').setAttribute('id','panelImage-fullscreenCursor');

} else {
    document.getElementById('panelImage-fullscreenCursor').setAttribute('id','panelImage');
}
});

// Loading screen function, display main page after 2 seconds.
function loadingScreen(){
    var timeOut = setTimeout(showPage, 2000);
}

function showPage(){
    document.getElementById("loader").style.display="none";
    document.getElementById("pageDisplay").style.display="block";
}
