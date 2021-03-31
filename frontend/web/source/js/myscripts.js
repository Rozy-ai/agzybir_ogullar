$(document).ready(function() {

    wow = new WOW({
        boxClass: 'move',
        animateClass: 'animated',
        offset: 100
    })
    wow.init();

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
    $(".burger_menu").on('click', function () {
        $('.hamburger_menu_wrepper').toggleClass("mySideBar");
        $(this).toggleClass("actives open");
    });
    $(".close_icon").on('click', function () {
        $('.hamburger_menu_wrepper').removeClass("mySideBar");
        $('.close_icon').removeClass("actives open");
    });

    $('.offcanfas_menu .dropdown').on('show.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(400);
    });
    $('.offcanfas_menu .dropdown').on('hide.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(500);
    });


    //* Navbar Fixed
    // function navbarFixed() {
    //     if ($('.sticky_nav').length) {
    //         $(window).scroll(function () {
    //             var scroll = $(window).scrollTop();
    //             if (scroll) {
    //                 $(".sticky_nav").addClass("navbar_fixed");
    //             } else {
    //                 $(".sticky_nav").removeClass("navbar_fixed");
    //             }
    //         });
    //     };
    // };
    // navbarFixed();


    function active_dropdown() {
        if ($(window).width() < 992) {
            $('.menu li.submenu > a').on('click', function (event) {
                event.preventDefault()
                $(this).parent().find('ul').first().slideToggle(700);
                $(this).parent().siblings().find('ul').hide(700);
            });
        }
    }
    active_dropdown();

    $(".archive_nav_item a").on('click', function () {
        event.preventDefault();
        var target = $(this).parent().children(".dropdown-menu");
        $(target).slideDown();
        $(this).parent().siblings().find('ul').slideUp(700);
    });

    /*==========  Header  ==========*/
    $('.offcanfas_menu>li,.header_footer').each(function (index) {
        index = (index + 2) * .2;
        index = index + 's';
        $(this).css('animation-delay', index);
    });

    $('.gl_1').hover(function(){
       $('.ic_1').addClass('item_content_hover'); 
    },
    function(){
        $('.ic_1').removeClass('item_content_hover'); 
    });
    $('.gl_2').hover(function(){
       $('.ic_2').addClass('item_content_hover'); 
    },
    function(){
        $('.ic_2').removeClass('item_content_hover'); 
    });
        $('.gl_3').hover(function(){
        $('.ic_3').addClass('item_content_hover'); 
    },
    function(){
        $('.ic_3').removeClass('item_content_hover'); 
    });
        $('.gl_4').hover(function(){
        $('.ic_4').addClass('item_content_hover'); 
    },
    function(){
        $('.ic_4').removeClass('item_content_hover'); 
    });
        $('.gl_5').hover(function(){
        $('.ic_5').addClass('item_content_hover'); 
    },
    function(){
        $('.ic_5').removeClass('item_content_hover'); 
    });
        $('.gl_6').hover(function(){
       $('.ic_6').addClass('item_content_hover'); 
    },
    function(){
        $('.ic_6').removeClass('item_content_hover'); 
    });
                $('.gl_7').hover(function(){
       $('.ic_7').addClass('item_content_hover'); 
    },
    function(){
        $('.ic_7').removeClass('item_content_hover'); 
    });
        $('.gl_8').hover(function(){
       $('.ic_8').addClass('item_content_hover'); 
    },
    function(){
        $('.ic_8').removeClass('item_content_hover'); 
    });
        $('.gl_9').hover(function(){
       $('.ic_9').addClass('item_content_hover'); 
    },
    function(){
        $('.ic_9').removeClass('item_content_hover'); 
    });



         $('.blog-one__single').hover(function(){
       $(this).find('.blog-one__date').addClass('hover_blog'); 
    },
    function(){
        $(this).find('.blog-one__date').removeClass('hover_blog'); 
    });


         $('.product-preview').hover(function(){
       $(this).find('.product-preview__visual').addClass('js-hover'); 
    },
    function(){
        $(this).find('.product-preview__visual').removeClass('js-hover'); 
    });

         
 let numOfClicks = 0;
const $elem = $('.burger_menu');

$elem.on('click', () => {
  ++numOfClicks;
  $('.navbar_top').toggleClass('opacity_for_nav', numOfClicks % 2 !== 0);
});


});