<?php get_header(); ?> 

<div class="row">
    <div class="col-xs-12 col-sm-8">
    <header class="jumbotron">
            <!-- sprintf takes a string from the second parameter and inserts it where the % sign is 
            the "s" after the % sign is the format specifier, s for string
            -->
            <?php the_title(sprintf('<h1 class="entry-title"> <a href="%s">',esc_url(get_permalink())),'</a></h1>')?>
            <small>Posted on <?php the_time('F,j,Y');?> In the category
                 <?php the_category(' ')?> ||  <?php the_tags();?> || <?php edit_post_link();?>
            </small>
        </header>  
        <div class="row add-margin">
            
        <?php 

        if(have_posts()):;
            while(have_posts()):the_post(); ?>
            
              <?php the_post_thumbnail('medium');?>
               
               <?php //get_template_part('content', get_post_format())
            
                ?>
                 <?php the_content();?>
        <?php 
           endwhile;
        ?>
        <?php endif; ?>
         </div>
    </div> <!-- end col 1 -->

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar();?> 
    </div><!-- end col 2 -->

    </div><!-- end row-->

<?php get_footer(); ?> 
  