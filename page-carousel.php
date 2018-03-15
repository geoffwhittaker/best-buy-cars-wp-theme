<?php 
/*
Template Name: Page carousel
*/
    get_header(); 

?> 
<!--header row =============================================================== -->
<div class="row">
    <div class="col-xs-12 col-lg-12 content-wrapper"> 
       <?php get_template_part('content', 'carousel')?> 
    </div><!--end col-->
 </div><!--end row-->
<!-- end header row =============================================================== -->

<div class="row">    
    <div class="col-xs-12 col-sm-8">

        <?php 
      // main content ---------------------------------------------
        if(have_posts()):
            $count=0;
            while(have_posts()):the_post(); ?>

            <?php get_template_part('content', get_post_format()) ?>
            
        <?php 
             $count++; endwhile;
        endif;
        ?>
        <?php
      /*  $args = array(
        'type' => 'post',
        'posts_per_page' => 2,
        'offset' => 1,
        );
         // get the last two blog posts skipping the first, using offset
            $lastblog = new WP_Query($args);

            if( $lastblog->have_posts()):
                $count=0;
                while($lastblog->have_posts()):$lastblog->the_post(); ?>

                <?php get_template_part('content', get_post_format()) ?>
                
            <?php 
                endwhile;
            endif;
         */   wp_reset_postdata()
        ?>
        <hr><h3> Posts in the Tesla category</h3>
        <?php 
     /*   // get posts in the Tesla category
            $lastblog = new WP_Query('type=post&posts_per_page=4&category_name=tesla');

            if( $lastblog->have_posts()):
                $count=0;
                while($lastblog->have_posts()):$lastblog->the_post(); ?>

                <?php get_template_part('content', get_post_format()) ?>
                
            <?php 
                endwhile;
            endif;
            wp_reset_postdata()
      */  ?>
    </div> <!-- end col 1 -->

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar();?> 
    </div><!-- end col 2 -->

</div><!-- end row-->

<?php get_footer(); ?> 