<?php get_header(); ?> 

<div class="row top-margin">
    <div class="col-xs-12 col-sm-8">
        <div class="row add-margin">
            
        <?php 
            if(have_posts()):;
        ?>
        <header class="page-header">
            
           <h3>Car reviews</h3>
        </header>

          <?php while(have_posts()):the_post(); ?>
              
                <?php get_template_part('content', 'archive') ?>
        <?php 
           endwhile;
        ?>
              <div>
               <?php the_posts_navigation()?>
             </div>
        <?php endif; ?>
         </div>
    </div> <!-- end col 1 -->

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar();?> 
    </div><!-- end col 2 -->

    </div><!-- end row-->

<?php get_footer(); ?> 