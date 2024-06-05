$(function(){
    //Menu Mobile Responsivo
    $('.menu-mobile').on('click',function(){
        $(this).find('ul').slideToggle();
    })

    //Menu Scroll

    $('.menu-desktop a,.menu-mobile a').on('click',function(){
        let href = $(this).attr('href');
        let offSetTop = $(href).offset().top;

        $('html,body').animate({'scrollTop':offSetTop}, 1500);
    
    return false;
    })

    //Slick Slider

    $('.mosaico .center .mosaico-wrapper').slick({
        centerMode:false,
        slidesToShow: 6,
        arrows:false,

        responsive:[{
            breakpoint:768,
            settings:{
                centerMode:true,
                slidesToShow:3
            }
        },
        {
            breakpoint:580,
            settings:{
                centerMode:true,
                arrows:false,   
                slidesToShow:2
            }
        }
    ]
    })

    $('.tratamentos .center').slick({
        centerMode:false,
        infinite:false,
        arrows:false,
        slidesToShow:3,

        responsive:[{
            breakpoint:768,
            settings:{
                dots:true,
                slidesToShow:2
            }
        },
        {
            breakpoint:480,
            settings:{
                dots:true,
                slidesToShow:1,
                centerMode:false,
                infinite:false
            }
        }
    ]
    })

    $('.depoimentos .center').slick({
        arrows:false,
        dots:true,
        slidesToShow:1,
        centerMode:false,
        infinite:false
    })
})



