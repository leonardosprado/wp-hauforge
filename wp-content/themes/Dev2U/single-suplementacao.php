<?php get_header() ?>


<!-- Header -->

<div class="header align-items-center not-bg">
    <!-- LOGO -->

    <div class="d-flex">
        <a href="./home">
            <img class="logo" src="<?php bloginfo('template_url')?>/img/header/logo.svg" alt="Logo ">
        </a>


    </div>

    <div style="display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;" class="">

        <input type="checkbox" id="control-nav" style="display:none" onclick="menuSanduiche()">
        <label for="control-nav" id="menuStatus" class="control-nav"></label>

        <nav class="text-right">
            <ul class="text-rigth">
                <li class="off">
                    <a href="./home" title="INICIO">INÍCIO</a>
                </li>
                <li class="off">
                    <a href="./empresa" title="EMPRESA">EMPRESA</a>
                </li>
                <li class="off">
                    <a href="./sobre" title="SOBRE">SOBRE</a>
                </li>
                <li class="off">
                    <a href="./consultorias" title="CONSULTORIAS">CONSULTORIAS</a>
                </li>

                <li class="on">
                    <a href="./produtos" title="PRODUTOS">PRODUTOS</a>
                </li>

                <li class="off">
                    <a href="./cursoseventos" title="CURSOSEEVENTOS">CURSOS E EVENTOS</a>
                </li>
                <li class="off">
                    <a href="./contato" title="CONTATO">CONTATO</a>
                </li>

            </ul>
        </nav>
    </div>
</div>

<!-- /Header -->

<!-- HEADER PAGINA  -->
<div class="header-page">
    <div class="container">
        <h1>PRODUTOS</h1>
    </div>
</div>

<!-- HEADER PAGINA  -->

<div class="single-produto">

    <?php
     // Start the loop.
        while ( have_posts() ) : 
            the_post(); ?>
        <div class="container">

            <div class="row py-4 d-flex align-items-center justify-content-center">
                <div class="col-md-7">
                    <h1><?php the_title() ?></h1>
                    <p><?php the_field('subtitulo')?></p>
                    <br><br>
                    <p><?php the_field('sobre')?></p>
                    
                </div>
                <div class="col-md-5  d-flex justify-content-center">
                    <img src="<?php the_field('imagem')?>" alt="<?php the_field('titulo')?>">
                </div>
                
            </div>
        </div>
        <div class="content py-5">
            <div class="container ">

                <?php if(get_field('indicacoes')): ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <img class="arrow" src="<?php bloginfo('template_url')?>/img/single-produto/arrow.svg" alt="seta">
                                <h3>INDICAÇÕES</h3>
                            </div>
                            <div style="margin-left:96px">
                                <p><?php the_field('indicacoes')?></p>
                            </div>
                        </div>
                    </div>
                <?php endif;?>

                <?php if(get_field('caracteristicas')): ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <img class="arrow" src="<?php bloginfo('template_url')?>/img/single-produto/arrow.svg" alt="seta">
                                <h3>CARACTERÍSTICAS</h3>
                            </div>
                            <div style="margin-left:96px">
                                <p><?php the_field('caracteristicas')?></p>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(get_field('via_de_administracao')): ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <img class="arrow" src="<?php bloginfo('template_url')?>/img/single-produto/arrow.svg" alt="seta">
                                <h3>VIA DE ADMINISTRAÇÃO: <?php the_field('via_de_administracao')?> </h3>
                            </div>
                            <div style="margin-left:96px">
                                <p><?php the_field('via_de_administracao_texto')?></p>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(get_field('modo_de_usar')): ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <img class="arrow" src="<?php bloginfo('template_url')?>/img/single-produto/arrow.svg" alt="seta">
                                <h3>MODO DE USAR</h3>
                            </div>
                            <div style="margin-left:96px">
                                <p><?php the_field('modo_de_usar')?></p>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(get_field('beneficios')): ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <img class="arrow" src="<?php bloginfo('template_url')?>/img/single-produto/arrow.svg" alt="seta">
                                <h3>BENEFÍCIOS</h3>
                            </div>
                            <div style="margin-left:96px">
                                <p><?php the_field('beneficios')?></p>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if(get_field('composicao')): ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <img class="arrow" src="<?php bloginfo('template_url')?>/img/single-produto/arrow.svg" alt="seta">
                                <h3>COMPOSIÇÃO</h3>
                            </div>
                            <div style="margin-left:96px">
                                <p><?php the_field('composicao')?></p>
                            </div>
                        </div>
                    </div>
                <?php endif;?>


            </div>
        </div>

        <?php endwhile; ?>

        <?php wp_reset_query(); ?>
</div>


<!-- ENTRAR EM CONTATO -->
<div class="enter-contact">
    <div class="container">
        <div class="row  d-flex align-items-center">
            <div class="col-md-8 py-5">
                <h1>Quer saber mais ou adquirir um produto? </h1>
            </div>
            <div class="col-md-4 py-5">
                <a class="button" href="">
                    <img class='icon' src="<?php bloginfo('template_url')?>/img/icons/whatsapp.svg" alt="" srcset="">
                    Fale conosco via WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>
<!-- ENTRAR EM CONTATO -->

<!-- Rodapé apenas para telas maiores - PRODUTOS -->
<section class="footer-page py-5">
    <div class="row m-0 px-4">
        <div class="col-md-6 d-flex justify-content-start align-items-start">
            <img class="logo" src="<?php bloginfo('template_url')?>/img/header/logo.svg" alt="Logo ">
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-center">
                <ul>
                    <li  >
                        <a href="./home" title="INICIO">INÍCIO</a>
                    </li>
                    <li>
                        <a href="./empresa" title="EMPRESA">EMPRESA</a>
                    </li>
                    <li >
                        <a href="./sobre" title="SOBRE">SOBRE</a>
                    </li>
                    <li >
                        <a href="./consultorias" title="CONSULTORIAS">CONSULTORIAS</a>
                    </li>

                    <li class="on" >
                        <a href="./produtos" title="PRODUTOS">PRODUTOS</a>
                    </li>

                    <li >
                        <a href="./cursoseventos" title="CURSOSEEVENTOS">CURSOS E EVENTOS</a>
                    </li>
                    <li>
                        <a href="./contato" title="CONTATO">CONTATO</a>
                    </li>

                </ul>
        </div>
    </div>
</section>
<!-- Rodapé apenas para telas maiores -->


<?php get_footer() ?>