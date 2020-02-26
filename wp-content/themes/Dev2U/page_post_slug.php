<?php 
/*Template Name: Blog
* Template Post Type: post
*/ ?>

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



<div class="container mb-5">
    <div class="single-blog">


        <?php
            // Start the loop.
            while ( have_posts() ) : 
                the_post();
                ?>

        <h1><?php the_title() ?></h1>
        <span><?php the_date() ?> ---- </span>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">

        <div class="content">
            <?php the_content() ?>
        </div>

        <?php
                /*
                * Include the post format-specific template for the content. If you want to
                * use this in a child theme, then include a file called called content-___.php
                * (where ___ is the post format) and that will be used instead.
                */
                get_template_part( 'content', get_post_format() );
    
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
    
                // Previous/next post navigation.
                // the_post_navigation( array(
                //     'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                //         '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                //         '<span class="post-title">%title</span>',
                //     'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                //         '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                //         '<span class="post-title">%title</span>',
                // ) );
    
            // End the loop.
            endwhile;
            ?>
    </div>
</div>

<?php get_footer() ?>