<?php get_header(); ?> 

<div class="row top-margin">
    <div class="col-xs-12 col-sm-8">
        <div class="row">
            
        <?php 
            if(have_posts()):;
        ?>
        <header class="page-header">
            <?php 
            the_archive_title( '<h3 class="page-title" >Archive from - ', '</h3>' );
            the_archive_description( '<div class="taxonomy-description" >', '</div>' );
            ?>
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
  
