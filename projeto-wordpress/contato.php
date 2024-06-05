<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Contato - WP</title>
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
                    <li><a href="sobre.php" target="_self" rel="next">Sobre</a></li>
                    <li><a href="contato.php" target="_self" rel="next" class="selected">Contato</a></li>
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
        <section class="contato">
            <div class="center">
                <div class="w-50 contato-info">
                    <h2>A mais importante, <br>primeira conversa</h2>
                    <p><strong>Telefone</strong>: (21) 99475-3945</p>
                    <p><strong>E-mail</strong>: seuemail@email.com</p>
                    <p><strong>End.</strong>: Rua dos Buracos - Araruama, RJ</p>
                    
                    <div class="map-container">
                        <div class="" id="map"></div>
                    </div><!--Map Container-->

                </div><!--Contato Info-->

                <div class="w-50 contato-form">
                    <form action="" method="get" autocomplete="on">
                        <input type="text" name="nome" id="nome" placeholder="Nome Completo">
                        <input type="email" name="email" id="email" placeholder="E-mail" required>
                        <select name="" id="" required>
                            <option value="">Escolha sua opção</option>
                            <option value="">Compra</option>
                            <option value="">Devolução</option>
                            <option value="">Suporte</option>
                        </select>
                        <input type="text" name="empresa" id="empresa" placeholder="Empresa">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                        <input type="submit" value="Enviar Formulário">
                    </form>
                </div><!--Contato Form-->
                <div class="clear"></div>
            </div><!--Centralização-->
            
        </section><!--Contato-->
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4"></script>
<script src="js/map.js"></script>
<script>
    //Menu Responsivo

    $('.menu-mobile i').click(function(){
    $('.menu-mobile').find('ul').slideToggle();
})
</script>
</body>
</html>