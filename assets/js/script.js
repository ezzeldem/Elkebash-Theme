jQuery(document).ready(function ($) {

  if ($('html').attr('dir') == 'rtl') {
    var dir_d = true
  }
  else {
    var dir_d = false
  }




  $(".header_box .nav_list .opne_icon i").click(function (e) {
    e.preventDefault();
    $(".header_box .nav_list .mobile_nav").addClass("open_class");
    $("body").addClass("overlay_y");
    $(".overlay").show();
  });

  $(".header_box .nav_list .mobile_nav .close_icon i, .overlay").click(function (e) {
    $(".header_box .nav_list .mobile_nav").removeClass("open_class");
    $("body").removeClass("overlay_y");
    $(".overlay").hide();
  });


  if ($(window).width() < 772) {
    $('.footer-section .footer-title').click(function () {
      $("#" + $(this).data("slide")).slideToggle();
      console.log($(this).data("slide"));
    });
  }




  var lastScrollTop = 0;
  $(window).scroll(function () {
    var st = $(this).scrollTop();
    var banner = $('.header_box');
    setTimeout(function () {
      if (st > lastScrollTop) {
        banner.addClass('hide');
      } else {
        banner.removeClass('hide');
      }
      lastScrollTop = st;
    }, 100);
  });



  $(".intro_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 800,
    arrows: false,
    fade: true,
    rtl: dir_d,
    dots: true,
    // responsive: [
    //     { breakpoint: 997, settings: { slidesToShow: 2, prevArrow: 1, nextArrow: 1 } },
    //     { breakpoint: 772, settings: { slidesToShow: 1, prevArrow: 1, nextArrow: 1 } },
    // ],
  });



  $(".place_slider").slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    rtl: dir_d,
    dots: true,
    adaptiveHeight: true,
    autoplaySpeed: 1700,
    prevArrow: "<div class='circle-arrow arrwo-left'></div>",
    nextArrow: "<div class='circle-arrow arrwo-right'></div>",
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 993,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 770,
        settings: {
          arrows: false,
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".king_slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    rtl: dir_d,
    dots: true,
    centerMode: true,
    centerPadding: '0px',
    adaptiveHeight: true,
    autoplaySpeed: 1700,
    arrows: false,

    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 993,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 770,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });



  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });
});

