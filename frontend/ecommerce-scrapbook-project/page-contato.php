    <?php
        //Template Name: Contato
    ?>

    <?php get_header();?>

    <main class="principal-contato">
        <div class="titulo-destaque">
            <div class="line-title"></div>
            <h2>Entre em Contato</h2>
        </div><!--Título Destaque-->

        <div class="center">

            <section class="form-contato">

            <?php the_content();?>
              
            </section><!--Form Contato-->

            <aside class="info-empresa">
                <div class="box-information">
                    
                    <div class="info-single">
                        <span><i class="fa-solid fa-headset"></i></span>
                        <h3>Horário de Atendimento</h3>
                        <p>2ª a 6ª de 8h00 às 18h00</p>
                    </div><!--Info Single-->

                    <div class="info-single">
                        <span><i class="fa-solid fa-phone"></i></span>
                        <h3>Telefone</h3>
                            <p><a href="#" href="_blank" rel="external" title="Ligue-nos">(21) 2420-21342</a></p>
                    </div><!--Info Single-->
                    
                    <div class="info-single">
                        <span><i class="fa-brands fa-whatsapp"></i></span>
                        <h3>Whatsapp</h3>
                        <p><a href="#" href="_blank" rel="external" title="Mande-nos uma mensagem">(21) 9999-9999</a></p>
                    </div><!--Info Single-->

                    <div class="info-single">
                        <span><i class="fa-regular fa-envelope"></i></span>
                        <h3>E-mail</h3>
                        <p><a href="mailto:comercial@scrapbookbiomed.com" target="_blank" rel="external">comercial@scrapbookbiomed.com</a></p>
                    </div><!--Info Single-->

                    <div class="info-single">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <h3>Onde Estamos</h3>
                        <p>Cabo Frio - RJ</p>
                    </div><!--Info Single-->

                </div><!--Box Information-->
            </aside><!--Info Empresa-->
        <div class="clear"></div>
        </div><!--Centralização-->    
    </main><!--Principal-->

    <?php get_footer();?>