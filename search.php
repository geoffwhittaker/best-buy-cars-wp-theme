<?php

    get_header(); 

?> 
       
<div class="row">   
    <div class="col-xs-12 col-sm-8">
    <p class="bg-success text-white search-header">Search results</p> 
        <?php 
       
      // main content ---------------------------------------------
        if(have_posts()):
            while(have_posts()):the_post(); ?>
            <!-- gets content from the 'content' template part-->
            <?php get_template_part('content', 'search') ?>
            
        <?php 
             endwhile;
             ?>
                <div class="col-xs-6 col-lg-6 text-left">
                <?php next_posts_link( '<< older posts') ?>
             </div>
             <div class="col-xs-6 col-lg-6 text-right">
                <?php previous_posts_link( 'Newer posts >>') ?>
             </div>
             <?php
        endif;
        ?>
     
    </div> <!-- end col 1 -->

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar();?> 
    </div><!-- end col 2 -->

</div><!-- end row-->

<?php get_footer(); ?> 