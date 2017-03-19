$(function () {

    //跑馬燈
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    $('.play').on('click', function () {
        owl.trigger('play.owl.autoplay', [800])
    });

    $('.stop').on('click', function () {
        owl.trigger('stop.owl.autoplay')
    });


    //視差特效
    var parallax = document.querySelectorAll(".prlx_lyr_1"),
        speed = -0.5;

    window.onscroll = function () {
        [].slice.call(parallax).forEach(function (el, i) {

            var windowYOffset = window.pageYOffset,
                elBackgrounPos = "50% " + (windowYOffset * speed) + "px";

            el.style.backgroundPosition = elBackgrounPos;

        });
    };
});

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it

if(document.getElementById("defaultOpen"))
{
    document.getElementById("defaultOpen").click();
}

var navTop = 140;
var scrollbarTop = 0;
$(window).scroll(
    function () {
        scrollbarTop = $(window).scrollTop();
        if (scrollbarTop > navTop) {

            // $('.onTop').css('display','none');
            $('.fixed-nav').css('display','block');

        } else {
            // $('.onTop').css('display','block');
            $('.fixed-nav').css('display','none');
        }
    }
);
