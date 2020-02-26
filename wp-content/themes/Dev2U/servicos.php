<?php /*Template Name:Serviços*/ ?>
<?php get_header() ?>



<!-- HOME-->
<div id="conteudo" class="page1 fundo1 prlx">

    <div id="inicio" class="topo "></div>



    <!-- BG SHADOW -->
    <div class="bg-shadow"></div>


    <!-- Slogan -->

    <div class="slogan-fr row">
        <div class="col6"></div>
        <div class="col6">
            <h1>
                <div>
                    Serviços
                </div>
            </h1>

        </div>
    </div>
    <!-- Slogam Fim -->
    

    <!-- Degrade Rodapé do Item 1 da Home -->
    <div class="rodapeHome">
    </div>

</div>


<div class="container my-5 page-servico">
    <div class="row">
        <div class="col-md-8">
            <div class="row"  style="border: 1px solid #f1f1f1;">

                <?php query_posts('post_type=servico&post_per_page=-1'); ?>
                
                <?php if(have_posts()): while(have_posts()):  the_post(); ?>
                
                <div  style="border-right: 1px solid #f1f1f1;" class="col-md-4 p-0">
                    <div class="flip-card">
                        <div class="p-3">
                            <div class="titulo">
                                <h1>
                                    <?php the_field('titulo')?>
                                </h1>
                                <p class="px-0">
                                    <?php the_field('conteudo')?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                
                <?php endwhile; ?>
                <?php else : ?>
                <h3>Em Breve Mais Informações...</h3>
                    
                <?php endif;?>
                <?php wp_reset_query(); ?>
                </div>
            </div>
        <div class="col-md-4 d-flex align-items-center anime">
            <div style="border-left: 2px solid #286697; padding: 28px 0;">
                <h1 class="title">SER</h1>
                <h1 class="title">VI</h1>
                <h1 class="title">ÇOS</h1>
            </div>
        </div>
    </div>
</div>

<div  class="my-5" style="background:transparent;">
    <div class="container">
        <div class="d-flex flex-column align-items-center">
            <h2 class="pt-4" style="color:#0e5fa0;font-weight: 300;">Faça parte da nossa <span
                    style="font-weight: 500;">história</span></h2>
        </div>
    </div>
</div>


 <!--PAGE - CONTATO -->
 <div class="">
        <div id="contato" class="page-contato anime">
            <div class="mapa prlx"></div>
            <div class="mx-0">
                <div class="localizacao">
                    <div class="">
                        <div class="container">
                            <div class="row justify-content-start">
                                <h1 class=" m-0 px-4">ENTRE EM CONTATO</h1>

                            </div>
                        </div>

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-contato align-text-center">
                                        <?php echo do_shortcode('[contact-form-7 id="7" title="Formulário de contato 1"]') ?>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex flex-column justify-content-center">

                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d6426.7523430121155!2d-49.28583934373305!3d-16.708390115139665!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x935ef1de8a2bec37%3A0x7435cd74e11c421c!2sfr%20digital!3m2!1d-16.7077602!2d-49.283303599999996!5e0!3m2!1spt-BR!2sbr!4v1581459851461!5m2!1spt-BR!2sbr"
                                        width="100%" height="300" frameborder="0" style="border:0;"
                                        allowfullscreen=""></iframe>
                                    <div class="">
                                        <div class="texto">
                                            <div class="d-flex  align-items-start mb-1">
                                                <img class="p-1"
                                                    src="<?php bloginfo('template_url')?>/img/icons/localizacao.svg"
                                                    alt="">
                                                <div class="d-flex flex-column">
                                                    <p class="p-0 m-0">Rua C-210, esquina com a t9, Galeria Shallon,
                                                        Sala 204
                                                        Jardim America, Goiânia - GO, 74255-220
                                                    </p>
                                                    <a target="_blank" href="https://goo.gl/maps/mbSukzFjqyJYT5G6A">Como
                                                        chegar</a>
                                                </div>
                                            </div>
                                            <div class="d-flex  align-items-center mb-1">
                                                <img class="p-1"
                                                    src="<?php bloginfo('template_url')?>/img/icons/phone.svg" alt="">
                                                <p class="p-0 m-0">(62) 9 9956-7767</p>
                                            </div>
                                            <div class="d-flex  align-items-center mb-1">
                                                <img class="p-1"
                                                    src="<?php bloginfo('template_url')?>/img/icons/mail.svg" alt="">
                                                <p class="p-0 m-0">contato@digitalfr.com.br</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                           
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>



<?php get_footer(); ?>