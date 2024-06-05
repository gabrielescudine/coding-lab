$(function(){
    //Menu Responsivo    
    $('.menu-mobile').click(function(){
        $(this).find('ul').slideToggle();
    })

    //Menu Scroll

    $('.menu-desktop a,.menu-mobile a').on('click',function(){
        let href = $(this).attr('href');
        let offSetTop = $(href).offset().top;

        $('html,body').animate({'scrollTop': offSetTop},1500);
        return false;
    })

    //Sistema de Pesquisa (Barra de Preço) -- PÁGINA DE VENDAS
    let currentValue = 0;
    let isDrag = false;
    let preco_atual = 0;
    let preco_maximo = 70000;

    $('.bar-price-button').mousedown(function(){
        isDrag = true;
    })

    $(document).mouseup(function(){
        isDrag = false;
        enableSelectionText(true);
    })

    $('.bar-price').mousemove(function(e){
        if(isDrag == true){
            disableSelectionText(); 
          let elBase = $(this);
          let mouseX = e.pageX - elBase.offset().left;
          
          if(mouseX < 0){
            mouseX = 0;
          }else if(mouseX > elBase.width()){
            mouseX = elBase.width();
          }
          $('.bar-price-button').css('left',(mouseX - 20) + 'px');

          currentValue = (mouseX / elBase.width()) * 100;
          $('.bar-price-fill').css('width',currentValue + '%');
        }

        preco_atual = (currentValue / 100) * preco_maximo;
        preco_atual = formatarPreco(preco_atual);
        $('.preco_pesquisa').html('R$' + preco_atual);
    })

    function formatarPreco(preco_atual){
        preco_atual = preco_atual.toFixed(2);
        let preco_arr = preco_atual.split('.');
        
        let newPrice = formatarTotal(preco_arr);
        return newPrice;
    }

    function formatarTotal(preco_arr){
        if(preco_arr[0] == 1000){
            return preco_arr[0] + ',' + preco_arr[1]
        }else if(preco_arr[0] < 10000){
            return preco_arr[0][0] + '.' + preco_arr[0].substr(1,preco_arr[0].length) + ','
            + preco_arr[1];
        }else{
            return preco_arr[0][0] + preco_arr[0][1] + '.' + preco_arr[0].substr(2,preco_arr[0].length) + ',' + preco_arr[1];
        }
    }

    function disableSelectionText(){
        $('body').css("webkit-user-select",'none');
        $('body').css("-moz-user-select",'none');
        $('body').css("-ms-user-select",'none');
        $('body').css("o-user-select",'none');
        $('body').css("user-select",'none');
    }

    function enableSelectionText(){
        $('body').css("webkit-user-select",'auto');
        $('body').css("-moz-user-select",'auto');
        $('body').css("-ms-user-select",'auto');
        $('body').css("o-user-select",'auto');
        $('body').css("user-select",'auto');
    }

    //SLIDER PERSONALIZADO -- PÁGINA INDIVIDUAL DOS VEÍCULOS

    let imgShow = 0;
    let maxIndex = Math.ceil($('.border-img').length / 3) - 1;
    let curIndex = 0;

    initSlider();
    navSlider();
    clickSlider();

    function initSlider(){
        let amount = $('.border-img').length * 33.3;
        let elScroll = $('.media-carro-wrapper');
        let elSingle = $('.border-img');
        elScroll.css('width', amount + '%');
        elSingle.css('width', 33.3 * (100 / amount) + '%');
    };
    
    function navSlider(){
        $('.arrow-right-nav').on('click',function(){
            if(curIndex < maxIndex){
                curIndex++;
                let elOff = $('.border-img').eq(curIndex * 3).offset().left - $('.media-carro-wrapper').offset().left;
                $('.media-carro').animate({'scrollLeft': elOff + 'px'})
            }else{
                //console.log('Fim direita');
            }
        })
        $('.arrow-left-nav').on('click',function(){
            if(curIndex > 0){
                curIndex--;
                let elOff = $('.border-img').eq(curIndex * 3).offset().left - $('.media-carro-wrapper').offset().left;
                $('.media-carro').animate({'scrollLeft': elOff + 'px'})
            }else{
                //console.log('Fim esquerda');
            }
        })
    }

    function clickSlider(){
        $('.border-img').on('click',function(){
            $('.border-img').css('background-color','transparent');
            $(this).css('background-color','#8d8d8d');
            let img = $(this).children().css('background-image');

            $('.foto-destaque').css('background-image',img);
        })

        $('.border-img').eq(0).click();
    }

    //Slider Depoimentos
    let amountDepoimento = $('.depoimento-wrapper p').length;
    let currentDepoimento = 0;

    navDepoimento();
    initDepoimento();

    function initDepoimento(){
        $('.depoimento-wrapper p').hide();
        $('.depoimento-wrapper p').eq(0).show();
    }

    function navDepoimento(){
        $('[next]').click(function(){
            currentDepoimento++;
            if(currentDepoimento >= amountDepoimento){
                currentDepoimento = 0;
            }
            $('.depoimento-wrapper p').hide();
            $('.depoimento-wrapper p').eq(currentDepoimento).show();
        })

        $('[prev]').click(function(){
            currentDepoimento--;
            if(currentDepoimento < 0){
                currentDepoimento = amountDepoimento-1;
            }
            $('.depoimento-wrapper p').hide();
            $('.depoimento-wrapper p').eq(currentDepoimento).show();
        })
    }
})