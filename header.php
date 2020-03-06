<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<?php headerimg(); ?>
					</div>
					<div class="col-sm-6 hidden-xs">
					<?php wp_nav_menu( array(
          	'theme_location' => 'huvudmeny'
        	)); ?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<?php get_search_form(); ?>
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-8">
						<?php breadcrumbs(); ?>
					</div>
					<div class="col-xs-4">
						<ul class="social">
							<?php
								while (have_rows('social_media', 'option')) {
									the_row('social_media', 'option');
							?>
							<li>
								<a href="">
									<i class="<?php the_sub_field('social_logo', 'option'); ?>"></i>
								</a>
							</li>
								<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</nav>