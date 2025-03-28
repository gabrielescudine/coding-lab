<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Sobre - WP</title>
</head> 
<body>
    <header>
        <div class="center">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div><!--Logo-->

            <nav class="menu-desktop">
                <ul>
                    <li><a href="index.php" target="_self" rel="next">Início</a></li>
                    <li><a href="sobre.php" target="_self" class="selected">Sobre</a></li>
                    <li><a href="contato.php" target="_self" rel="next">Contato</a></li>
                </ul>
            </nav><!--Menu Desktop-->

            <nav class="menu-mobile">
            <i class="fa-solid fa-align-right"></i>
                <ul>
                    <li><a href="index.php" target="_self" rel="next">Início</a></li>
                    <li><a href="sobre.php" target="_self">Sobre</a></li>
                    <li><a href="contato.php" target="_self" rel="next">Contato</a></li>
                </ul>
            </nav><!--Menu Desktop-->
            <div class="clear"></div>
        </div><!--Centralização-->
    </header><!--Header-->

    <main>

        <section class="sobre-equipe">
            <div class="center">
                <div class="w-50 text-team">
                    <h2>Lorem Ipsum Lorem Ipsum Dolor Dimun Dimun Dolor</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium tenetur id enim nesciunt vero necessitatibus sed inventore, magnam possimus molestiae atque earum, consectetur dolorem laborum molestias, minus temporibus cupiditate? Rem!</p>
                </div><!--W50-->
                <div class="w-50 img-team">
                    <img src="img/foto-equipe-01.png" alt="">
                </div><!--W50-->
                <div class="clear"></div>
            </div><!--Centralização-->
        </section><!--Sobre Equipe-->

        <section class="gallery-images">
            <div class="center">
                <nav class="images-slider">
                    <img src="img/foto-1.png" alt="">
                    <img src="img/foto-2.png" alt="">
                    <img src="img/foto-3.png" alt="">
                    <img src="img/foto-4.png" alt="">
                </nav><!--Images Slider-->
            </div><!--Centralização-->
        </section><!--Gallery Images-->

        <section class="metodologia">
            <div class="center">
                <h2>Conheça nossa metodologia</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, assumenda. 
                <br>
                Cumque in officia, labore hic quam cum. Dicta temporibus quaerat quae rem, voluptates incidunt amet! Praesentium maxime error expedita esse!</p>
                <a href="#" target="_blank" rel="next">Entrar em contato</a>
            </div><!--Centralização-->
        </section><!--Metodologia-->

    </main><!--Principal-->
    <footer>
        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <p><a href="#">Contato</a></p>
                <p><a href="#">FAQ</a></p>
            </div><!--Coluna Footer-->

            <div class="col-footer">
                <h2>Consultoria</h2>
                <p><a href="#">Metodologia</a></p>
                <p><a href="#">Clientes</a></p>
            </div><!--Coluna Footer-->

            <div class="col-footer">
                <h2>Empresa</h2>
                <p><a href="#">Sobre</a></p>
                <p><a href="#">Política de Privacidade</a></p>
            </div><!--Coluna Footer-->

            <div class="col-footer">
                <a href="#"><img src="img/logo-dummy.png" alt=""></a>
            </div><!--Coluna Footer-->
        </div><!--Centralização-->
    </footer>

<script src="https://kit.fontawesome.com/f79c55981d.js" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script>
    //Menu Responsivo

    $('.menu-mobile i').click(function(){
    $('.menu-mobile').find('ul').slideToggle();
})
</script>
</body>
</html>