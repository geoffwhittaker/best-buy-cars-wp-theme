<article  id="post-<?php the_ID()?>" <?php post_class()?> >
        <header class="jumbotron">
            <!-- sprintf takes a string from the second parameter and inserts it where the % sign is 
            the "s" after the % sign is the format specifier, s for string
            -->
            <?php the_title(sprintf('<h1 class="entry-title"> <a href="%s">',esc_url(get_permalink())),'</a></h1>')?>
            <small>Posted on <?php the_time('F,j,Y');?> In the category
                 <?php the_category(' ')?> ||  <?php the_tags();?> || <?php edit_post_link();?>
            </small>
        </header>   
        <div class="row">
            <?php if(has_post_thumbnail()): ?>

                <div class="col-sm-3 hide-thumb">
                    <div class="thumbnail"><?php //the_post_thumbnail('medium');

                        $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ );
                        echo '<img width="100%" src="' . $image_src[0] . '">';
                    ?>
                     </div>
                </div><!--end col 1 ===================================================-->

                <div class="col-xs-12 col-sm-9">
                    <?php the_excerpt();?>
                    <hr/>
                    
                    <?php  if(comments_open()){comments_template();} ?>
                </div><!--end col 2 ====================================================== -->

                <?php else:?> 
                <div class="col-xs-12 col-lg-12 add-margin">
                    <?php the_excerpt();?>
                    <hr/>
                   <?php  if(comments_open()){comments_template();} ?>
                </div><!--end col 2 -->
            <?php endif ?>    
        </div> <!--end row -->
    </article>