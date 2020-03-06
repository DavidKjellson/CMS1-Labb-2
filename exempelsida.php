<?php /* Template name: Exempelsida */ ?>

<?php
  get_header();
?> <!-- Importerar headern till sidan -->

<main>
      <?php
        while (have_posts()) {
          the_post();
      ?>
			<section class="hero" style="background-image: url('<?php the_post_thumbnail_url();?>');">
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
      <?php
        while (have_rows('whiteexample')) {
          the_row('whiteexample');
      ?>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<img src="<?php echo get_sub_field('whiteimage')['url']; ?>" />
						</div>
						<div class="col-xs-6">
							<h2><?php the_sub_field('whiteheader'); ?></h2>
							<p><?php the_sub_field('whitetext'); ?></p>
						</div>
					</div>
				</div>
      </section>
      <?php } ?>
      <?php
        while (have_rows('redexample')) {
          the_row('redexample');
      ?>
			<section class="testimonial red">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-2">
							<h2><?php the_sub_field('redhead'); ?></h2>
						</div>
						<div class="col-xs-2 text-right">
							<?php the_sub_field('redbut'); ?>
						</div>
					</div>
				</div>
      </section>
      <?php } ?>
      <?php
        $sliderexamples = get_field('sliderexample');
        if ($sliderexamples) {
      ?>
          <section class="slideshow" data-autoplay="2000" data-singleitem="false" data-items="3">
            <?php foreach ($sliderexamples as $sliderexample) { ?>
            <div class="slide" style="background-image: url('<?php echo esc_url($sliderexample['url']); ?>')">
            </div>
          <?php } ?>
         <?php } ?>
			</section>
			<section class="columns black text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('grayhead'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
            <?php
              while (have_rows('grayexample')) {
                the_row('grayexample');
            ?>
						<div class="col-xs-3">
							<i class="<?php the_sub_field('graylogo'); ?>"></i>
							<h3><?php the_sub_field('grayscript'); ?></h3>
							<p><?php the_sub_field('graydesc'); ?></p>
            </div>
              <?php } ?>
					</div>
				</div>
			</section>
			<section class="testimonial">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 text-center">
							<h2><?php the_field('whitehead'); ?></h2>
						</div>
					</div>
				</div>
			</section>
			<section class="slideshow" data-autoplay="3000" data-singleitem="true">

        <?php
          while (have_rows('complicated_slider')) {
            the_row();
        ?>
        <?php if (get_row_layout() === 'bara_bild') { ?>
        <div class="slide" style="background-image: url('<?php echo get_sub_field('bara_bild_utan_bara')['url']; ?>');">
          </div> <?php } ?>
        <?php if (get_row_layout() === 'grej_till_vanster') { ?> 
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
        <?php if (get_row_layout() === 'bild_med_text') { ?> 
          <div class="slide no-image" style="background-image: url('<?php echo get_sub_field('bild')['url']; ?>');">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2><?php the_sub_field('rubrik'); ?></h2>
								<p><?php the_sub_field('text'); ?></p>
							</div>
						</div>
					</div>
        </div> <?php } ?>
        <?php if (get_row_layout() === 'grej_till_hoger') { ?>
          <div class="slide black no-image">
					<div class="container">
						<div class="row">
							<div class="col-xs-6">
								<h2><?php the_sub_field('rubrik'); ?></h2>
								<p><?php the_sub_field('text'); ?></p>
							</div>
							<div class="col-xs-6 text-center">
								<i class="<?php the_sub_field('bild'); ?>"></i>
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
							<h2><?php the_field('whitehead_2'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
            <?php
              while (have_rows('whitelikes')) {
                the_row('whitelikes');
            ?>
						<div class="col-xs-6">
							<i class="<?php the_sub_field('whitelogo'); ?>"></i>
							<h3><?php the_sub_field('whitescript'); ?></h3>
							<p><?php the_sub_field('whitedesc'); ?></p>
            </div>
              <?php } ?>
					</div>
				</div>
			</section>
		</main>

<?php
  get_footer();
?> <!-- Importerar footern till sidan -->