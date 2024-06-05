$(document).ready(function () {
  $(".main-slider-home").slick({
    dots: true,
    infinite: true,
    speed: 300,
    nextArrow:true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    prevArrow: $(".icon-main-asidew .slide-prev"),
    nextArrow: $(".icon-main-asidew .slide-next"),
  });


  jQuery(document).ready(function(){

    jQuery(".hamburger").click(function(){
      jQuery(".menu_navbar_set").toggleClass("is-active");
      jQuery(this).toggleClass("is-active");
    });
    });
    $(document).ready(function () {
      $(".services-slider").slick({
        dots: true,
        infinite: true,
        speed: 300,
        nextArrow:true,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        prevArrow: $(".icon-main-asidew .slide-prev"),
        nextArrow: $(".icon-main-asidew .slide-next"),

      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
    });
  });
  $(document).ready(function () {
    //toggle the component with class accordion_body
    $(".accordion_head").click(function () {
        if ($('.accordion_body').is(':visible')) {
            $(".accordion_body").slideUp(300);
            $(".plusminus").text('+');
        }
        if ($(this).next(".accordion_body").is(':visible')) {
            $(this).next(".accordion_body").slideUp(300);
            $(this).children(".plusminus").text('+');
        } else {
            $(this).next(".accordion_body").slideDown(300);
            $(this).children(".plusminus").text('-');
        }
    });
});

$(window).scroll(function(){
  if($(this).scrollTop() > 40){
      $('section.header-main-sec').addClass('sticky')
  } else{
      $('section.header-main-sec').removeClass('sticky')
  }
});


});
// this function create for page scroll and when screen scroll down on page referesh in both case code properly work that's why make this function
function scrollTop() {
  // 500 -> This is the value in px of the distance to be scrolled for the 'scroll-to-top' button to show-up
  if ($(window).scrollTop() > 500) {
    $(".backToTopBtn").addClass("active");
  } else {
    $(".backToTopBtn").removeClass("active");
  }
}
$(function () {
  // show and hide btn
  scrollTop();
  $(window).on("scroll", scrollTop);

  // body scroll on btn click
  $(".backToTopBtn").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1);
    return false;
  });
});



