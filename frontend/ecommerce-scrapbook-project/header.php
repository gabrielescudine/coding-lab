<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php 
            wp_head();
    ?>

    <?php 
        $title = get_the_title();
        if($title == ''){
            $title = '404 - Página Inexistente';
        }else if($title == 'Principal'){
            $title = 'Home - ScrapBook BioMed';
        }else if($title == 'Sobre'){
            $title = 'Sobre - ScrapBook BioMed';
        }else if($title == 'Contato'){
            $title = 'Contato - ScrapBook BioMed';
        }else if($title == 'Página Produto'){
            $title = 'Produtos - ScrapBook BioMed';
        }else if($title == 'Minha conta'){
            $title = 'Conta - ScrapBook BioMed';
        }else if($title == 'Carrinho'){
            $title = 'Carrinho - ScrapBook BioMed';
        }else if($title == 'Finalização de compra'){
            $title = 'Checkout - ScrapBook BioMed';
        }else if($title == 'Página Botton Futura Psicóloga'){
            $title = 'Futura Psicóloga - ScrapBook BioMed';
        }else if($title == 'Página Botton Futura BioMed'){
            $title = 'Futura BioMed - ScrapBook BioMed';
        }else if($title == 'Página Botton Cuide Bem de Você'){
            $title = 'Cuide Bem de Você - ScrapBook BioMed';
        }else if($title == 'Página Botton A Ling. Da Vida'){
            $title = 'A Ling. Da Vida - ScrapBook BioMed';
        }else if($title == 'Página Botton BioMed'){
            $title = 'BioMed - ScrapBook BioMed';
        }else if($title == 'Página Botton Vacinada'){
            $title = 'Vacinada - ScrapBook BioMed';
        }else if($title == 'Página Botton Psicologia'){
            $title = 'Psicologia - ScrapBook BioMed';
        }
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_theme_root_uri();?>/scrapbook-store/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri();?>/scrapbook-store/style.css">
    <title><?php echo $title?></title>
</head>
<body>
    <header class="cabecalho" style="border-bottom:3px solid #ff72c7">
        <div class="center">

            <div class="logo">
                <a href="<?php echo get_site_url();?>"><img src="<?php echo get_theme_root_uri();?>/scrapbook-store/img/logo.png" alt="Scrapbook Logo"></a>
            </div><!--Logo-->

            <nav class="menu-desktop">
                <ul>
                    <li><a href="<?php echo get_site_url();?>" target="" rel="">Home</a></li>
                    <li><a href="<?php echo get_site_url();?>/produto" target="" rel="next">Produtos</a></li>
                    <li><a href="<?php echo get_site_url();?>/sobre" target="" rel="next">Sobre</a></li>
                    <li><a href="<?php echo get_site_url();?>/contato" target="" rel="next">Contato</a></li>
                    <li><a href="<?php echo get_site_url();?>/carrinho" target="" rel="next"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="<?php echo get_site_url();?>/minha-conta" target="" rel="next"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </nav><!--Menu Desktop-->

            <nav class="menu-mobile">
                <i class="fa-solid fa-align-right"></i>
                <ul>
                    <li><a href="<?php echo get_site_url();?>" target="" rel="">Home</a></li>
                    <li><a href="<?php echo get_site_url();?>/produto" target="" rel="next">Produtos</a></li>
                    <li><a href="<?php echo get_site_url();?>/carrinho" target="" rel="next">Carrinho</a></li>
                    <li><a href="<?php echo get_site_url();?>/minha-conta" target="" rel="next">Minha Conta</a></li>
                    <li><a href="<?php echo get_site_url();?>/sobre" target="" rel="next">Sobre</a></li>
                    <li><a href="<?php echo get_site_url();?>/contato" target="" rel="next">Contato</a></li>
                </ul>
            </nav><!--Menu Mobile-->
            <div class="clear"></div>
        </div><!--Centralização-->
    </header><!--Cabeçalho-->
