    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
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

      $(".regular_tab").slick({
        dots: false,
        infinite: true,
        fade: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<div class="slick_prev">пред</div>',
        nextArrow: '<div class="slick_next">след  | </div>',
          responsive: [
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
      });
   
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
    slidesToShow: 4,
    slidesToScroll: 3,
            responsive: [
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
    ]
  });

    });
