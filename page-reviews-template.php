<?php 
/*
Template Name: Reviews template
*/
get_header(); 

?> 
<div class="row top-margin">
    <div class="col-xs-12 col-sm-8">
      
        <h3> Reviews page</h3>
        <?php 
        $args = array('post_type' => 'reviews', 'posts_per_page' => 3);
        $loop = new WP_Query( $args );

        if($loop -> have_posts()):
            while($loop -> have_posts()): $loop -> the_post();

            get_template_part('content', 'archive');

            endwhile;
        endif;
        ?>
    </div> <!-- end col 1 -->

    <div class="col-xs-12 col-sm-4">
            <?php get_sidebar();?> 
    </div><!-- end col 2 -->

</div><!-- end row-->

<?php get_footer(); ?> 