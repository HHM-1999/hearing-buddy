$(document).ready(function () {

 // sticky-menu
 window.onscroll = function() {
  myFunction()
};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

var header2 = document.getElementById("myHeader2");
var sticky2 = header.offsetTop;


function myFunction() {
  if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
  } else {
      header.classList.remove("sticky");
  }
  if (window.pageYOffset > sticky2) {
      header2.classList.add("sticky2");
  } else {
      header2.classList.remove("sticky2");
  }
}

  //BackToTop
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#back_to_top').fadeIn();
      } else {
        $('#back_to_top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back_to_top').click(function () {
      $('#back-to-top').tooltip('hide');
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });

    $('#back_to_top').tooltip('show');

  });
});

// back-to
var btn = $('#button');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});


// mobile menu
$(document).ready(function() {
  function myMenuBtnChng() {
      var element = document.getElementById("menu-button");
      element.classList.toggle("fa-times");
      element.classList.toggle("fa-bars");
  }
});
$(document).ready(function() {
  $(".menu-search").click(function(event) {
    event.preventDefault();
    $(".search_block").toggle("show hide");
  });
  $('a.close-search').click(function(e) {
    e.preventDefault();
    $(".search_block").toggle("show hide");
  });

  $('.menu-left').click(function(e) {
    e.preventDefault();

    $('body, .most_last_news_details, .most_read_details').toggleClass('no-scrollbar');
  });
});
  $(document).ready(function() {
    // append plus symbol to every list item that has children
    $('#mobile-nav .parent').append('<i class="open-menu fas fa-plus "></i>');

    // fix non-scrolling overflow issue on mobile devices
    $('#mobile-nav > ul').wrap('<div class="overflow"></div>');
    $(window).on('load resize', function() {
      var vph = $(window).height() - 57; // 57px - height of #mobile-nav
      $('.overflow').css('max-height', vph);
    });

    // global variables
    var menu = $('.overflow > ul');
    var bg = $('html, body');

    function bgScrolling() {
      if (menu.hasClass('open')) {
        bg.css({
          'overflow-y': 'hidden',
          'height': 'auto'
        });
      } else {
        bg.css({
          'overflow-y': 'visible',
          'height': '100%'
        });
      }
    }

    $('.menu-button').on('click', function(e) {
      e.preventDefault();
      // activate toggles
      menu.slideToggle(250);
      menu.toggleClass('open');
      $(this).children().toggleClass('fa-reorder fa-remove');
      bgScrolling();
    });

    // list item click events
    $('.open-menu').on('click', function(e) {
      e.preventDefault();
      $(this).prev('ul').slideToggle(250);
      $(this).toggleClass('rotate');
    });
  });








// slider
$(document).ready(function () {
  $('.ser-slider-active').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 3000,
    lazyLoad: 'ondemand',
    autoplay: false,
    prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
    nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]

  });


  // slider
  $(document).ready(function () {
    $('.testimonial').slick({
      dots: true,
      arrows: false,
      infinite: true,
      speed: 500,
      lazyLoad: 'ondemand',
      autoplay: true,
      fade: true,
      cssEase: 'linear',
      prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
      nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1023,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

      ]

    });
  });

});
// flip card
$(".flipper").click(function() {
  var target = $( event.target );
  if ( target.is("a") ) {
    //follow that link
    return true;
  } else {
    $(this).toggleClass("flip");
  }
  return false;
});

