<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flexbox theme</title>
	<?php wp_head(); ?> 
</head>

<?php 
// adds a custom class to the front page only
if (is_front_page()):
	$awesome_classes = array('awesome-class','my_class');
	  else:
	$awesome_classes = array('not_awesome_class');
endif;
?>

<body>

<div class="container-liquid">

	<div class="row">
		<div class="col col-lg-12">

			<div class="row">
				<div class="col col-lg-6">
					<h4 class="text-left"> 
						<?php 
						if ( has_custom_logo() ) {
							the_custom_logo();
						}else{
							bloginfo('name' );
						};
						?>
					</h4>
				</div>
				<div class="col col-lg-6 ">
					
						<?php get_search_form() ?>
					
				</div>
			</div> <!-- end row 1 ==============================================-->
			<div class="row">
				<div class="col col-lg-12">
				<!-- this is the navbar wrapper needed for a colapsable menu-->
					<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<a class="navbar-brand" href="<?php $url = get_site_url(); echo $url; ?>">Best Buy Cars</a>
								<?php
								wp_nav_menu( array(
									'theme_location'    => 'primary',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'bs-example-navbar-collapse-1',
									'menu_class'        => 'nav navbar-nav',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker()
								) );
								?>
						</div>
				</nav>
				</div><!--end navbar div -->
				</div>
			</div>

            <!-- Includes the custom header from the themes custom header section-->
			<img src="<?php header_image()?>" 
			height="<?php get_custom_header()->height;?>" 
			width="<?php "get_custom_header()->width";?>" 
			alt=""/>		
		
		</div><!-- end  main col-->
			
	</div><!-- end header row -->



	
