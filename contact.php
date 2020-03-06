<?php /* Template name: Kontakt */ ?>

<?php
  get_header();
?> <!-- Importerar headern till sidan -->

<?php
  while (have_posts()) {
    the_post();
?>
<main>
			<section class="hero small" style="background-image: url('<?php the_post_thumbnail_url();?>');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<h1><?php the_title(); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<h2><?php the_field('left'); ?></h2>
							<form>
                <?php the_content(); ?>
							</form>
            </div>
            <?php
              while (have_rows('right')) {
                the_row('right');
            ?>
						<div class="col-xs-6">
							<h2><?php the_sub_field('rightheader'); ?></h2>
							<p><?php the_sub_field('righttext'); ?></p>
            </div>
            <?php } ?>
					</div>
				</div>
			</section>
    </main>
  <?php } ?>

<?php
  get_footer();
?> <!-- Importerar footern till sidan -->