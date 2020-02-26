<?php /*Template Name:Clientes*/ ?>
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
                    Nossos
                </div>
                <div>
                    <span>Clientes</span>

                </div>
            </h1>

        </div>
    </div>
    <!-- Slogam Fim -->


    <!-- Degrade Rodapé do Item 1 da Home -->
    <div class="rodapeHome">
    </div>

</div>

<div class="pagina-clientes">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h4>Conheça quem já fez parte da <span> nossa história.</span> </h4>
                <div class="titulo-padrao">
                    <h1>CLIENTES </h1>
                </div>

            </div>

        </div>
    </div>

    <div style="height:440px">
        <div class="row m-0 p-0">
            <div class="col-12 m-0 d-flex justify-content-end">
                <ul>
                    <li>
                        <input type="radio" name="tabs" id="tab1" class="red_tabs" checked>
                        <label for="tab1">ARTISTAS</label>

                        <div class="content">
                            <div class="row m-0 p-0">


                                <?php query_posts('post_type=case&post_per_page=-1'); ?>

                                <?php if(have_posts()): while(have_posts()):  the_post(); ?>

                                <div class="col-sm-6 col-md-4 col-lg-2 d-flex align-items-center">

                                    <img style="  background-color: transparent; margin:5px 0px; padding:10px; width: 100%; height: 100px; object-fit: contain"
                                        src="<?php the_field('imagem')?>" alt="">

                                </div>


                                <?php endwhile; ?>
                                <?php else : ?>
                                <h3>Em Breve Mais Informações...</h3>

                                <?php endif;?>

                                <?php wp_reset_query(); ?>


        

                      
                            </div>
                        </div>

                    </li>
                    <li>
                        <input type="radio" name="tabs" id="tab2" class="red_tabs">
                        <label for="tab2">EMPRESAS</label>

                        <div class="content">
                            <div class="row m-0 p-0">
                        
                                <?php query_posts('post_type=campanha&post_per_page=5'); ?>

                                <?php if(have_posts()): while(have_posts()):  the_post(); ?>

                                <div class=" col-md-2 p-0 text-center">
                                    <img style="width: 100%; height: 317px; object-fit: cover;"
                                        src="<?php the_field('imagem')?>" alt="">
                                </div>

                                <?php endwhile; ?>
                                <?php else : ?>
                                <h3>Em Breve Mais Informações...</h3>

                                <?php endif;?>

                                <?php wp_reset_query(); ?>
                            </div>
                        </div>

                    </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div style="background: #fdd305;
        padding: 3rem;
        color: #fff!important;" 
    >
            <div class="container">
                <div class="row d-flex flex-column align-items-center justify-content-center">
                    <h4 style="color:#fff" >Não perca mais tempo.</h4>
                    <h4 style="color:#fff" ><span>Otimize agora seu negócio!</span></h4>
                </div>
            </div>
    </div>
    
</div>




<?php get_footer(); ?>