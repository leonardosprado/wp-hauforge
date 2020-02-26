<?php /*Template Name:Home*/ ?>
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
                <li class="on">
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

                <li class="off">
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


<!--START - HOME  -->

<section class="start-home">
    <div class="container h-100">
        <div class="row h-100 d-flex align-items-center">
            <div class="col-md-6">
                <div class="group">

                    <div class="d-flex align-items-center">
                        <h3 class="m-0">01</h3>
                        <hr>
                    </div>
                    <h1>Consultoria e
                        Suplementação
                        Animal</h1>
                    <p>Nós podemos ajuda-lo a obter mais resultados, conheça nossos casos de sucesso.</p>
                    <a class="button button-orange" href="">Saiba mais</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="group">
                        <img src="<?php bloginfo('template_url')?>/img/home/imagem.jpg" alt="Vaca" srcset="">
                    <div class="logoOficial">
                        <img class="logo" src="<?php bloginfo('template_url')?>/img/icons/logo_oficial.svg"
                            alt="Logo Oficial" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mouseDown">
        <img src="<?php bloginfo('template_url')?>/img/icons/mouse.svg" alt="">
    </div>
</section>
<!--START - HOME  -->


<!-- CONTENT - 02  -->

<section class="content02">
    <div class="container">
        <div class="row d-flex flex-md-row flex-column-reverse align-items-center">
            <div class="col-md-6">
                <div class="group">
                    <img src="<?php bloginfo('template_url')?>/img/home/imagem-2.jpg" alt="Vaca" srcset="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="ml-lg-4 group">

                    <div class="d-flex align-items-center">
                        <h3 class="m-0">02</h3>
                        <hr>
                    </div>
                    <h1>Atuamos lado a lado
                        dos nossos clientes.</h1>
                    <p>Somos uma empresa brasileira especializada no seguimento
                        de nutrição animal, que dissemina conhecimento e produz
                        produtos de suplementação minerais e vitamínicos para Bovinos.</p>
                    <a class="button button-orange" href="">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT - 02  -->

<!-- CONTENT - Produtos - Get em 3 - Suplementação e 3 Repositores  -->

<section class="content-produto py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="group">
                    <div class="d-flex align-items-center">
                        <h3 class="m-0">03</h3>
                        <hr>
                    </div>
                    <h1>Conheça nossos produtos.</h1>
                </div>
            </div>
        </div>

        <div class="row py-5">
            <?php query_posts('post_type=suplementacao&post_per_page=3'); ?>

            <?php if(have_posts()): while(have_posts()):  the_post(); ?>
            <div class="col-md-4">
                <a class="text-decoration-none" href="<?php  the_permalink()?>">

                    <div class="produto produto-home ">
                        <img src="<?php the_field('imagem')?>" alt="<?php the_field('titulo')?>">
                        <h6><?php the_field('titulo')?></h6>
                    </div>
                </a>
            </div>

            <?php endwhile; ?>
            <?php else : ?>

            <?php endif;?>

            <?php wp_reset_query(); ?>


            <?php query_posts('post_type=repositores&post_per_page=3'); ?>

            <?php if(have_posts()): while(have_posts()):  the_post(); ?>
            <div class="col-md-4">
                <div class="produto produto-home ">
                    <h6><?php the_field('titulo')?></h6>
                </div>
            </div>

            <?php endwhile; ?>
            <?php else : ?>

            <?php endif;?>

            <?php wp_reset_query(); ?>



        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <a class="button button-black" href="http://">Ver todos</a>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT - Produtos  -->

<!-- CONTENT - 04 SOBRE - CONSULTORIA - DISTRIBUIDOR -->
<section class="content04">
    <div class="row m-0 pt-5">
        <div class="col-md-4 py-5 m-0 sobre">
            <div class="my-3"> <img class="icon" src="<?php bloginfo('template_url')?>/img/icons/sobre-nos.svg" alt="sobre" > </div>
            <div class="py-3"><h4>Sobre nós</h4></div>
            <div class="py-3"><p>Veja como começamos, o que nos conduz e como criamos oportunidades.</p></div>
            <a class="button text-decoration-none px-0" href="">
                Leia Mais
                <svg xmlns="http://www.w3.org/2000/svg" width="31.473" height="26.227" viewBox="0 0 31.473 26.227">
                <path class=" arrow arrow-white" d="M27.264,12.362a1.311,1.311,0,0,0-1.808,1.9L35.515,23.8H9.311a1.311,1.311,0,1,0,0,2.623H35.473L25.455,35.967a1.311,1.311,0,1,0,1.808,1.9L38.7,26.968a2.621,2.621,0,0,0-.023-3.731Z" transform="translate(-8 -12)" fill="#f40"/>
                </svg>
                </a>
        </div>
        <div class="col-md-4 py-5 m-0 consultoria">    
            <div class="my-3"> <img class="icon" src="<?php bloginfo('template_url')?>/img/icons/consultoria.svg" alt="Consultoria" > </div>
            <div class="py-3"><h4>Consultoria</h4></div>
            <div class="py-3"><p>Temos experiência com vários tipos de fazendase gados, sabemos como ajudá-lo no seu desafio do dia a dia. </p></div>
            <a class="button button-color-black text-decoration-none  px-0" href="">
                Leia Mais
                <svg xmlns="http://www.w3.org/2000/svg" width="31.473" height="26.227" viewBox="0 0 31.473 26.227">
                <path class=" arrow arrow-black" d="M27.264,12.362a1.311,1.311,0,0,0-1.808,1.9L35.515,23.8H9.311a1.311,1.311,0,1,0,0,2.623H35.473L25.455,35.967a1.311,1.311,0,1,0,1.808,1.9L38.7,26.968a2.621,2.621,0,0,0-.023-3.731Z" transform="translate(-8 -12)" fill="#f40"/>
                </svg>
            </a>
        </div>
        <div class="col-md-4 py-5 m-0 distribuidor">
            <div class="my-3"> <img class="icon" src="<?php bloginfo('template_url')?>/img/icons/distribuidor.svg" alt="Distribuidor" > </div>
            <div class="py-3"><h4>Seja um distribuidor</h4></div>
            <div class="py-3"><p>Estamos expandido a cada dia e você pode fazer parte desta história de sucesso.</p></div>
            <a class="button text-decoration-none  px-0" href="">
                Leia Mais
                <svg xmlns="http://www.w3.org/2000/svg" width="31.473" height="26.227" viewBox="0 0 31.473 26.227">
                <path class=" arrow arrow-white" d="M27.264,12.362a1.311,1.311,0,0,0-1.808,1.9L35.515,23.8H9.311a1.311,1.311,0,1,0,0,2.623H35.473L25.455,35.967a1.311,1.311,0,1,0,1.808,1.9L38.7,26.968a2.621,2.621,0,0,0-.023-3.731Z" transform="translate(-8 -12)" fill="#f40"/>
                </svg>
                </a>
        </div>
    </div>
</section>
<!-- CONTENT - 04 -->

<!-- Rodapé apenas para telas maiores - HOME -->
<section class="footer-page py-5">
    <div class="row m-0 px-4">
        <div class="col-md-6 d-flex justify-content-start align-items-start">
            <img class="logo" src="<?php bloginfo('template_url')?>/img/header/logo.svg" alt="Logo ">
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-center">
                <ul>
                    <li class="on" >
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

                    <li >
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




<?php get_footer()?>