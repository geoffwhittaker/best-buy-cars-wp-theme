<?php 
/*
Template Name: Page Home
*/
    get_header(); 

?> 

<div class="row">
    <div class="col content-wrapper"> 
        <div class="row">
       <?php 
       // get the most recent post 
       $args = array(
        'type' => 'posts',
        'posts_per_page' => 3,
       // 'category-name' => array('tesla','ford','mercedes'),
       );
      //--------------------wordpress loop -------------------------------------- 
            $lastblog = new WP_Query($args);

            if( $lastblog->have_posts()):
                while($lastblog->have_posts()):$lastblog->the_post(); ?>
                <!--Loops in the columns -->
                    <div class="col-xs-12 col-sm-4">
                        <!-- first parameter = the default content template.
                         second parameter = the content-featured template-->
                        <?php get_template_part('content', 'featured') ?>
                    </div> 
            <?php 
                endwhile;
            endif;
            wp_reset_postdata()
      //------------end loop-------------------------------------------------------
       
             ?>
        </div>
    </div><!--end col-->
 </div><!--end row-->
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