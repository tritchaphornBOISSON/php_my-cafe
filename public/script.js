
// STICKY MENU

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        document.querySelector(".navbar").style.backgroundColor = "#fefae0";
    } else {
        document.querySelector(".navbar").style.backgroundColor = "rgb(254, 250, 224, 0.5)";
    }
}
