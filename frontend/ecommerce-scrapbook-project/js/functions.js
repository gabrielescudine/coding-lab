$(function(){
  //Slick Sliders do Site
  $('section.banner-products .banner-slider').slick({
    dots: true,
    arrows:false,
    infinite: true,
    speed:1000,
    slidesToShow: 1,
    autoplay: true,
    centerMode:false,
    autoplaySpeed: 3000,
    pauseOnHover:false
});

$('section.destaque-produtos .box-produtos').slick({
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
      breakpoint:1040,
      settings: {
        slidesToShow: 2
      }
    },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 1
    }
  }
  ]
});

$('section.depoimentos .box-depoimentos').slick({
  dots: true,
  arrows:false,
  infinite: true,
  speed:1000,
  slidesToShow: 3,
  autoplay: true,
  centerMode:false,
  autoplaySpeed: 3000,
  pauseOnHover:false,
  responsive: 
  [
    {
      breakpoint:1040,
      settings: {
        slidesToShow: 2
      }
    },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 1
    }
  }
  ]
});

  //Função p/ mudar cor do menu ao clicar (ver depois)

})




