document.addEventListener('DOMContentLoaded', fn, false);

function fn() {
    offsetGetter();
    window.onresize = offsetGetter;

    document.querySelector("body").onscroll = function() {
        
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var d = window.scrollY;

        if ((height-80)<=d && d<=height) {
            //contact
            activateHeader(3);
        } else if (window.a<=d && d<window.b) {
            //parcours
            activateHeader(1);
        } else if (window.b<=d && d<(height-80)) {
            //realisations
            activateHeader(2);
        } else {
            //presentation
            activateHeader(0);
        }
    }
}

function activateHeader(li_number) {
    document.getElementsByClassName("active")[0].classList.remove("active");

    document.querySelectorAll("nav li")[li_number].classList.add("active");
}

function offsetGetter() {
    var sections = document.getElementsByTagName("section");
    var anchor_height = 56;
    window.a = sections[0].offsetHeight + anchor_height;
    window.b = window.a + sections[1].offsetHeight + anchor_height;
}