<?php // single.php for single BLOG posts.

    get_header(); 

?> 
       
<div class="row top-margin">    
    <div class="col-xs-12 col-sm-8">
     
        <?php 
       
      // main content ---------------------------------------------
        if(have_posts()):
            $count=0;
            while(have_posts()):the_post(); ?>
            <!-- gets content from the 'content' template part-->
            <?php 
            get_template_part('content', get_post_format()) 
            
            ?>
            
        <?php 
             $count++; endwhile;
        ?>
        <div class="post-links">
             <?php previous_post_link()?>
            <span> || </span>
             <?php next_post_link() ?>
        </div>
        <?php
        endif;
        ?>
     
    </div> <!-- end col 1 -->

    <div class="col-xs-12 col-sm-4">
        test
        <?php get_sidebar();?> 
    </div><!-- end col 2 -->

</div><!-- end row-->

<?php get_footer(); ?> 