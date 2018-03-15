<?php 
/*
Template Name: Page No Title
*/

get_header(); 

?> 
<p> Static Title</p>
<?php 
if(have_posts()):
    while(have_posts()):the_post();
 ?>
      <small>Posted on <?php the_time('F,j,Y');?> In <?php the_category();?></small>
       <p><?php the_content();?></p>
       <hr/>
<?php 
     endwhile;
endif;
?>

<?php get_footer(); ?> 