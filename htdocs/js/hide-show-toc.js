"use strict";

if (screen.width <= 680) {
    var elementExists = document.querySelector(".toc").length > 0;

    if (elementExists) {

        var toc = document.getElementsByClassName("toc")[0];
        //console.log(toc);
        var heading = toc.firstChild.nextElementSibling;
        //console.log(heading);
        var list = heading.nextElementSibling;
        //.log(list);

        heading.addEventListener("click", function() {
            console.log(screen.width);
            var style = window.getComputedStyle(list, null).getPropertyValue("display");
            list.style.display = (style === "none") ? "block" : "none";
            console.log(list.style.display);
        });

    }

}
