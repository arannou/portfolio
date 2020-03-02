document.addEventListener('DOMContentLoaded', fn, false);

function fn() {
    offsetGetter();
    window.onresize = offsetGetter;

    document.querySelector("body").onscroll = function() {
        
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var d = window.scrollY;

        if (d<=window.a) {
            activateHeader(0);
        } else if (d>window.a && d<=window.b) {
            activateHeader(1);
        } else {
            activateHeader(2);
        }
    }
}

function activateHeader(li_number) {
    let el = document.getElementsByClassName("active")
    if (typeof el[0] !== "undefined") {
        el[0].classList.remove("active");
    }

    document.querySelectorAll("nav li")[li_number].classList.add("active");
}

function offsetGetter() {
    var sections = document.getElementsByTagName("section");
    var anchor_height = 56;
    window.a = sections[0].offsetHeight + anchor_height; // height of presentation
    window.b = window.a + sections[1].offsetHeight + anchor_height; // height of presentation + parcours
}