<?php /* Template Name: Halvbredd */ ?>

<?php
  get_header();
?> <!-- Importerar headern till sidan -->

<?php
	while (have_posts()) {
		the_post();
?>

<main>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<img src="<?php the_post_thumbnail_url(); ?>" />
						</div>
					</div>
				</div>
			</section>
		</main>

<?php } ?>

<?php
get_footer();
?> <!-- Importerar footern till sidan -->