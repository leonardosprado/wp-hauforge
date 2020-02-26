<?php get_header() ?>

  <body>
    <div class="home1">
         <div class="topo mt-3">
                <a href="./index" class="btn-entrar">ENTRAR NO SITE</a>
         </div>
    </div>
    <div class="home2">
        <div class="container">
            <div class="row h-50 w-100 m-0 justify-content-center align-items-start">
                <div class="janela-video"> 
                    <div class="janela-video2">
                            <?php query_posts('post_type=youtube&post_per_page=-1'); ?>
                            <?php if(have_posts()):?>
                            <?php the_post();?>
                            <?php the_field('link'); ?>
                            <?php else : ?>
                            
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/d3jE9AvqxCo?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        
                            <?php endif;?>
              
                        <?php wp_reset_query(); ?>
                    </div>
                </div>      
            </div>
        
            <div class="row h-50 justify-content-center align-items-end">
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="botoes">
                        <a href="https://www.youtube.com/channel/UC49uRYVenjoC5TBIbUJOD2w/featured?sub_confirmation=1" class="btn-inscrevase">INSCREVA-SE</a>
                    </div> 
                    </div>
                    <div class="row justify-content-center pb-5">
                        <div class="botoes">
                            <a href="./index" class="btn-entrar">ENTRAR NO SITE</a>
                        </div> 
                    </div>
                </div>
                
                
            </div>
        </div>
        
    </div>


  </body>

<!-- ******************************************************* -->

<?php get_footer()?>