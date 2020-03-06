<?php
  get_header(); /* Importerar headern till sidan. */
?>

<main>
  <?php
    while(have_posts()) {
      the_post();
  ?>
			<section class="hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<h1><?php the_title(); ?></h1>
								<p><?php the_content(); ?></p>
							</div>
						</div>
					</div>
				</div>
      </section>
    <?php } ?>
			<section class="testimonial black">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 text-center">
							<h2><?php the_field('frontgrayarea'); ?></h2>
						</div>
					</div>
				</div>
      </section>
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('frontwhitearea'); ?></h2>
						</div>
          </div>
					<div class="row bottom">
          <?php
          	while (have_rows('categories')) {
            	the_row('categories');
          ?>
						<div class="col-xs-4">
							<i class="<?php the_sub_field('images'); ?>"></i>
							<h3><?php the_sub_field('script'); ?></h3>
							<p><?php the_sub_field('scriptdesc'); ?></p>
            </div>
          <?php } ?>
          </div>
				</div>
			</section>
			<section class="slideshow" data-autoplay="3000" data-singleitem="true">
				<?php
					while (have_rows('frontslider')) {
						the_row();
				?>
				<?php if (get_row_layout() === 'leftslider') { ?>
				<div class="slide red no-image">
					<div class="container">
						<div class="row">
							<div class="col-xs-6 text-center">
								<i class="<?php the_sub_field('bild'); ?>"></i>
							</div>
							<div class="col-xs-6">
								<h2><?php the_sub_field('rubrik'); ?></h2>
								<p><?php the_sub_field('text'); ?></p>
							</div>
						</div>
					</div>
				</div> <?php } ?>
				<?php if (get_row_layout() === 'rightslider') { ?>
				<div class="slide black no-image">
					<div class="container">
						<div class="row">
							<div class="col-xs-6">
								<h2><?php the_sub_field('rubrik'); ?></h2>
								<p><?php the_sub_field('text'); ?></p>
							</div> 
							<div class="col-xs-6 text-center">
								<img src="<?php echo get_sub_field('bild')['url']; ?>" />
							</div>
						</div>
					</div>
				</div> <?php } ?>
				<?php } ?>
			</section>
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('frontabout_header'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
						<?php
							while (have_rows('frontabout_repeater')) {
								the_row();
						?>
						<div class="col-xs-5 col-xs-offset-1">
							<blockquote>
								<p><?php the_sub_field('repeater'); ?></p>							
							</blockquote>
						</div>
				<?php } ?>
					</div>
				</div>
			</section>
    </main>
    
<?php
  get_footer(); /* Importerar footern till sidan. */
?>