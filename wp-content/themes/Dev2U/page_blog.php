<?php /*Template Name: Blog/Novidade*/ ?>
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
                    Nosso
                </div>
                <div>
                    <span>blog.</span>

                </div>
            </h1>

        </div>
    </div>
    <!-- Slogam Fim -->

    <!-- Degrade Rodapé do Item 1 da Home -->
    <div class="rodapeHome">
    </div>

</div>




<div style="" >
    <div class="page-blog">
        <div class="container">
            <div class="row">
            
                <?php 
                $minha_query = new WP_Query( array( 
                    'posts_per_page' => -1,
                    'post_status' => 'publish',  
                ));
                ?>

                <?php if($minha_query->have_posts()): while($minha_query->have_posts()):
                    $minha_query->the_post(); ?>
                    <div class="col-md-6">
                        <div class="postagem p-2">
                        <?php if(the_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php echo the_title(); ?>">
                        <?php endif;?>
                        <div class="content">
                            <a href="<?php  the_permalink()?>">
                            <p> <?php the_title()?> </p>
                            </a>
                        </div>

                        </div>
                    </div>

                <?php endwhile; ?>
                <?php else : ?>
                <h3>...</h3>

                <?php endif;?>

                <?php 
                    wp_reset_postdata();
                    wp_reset_query(); 
                ?>

            </div>
        </div>
        

    </div>
    
    <?php get_footer()?>
</div>
