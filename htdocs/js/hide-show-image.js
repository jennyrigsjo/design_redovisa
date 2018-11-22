"use strict";
// This javascript adds an event listener to the <img> element inside the div
// with the class 'region-flash'. If the image fails to load, it sets
// the image's css property 'display' to 'none' in order to avoid displaying
// the 'missing image' icon which would otherwise appear.

var elementExists = document.getElementsByClassName("region-flash").length > 0;

if (elementExists) {

    var regionFlash = document.querySelector(".region-flash");
    // var bgImage = window.getComputedStyle(regionFlash, null).getPropertyValue("background-image");
    // //console.log(bgImage);
    //
    // if (bgImage !== "none") {
    //     //console.log("Background image exists, setting style of <img> element to 'display:none'");
    //     var img = regionFlash.children[0];
    //     img.style.display="none";
    // }

    var img = regionFlash.children[0];
    img.addEventListener("error", function() {
        //console.log("Image could not be loaded, setting style to 'display:none' to hide broken image icon");
        img.style.display="none";
    });

}
