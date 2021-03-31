;
(function ($) {

    // 5. fullPage
    if ($('#fullpage').length > 0) {
        $("#fullpage").fullpage({
            navigation: true,
            navigationPosition: "right",
            autoScrolling: true,
            scrollBar: false,
            scrollOverflow: true,
            animateAnchor: true,
            css3: true,
            verticalCentered: true,
        });
        $('#moveDown').click(function () {
            $.fn.fullpage.moveSectionDown();
        });
        $('#moveUp').click(function () {
            $.fn.fullpage.moveSectionUp();
        });
    }

    // full screen side nav
    // $(".burger_menu").on('click', function () {
    //     $('.hamburger_menu_wrepper').toggleClass("mySideBar");
    //     $(this).toggleClass("actives");
    // });
    // $(".close_icon").on('click', function () {
    //     $('.hamburger_menu_wrepper').removeClass("mySideBar");
    //     $('.close_icon').removeClass("actives");
    // });

      $(".burger_menu").on('click', function () {
        $('.hamburger_menu_wrepper').toggleClass("mySideBar");
        $(this).toggleClass("open");
    });
    $(".close_icon").on('click', function () {
        $('.hamburger_menu_wrepper').removeClass("mySideBar");
        $('.close_icon').removeClass("open");
    });

    $('.offcanfas_menu .dropdown').on('show.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(400);
    });
    $('.offcanfas_menu .dropdown').on('hide.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(500);
    });


    /*===============================================
          Parallax Init
     ================================================*/
    if ($('#fullpage,.home_three').length > 0) {
        $('#fullpage,.home_three').parallax({
            scalarX: 10.0,
            scalarY: 0.0,
        });
    }

    function parallax() {
        if ($(".parallaxie").length) {
            $('.parallaxie').parallaxie({
                speed: 0.5,
            });
        }
    }
    parallax();

 let numOfClicks = 0;
const $elem = $('.burger_menu');

$elem.on('click', () => {
  ++numOfClicks;
  $('.navbar_top').toggleClass('opacity_for_nav', numOfClicks % 2 !== 0);
});
    


})(jQuery)