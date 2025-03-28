$('section.slider-clients .slider-content').slick({
    dots: true,
    arrows:false,
    infinite: false,
    speed:1000,
    slidesToShow: 3,
    autoplay: true,
    centerMode:false,
    autoplaySpeed: 3000,
    pauseOnHover:false,
    responsive: 
    [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    }
    ]
});

$('section.depoimentos .box-depoimentos').slick({
    dots: true,
    arrows:false,
    infinite: true,
    speed:1000,
    slidesToShow: 1,
    centerMode:false
});

