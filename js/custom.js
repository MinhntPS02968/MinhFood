$(window).scroll(function() {
    var fixtop = document.getElementById("head");
    if ($(window).innerWidth() < 600) {
        fixtop.classList.remove('fixed-top');
    } else {
        fixtop.classList.add('fixed-top');
    }
});

