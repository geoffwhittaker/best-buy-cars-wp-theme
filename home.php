<?php get_header(); ?> 

<div class="row">
    <div class="col-xs-12 col-sm-8">
        <div class="row add-margin">
            
        <?php 

        if(have_posts()):;
            while(have_posts()):the_post(); ?>
              
                <?php get_template_part('content', get_post_format()) ?>
        <?php 
           endwhile;
            ?>
            <div class="col-xs-6 col-lg-6 text-left">
                <?php next_posts_link( '<< older posts') ?>
             </div>
             <div class="col-xs-6 col-lg-6 text-right">
                <?php previous_posts_link( 'Newer posts >>') ?>
             </div>

        <?php endif; ?>
         </div>
    </div> <!-- end col 1 -->

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar();?> 
    </div><!-- end col 2 -->

    </div><!-- end row-->

<?php get_footer(); ?> 
  