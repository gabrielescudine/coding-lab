<footer>
        <div class="center">
            <div class="col-footer">
                <h2>Institucional</h2>
                <p><a href="<?php echo get_site_url();?>/">Home</a></p>
                <p><a href="<?php echo get_site_url();?>/sobre">Quem Somos</a></p>
            </div><!--Coluna Footer-->

            <div class="col-footer">
                <h2>Ajuda</h2>
                <p><a href="<?php echo get_site_url();?>/faq">Dúvidas Frequentes</a></p>
                <p><a href="<?php echo get_site_url();?>/politica-privacidade">Política de Privacidade</a></p>
            </div><!--Coluna Footer-->

            <div class="col-footer">
                <h2>Suporte</h2>
                <p><a href="<?php echo get_site_url();?>/contato">Contato</a></p>
            </div><!--Coluna Footer-->

            <div class="col-footer">
                <a href="<?php echo get_site_url();?>"><img src="<?php echo get_theme_root_uri();?>/scrapbook-store/img/logo.png" alt=""></a>
            </div><!--Coluna Footer-->
        </div><!--Centralização-->
    </footer><!--Footer-->

    <?php
        wp_footer();
    ?>

<script src="https://kit.fontawesome.com/f79c55981d.js" crossorigin="anonymous"></script>
<script src="<?php echo get_theme_root_uri();?>/scrapbook-store/js/jquery.js"></script>
<script src="<?php echo get_theme_root_uri();?>/scrapbook-store/js/slick.min.js"></script>
<script src="<?php echo get_theme_root_uri();?>/scrapbook-store/js/functions.js"></script>
<script>
    //Menu Responsivo
    $('.menu-mobile i').click(function(){
    $('.menu-mobile').find('ul').slideToggle();
})
</script>
</body>
</html>