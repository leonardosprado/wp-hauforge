<?php /*Template Name:Empresa*/ ?>
<?php get_header() ?>


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
                    Nossa
                </div>
                <div>
                    <span>história</span>

                </div>
            </h1>

        </div>
    </div>
    <!-- Slogam Fim -->

    <!-- Degrade Rodapé do Item 1 da Home -->
    <div class="rodapeHome">
    </div>

</div>


<div class="pagina-empresa">
    <div class="container">
        <div class="row">
            <div class="col-6">

                <div class="empresa-title">
                    <h1>EM- </h1>
                    <h1>PRE-</h1>
                    <h1>SA</h1>
                </div>

            </div>
            <div class="col-6 d-flex justify-content-end align-items-end">
                <img style="width:100%; height:auto, objetct-fir:contain"
                    src="<?php bloginfo('template_url')?>/img/fr/empresa/empresa.png" alt="">
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-end align-items-center anime">
                <img style="width:100%; height:auto, objetct-fir:contain"
                    src="<?php bloginfo('template_url')?>/img/fr/empresa/sobre.png" alt="">
            </div>
            <div class="col-md-6">
                <div class="empresa-title">
                    <h4>QUEM SOMOS ? </h4>

                    <div class="sobre text-justify m-5 ">

                        <?php query_posts('pagename=sobre'); ?>
                        <?php while(have_posts( )) the_post( ) ?>
                        <?php echo the_content( ) ?>
                        <?php wp_reset_query(); ?>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="missao py-5">
        <div class=" container pt-5">
            <div class="row">
                <div class="col-md-4 d-flex flex-column align-items-center anime">
                    <h2 class="p-3" style="color:#fdd305">MISSÃO</h2>
                    <div class="item-missao d-flex flex-column">
                        <img style="width: 2rem; padding: 2px;" draggable="false"
                            src="<?php bloginfo('template_url')?>/img/fr/empresa/mira.svg" alt="">
                        <img draggable="false" class="flexa"
                            src="<?php bloginfo('template_url')?>/img/fr/empresa/missao.svg" alt="">
                        <?php query_posts('pagename=missao'); ?>
                        <?php while(have_posts( )) the_post( ) ?>
                        <?php echo the_content( ) ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center animeTop ">
                    <h2 class="p-3" style="color:#fdd305">VISÃO</h2>
                    <div class="item-missao d-flex flex-column">
                        <img style="width: 3rem; padding: 2px;" draggable="false"
                            src="<?php bloginfo('template_url')?>/img/fr/empresa/eye.svg" alt="">
                        <img draggable="false" class="flexa"
                            src="<?php bloginfo('template_url')?>/img/fr/empresa/missao.svg" alt="">
                        <?php query_posts('pagename=visao'); ?>
                        <?php while(have_posts( )) the_post( ) ?>
                        <?php echo the_content( ) ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center anime">
                    <h2 class="p-3" style="color:#fdd305">VALORES</h2>
                    <div class="item-missao d-flex flex-column">
                        <img style="width: 3rem; padding: 2px;" draggable="false"
                            src="<?php bloginfo('template_url')?>/img/fr/empresa/busines.svg" alt="">
                        <img draggable="false" class="flexa"
                            src="<?php bloginfo('template_url')?>/img/fr/empresa/missao.svg" alt="">
                        <?php query_posts('pagename=valores'); ?>
                        <?php while(have_posts( )) the_post( ) ?>
                        <?php echo the_content( ) ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div style="background:#fdd305;">
    <div class="container">
        <div class="d-flex flex-column align-items-center">
            <h2 class="pt-4" style="color:#fff;font-weight: 300;">Faça parte da nossa <span
                    style="font-weight: 500;">história</span></h2>
            <a style="color: #fff; border: thin solid #fff; padding: 10px 5px; margin: 8px;" href="">Fale com a fR </a>
        </div>
    </div>
</div>


<?php get_footer(); ?>