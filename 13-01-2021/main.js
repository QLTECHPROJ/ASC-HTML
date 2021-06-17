// img li

// $(document).ready(function(){
//     $(".main-menu ul li ").on('click', function(){
//     $(".main-menu ul li").removeClass("active");
//     $(this).addClass("active");   
//     })
//   });

//scroll top

function scrollUp() {
  $(window).scroll(function () {
      if ($(this).scrollTop() > 150) {
          $("header .main-header").addClass("sticky");

      } else {
          $("header .main-header").removeClass("sticky");
      }
  });
}
scrollUp();

// testimonial-slider-main

$('.testimonial-slider-main').slick({
  infinite: true,
  slidesToShow:1,
  slidesToScroll: 1,
  loop:true,
  dots:false,
  arrow:true,
  autoplay:true,
  autoplaySpeed:3000
});

// img-slider-main

$('.img-slider-main').slick({
    infinite: true,
    slidesToShow:1,
    slidesToScroll: 1,
    loop:true,
    dots:false,
    arrow:true,
    autoplay:true,
    autoplaySpeed:3000
  });

// scroll to map


if($(window).width() < 991){
  $('.camp-listing ul li').click(function() {
    $('html, body').animate({
    scrollTop: $("#maps").offset().top - 90
    }, 1000);
  });
}

// click to remove tr

$("tr td .cancel").on("click", function(){
  $(this).closest("tr").remove();
})

// tooltip

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// read more and less

$(document).ready(function() {
  (function() {
    var showChar = 101;
    var ellipsestext = "...";

    $(".truncate").each(function() {
      var content = $(this).html();
      if (content.length > showChar) {
        var c = content.substr(0, showChar);
        var h = content;
        var html =
          '<div class="truncate-text" style="display:block">' +
          c +
          '<span class="moreellipses">' +
          ellipsestext +
          '&nbsp;&nbsp;<a href="javascript:void(0);" class="moreless more color-orange decoration-none">Read More</a></span></span></div><div class="truncate-text" style="display:none">' +
          h +
          '<a href="javascript:void(0);" class="moreless less color-orange decoration-none">Read Less</a></span></div>';

        $(this).html(html);
      }
    });

    $(".moreless").click(function() {
      var thisEl = $(this);
      var cT = thisEl.closest(".truncate-text");
      var tX = ".truncate-text";

      if (thisEl.hasClass("less")) {
        cT.prev(tX).toggle();
        cT.slideToggle();
      } else {
        cT.toggle();
        cT.next(tX).fadeToggle();
      }
      return false;
    });
  })();
});


// 
$(function()
{
  $("#minus").click(function()
  {
      var currentVal = parseInt($(this).next(".qty").val());
      if (currentVal != NaN)
      {
          if(currentVal > 0){
                  $(this).next(".qty").val(currentVal - 1);
              }

      }
  });
    $("#plus").click(function()
    {
        var currentVal = parseInt($(this).prev(".qty").val());
        if (currentVal != NaN)
        {
            $(this).prev(".qty").val(currentVal + 1);
        }
    });

});

// Address

$(document).ready(function() {
  $('#add_new').on('click', function () {
      $('.New-address').removeClass('d-none');
      $('.main-address').removeClass('d-block');
      $('.main-address').addClass('d-none');
      $('.New-address').addClass('d-block');
      $(window).scrollTop(0);
  });
  $('#new_back').on('click', function () {
      $('.New-address').removeClass('d-block');
      $('.main-address').removeClass('d-none');
      $('.New-address').addClass('d-none');
      $('.main-address').addClass('d-block');
      $(window).scrollTop(0);
  });
});

// Order

$(document).ready(function() {
  $('.order_details').on('click', function () {
      $('.order-details').removeClass('d-none');
      $('.main-order').removeClass('d-block');
      $('.main-order').addClass('d-none');
      $('.order-details').addClass('d-block');
      $(window).scrollTop(0);
  });
  $('#back_order').on('click', function () {
      $('.order-details').removeClass('d-block');
      $('.main-order').removeClass('d-none');
      $('.main-order').addClass('d-block');
      $('.order-details').addClass('d-none');
      $(window).scrollTop(0);
  });
});

// kids

$(document).ready(function() {
  $('.kids_id').on('click', function () {
      $('.kids_details').removeClass('d-none');
      $('.main-kids').removeClass('d-block');
      $('.main-kids').addClass('d-none');
      $('.kids_details').addClass('d-block');
      $(window).scrollTop(0);
  });
  $('#back_kids').on('click', function () {
      $('.kids_details').removeClass('d-block');
      $('.main-kids').removeClass('d-none');
      $('.main-kids').addClass('d-block');
      $('.kids_details').addClass('d-none');
      $(window).scrollTop(0);
  });
});

// toggle_sidebar

$(document).ready(function() {
    $('#toggle_sidebar').on('click', function () {
        $('.sidebar.side-sticky.small').toggleClass('toggle');
    });
}); 

// Home slider


$('.Home_slider').slick({
  infinite: true,
  slidesToShow:1,
  slidesToScroll: 1,
  loop:true,
  dots:false,
  arrow:true,
  autoplay:true,
  autoplaySpeed:3000
});


// Partner slider

$('.partner_slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
// Partner slider

  $('.blog_slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow:1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  // modal-section stop iframe
  $('#video_modal').on('hidden.bs.modal', function () {
    // $('#video_id').attr('src', '');
    $('#video_id').attr('src', $('#video_id').attr('src'));
  });

  // form  show
  $('#download_flyer').click(function() {
    $('html, body').animate({
    scrollTop: $("#flyer_form").offset().top - 90
    }, 1000);
  });

  // comment box show
  $(document).ready(function() {
    $('.reply_open').on('click', function () {
      $('.gray-data.leave').toggleClass('d-block');
        $('html, body').animate({
        scrollTop: $(".gray-data.leave.d-block").offset().top - 130
        }, 1000);
    });
  });