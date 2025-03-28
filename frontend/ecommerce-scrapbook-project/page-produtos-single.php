<?php
        //Template Name: Página Produtos Individuais
    ?>

<?php get_header();?>

<?php

    $title_central = get_the_title();
    if($title_central == 'Página Botton Futura BioMed'){
        $title_central = 'Futura BioMed';
    }else if($title_central == 'Página Botton Futura Psicóloga'){
        $title_central = 'Futura Psicóloga';
    }else if($title_central == 'Página Botton Cuide Bem de Você'){
        $title_central = 'Cuide Bem de Você!';
    }else if($title_central == 'Página Botton A Ling. Da Vida'){
        $title_central = 'A Linguagem da Vida';
    }else if($title_central == 'Página Botton BioMed'){
        $title_central = 'Botton BioMédica';
    }else if($title_central == 'Página Botton Vacinada'){
        $title_central = 'Botton Vacinada';
    }else if($title_central == 'Página Botton Psicologia'){
        $title_central = 'Botton Psicologia';
    }

?>

<main class="principal principal-cart">
    <div class="center">
        
        <div class="titulo-destaque">
            <div class="line-title"></div>
            <h2><?php echo $title_central?></h2>
        </div><!--Título Destaque-->

        <?php the_content();?>
    </div><!--Centralização-->
</main>
<?php get_footer();?>