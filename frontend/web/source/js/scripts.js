    $(document).on('ready', function() {

      $(function() {
    var path = location.pathname;
    $("a[href='" + path + "']").addClass('active');
})

        $('#show').click(function(){
      $(this).css('display','none');
      $('#hide').css({
        'display':'block',
      });
      $('.search').show(400).css('display','block');
      $('.search_submit').show(400).css('display','block');
    });
    $('#hide').click(function(){
      $(this).css('display','none');
      $('#show').css({
        'display':'block',
      });
      $('.search').hide(400);
      $('.search_submit').hide(400);
    });

      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow: '<div class="slick_prev_bottom"><i class="fa fa-angle-left"></i></div>',
        nextArrow: '<div class="slick_next_bottom"><i class="fa fa-angle-right"></i></div>',
          responsive: [
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
      });

    //   $(".regular_tab").slick({
    //     dots: false,
    //     infinite: true,
    //     fade: false,
    //     slidesToShow: 4,
    //     slidesToScroll: 1,
    //     prevArrow: '<div class="slick_prev"><?= yii::t("app", "prev") ?></div>',
    //     nextArrow: '<div class="slick_next"><?= yii::t("app", "next") ?>  | </div>',
    //       responsive: [
    //   {
    //     breakpoint: 750,
    //     settings: {
    //       slidesToShow: 2,
    //       slidesToScroll: 1
    //     }
    //   },
    //   {
    //     breakpoint: 550,
    //     settings: {
    //       slidesToShow: 1,
    //       slidesToScroll: 1
    //     }
    //   },
    // ]
    //   });
   
 $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
     e.target
     e.relatedTarget
     $('.regular_tab').slick('setPosition');
 });

    $(".center").slick({
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 0,
    speed: 9000,
    arrows: false,
    dots: false,
    infinite: true,
    centerMode: true,
    slidesToShow: 6,
    slidesToScroll: 3,
            responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 5,
        }
      },
    ]
  });

      $(".like-Unlike").click(function(e) {
        // var a = $(this).html();
        // alert(a);
    if ($(this).html() == '<i class="fa fa-heart-o"></i>') {
        $(this).html('<i class="fa fa-heart" style="color : red"></i>');
    }
    else {
        $(this).html('<i class="fa fa-heart-o"></i>');
    }
    return false;
});

    });
