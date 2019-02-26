
// declare a single global-scoped object
var imageURL = {};

//image modal display on panel functions
function display(element) {
    document.getElementById("img01").src = element.src;    
    document.getElementById("myModal").style.display = "block";
    
    //attach the variable to the globally scoped object
    imageURL.link = element.src;
}    

//function to save image
function saveImage() {
    //call the globally scoped object
    window.open(imageURL.link);
}
    

//fullscreen toggle functions 
function fullscreen(element){
    if(!document.fullscreenElement){
        document.documentElement.requestFullscreen();
        
    } else {
        document.exitFullscreen();
    }
}

//fullscreen cursor properties
document.addEventListener("fullscreenchange", function (event){
if(document.fullscreenElement){
    document.getElementById('img01').setAttribute('id','img01-fullscreenCursor');
    
} else {
    document.getElementById('img01-fullscreenCursor').setAttribute('id','img01');
}
});

//loading screen function
function loadingScreen(){
    var timeOut = setTimeout(showPage, 2000);
}

function showPage(){
    document.getElementById("loader").style.display="none"; 
    document.getElementById("pageDisplay").style.display="block";
}

//timelapse function upon button click
function showTimelapse(){
    var x = document.getElementById("liveStream");
    if(x.style.display === "none"){
        x.style.display = "block";
    }
    else{
        x.style.display="none";
    }
    
// set it running every one second
        setInterval(function() { 
          $('#liveStream > img:first')
            .fadeOut(200)
            .next()
            .fadeIn(200)
            .end();
        },  200);
    
}

    
    


