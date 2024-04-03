<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>

	<!-- favicon -->
	<link href="<?php bloginfo( "stylesheet_directory" ); ?>/assets/img/favicon-32.png" rel="icon" size="32x32">
</head>
<body <?php body_class(); ?>>

<header>

<div class="social d-none d-md-block" id="menu-topo">
	<div class="row">
		<a href="http://" target="_blank" class="HoverUp bg-box">
		<i class="fa-brands fa-facebook-f"></i></a>
		<a href="http://" target="_blank" class="HoverUp bg-box">
		<i class="fa-brands fa-twitter"></i></a>
		<a href="http://" target="_blank" class="HoverUp bg-box">
		<i class="fa-brands fa-linkedin-in" ></i></a>
		<a href="http://" target="_blank" class="HoverUp bg-box">
		<i class="fa-brands fa-instagram"></i></a>
		<a href="http://" target="_blank" class="HoverUp bg-box">
		<i class="fa-brands fa-youtube"></i></a>

	</div>
</div>

	<section class="menu-area">

	<div class="collapse collapse-horizontal" id="navbarToggleExternalContent">
	<button type="button" class="btn-close" aria-label="Close" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"></button>
    

	<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 3,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
					?>
</div>



	<a class="navbar-brand order-1 order-sm-0" href="<?php echo get_page_link( get_page_by_title( 'Home' )->ID ); ?>">
    					<img src="<?php echo get_template_directory_uri() . '/assets/img/logo-blog.png'; ?>" alt="Blog DSS" class="HoverUp logo"/>
  					</a>

					  <nav class="navbar-custom navbar navbar-expand-xl navbar-light navbar-stick" role="navigation">
			<div class="container">
					
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


					<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 3,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse d-none d-md-block',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
					?>
				





			</div>

		</nav>



	</section>	


	
</header>