<article  id="post-<?php the_ID()?>" <?php post_class()?> >
      <div class="row">
        <div class="col-xs-12 col-lg-12">
            <?php the_title(sprintf('<h3 class="entry-title"> <a href="%s">',esc_url(get_permalink())),'</a></h3>')?>
                <small>Posted on <?php the_time('F,j,Y');?> In the category
                    <?php the_category(' ')?> ||  <?php the_tags();?>
                </small>
        </div> <!-- end row 1 col 1-->
      </div> <!-- end row 1-->
      <div class="row">
                <?php if(has_post_thumbnail()){ ?>
   
                    <div class="col-xs-12 col-lg-4">
                        <?php the_post_thumbnail('thumb');
                    ?>
                    </div><!-- end row 2 col 1-->

                    <div class="col-xs-12 col-lg-8">
                         <?php the_excerpt()?> 
                     <hr/>    
                    </div>  <!-- end row 2 col 2-->
     </div>  <!-- end row 2-->  
                <?php } else { ?>
                    <div class="col-xs-12 col-lg-12">
                         <?php the_excerpt()?> 
                     <hr/>    
                    </div>  <!-- end col 2 row 2-->
      </div>  <!-- end row 2-->               
                 <?php }; ?>  
   
</article>