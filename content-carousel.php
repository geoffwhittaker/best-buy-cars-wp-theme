        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <!-- start carousel -->
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <!-- wrapper for slides -->
             <div class="carousel-inner">

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
                            $count = 0;// conuter to set the first carousel item to active
                            while($lastblog->have_posts()):$lastblog->the_post(); ?>
                            <!--Loops in the columns -->
                            
                                <div class="carousel-item <?php if($count == 0): echo'active'; endif;?>">
                               <!-- d-block stops the caption from hidding on all screen sizes-->
                              <div class="carousel-caption d-block">
                                        <?php the_title(sprintf('<h1> <a href="%s">',esc_url(get_permalink())),'</a></h1>')?>
                                    </div>
                                        <div> <?php the_post_thumbnail('thumbnail')?></div>
                                    <?php// the_excerpt()?> 
                                </div><!-- end carousel item-->
                            
                        <?php 
                            $count++; 
                            endwhile;
                        endif;
                        wp_reset_postdata()
                //------------end loop-------------------------------------------------------
                    ?>
                    
              </div><!-- end wrapper for slides -->
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> <!--end carousel  -->
             </div> <!--end column --> 
             
        </div><!--end row--> 

 