<?php /* Template name: Undersida 5 */ ?>

<?php
  get_header();
?> <!-- Importerar headern till sidan -->

<main>
			<section class="hero small" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
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
			<section class="columns black text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('modules_gray_header'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
            <?php
              while (have_rows('modules_gray_section')) {
                the_row();
            ?>
						<div class="col-xs-6">
							<i class="<?php the_sub_field('modules_gray_logos'); ?>"></i>
							<h3><?php the_sub_field('modules_gray_script'); ?></h3>
							<p><?php the_sub_field('modules_gray_desc'); ?></p>
            </div>
              <?php } ?>
					</div>
				</div>
			</section>
			<section class="columns red text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('modules_red_header'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
            <?php
              while (have_rows('modules_red_section')) {
                the_row();
            ?>
						<div class="col-xs-4">
							<i class="<?php the_sub_field('modules_red_logos'); ?>"></i>
							<h3><?php the_sub_field('modules_red_script'); ?></h3>
							<p><?php the_sub_field('modules_red_desc'); ?></p>
            </div>
              <?php } ?>
					</div>
				</div>
			</section>
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('modules_white_header'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
            <?php
              while (have_rows('modules_white_section')) {
                the_row();
            ?>
						<div class="col-xs-3">
							<i class="<?php the_sub_field('modules_white_logos'); ?>"></i>
							<h3><?php the_sub_field('modules_white_script'); ?></h3>
							<p><?php the_sub_field('modules_white_desc'); ?></p>
            </div>
              <?php } ?>
					</div>
				</div>
			</section>
			<section class="slideshow" data-autoplay="3000" data-singleitem="true">
        <?php
          while (have_rows('modules_first_slider')) {
            the_row();
        ?>
        <?php if (get_row_layout() === 'bild') { ?>
				<div class="slide" style="background-image: url('<?php echo get_sub_field('image')['url']; ?>');">
        </div> <?php } ?>
        <?php
          if (get_row_layout() === 'red') {
        ?>
				<div class="slide red no-image">
					<div class="container">
						<div class="row">
							<div class="col-xs-6 text-center">
								<i class="<?php the_sub_field('logo'); ?>"></i>
							</div>
							<div class="col-xs-6">
								<h2><?php the_sub_field('rubrik'); ?></h2>
								<p><?php the_sub_field('text'); ?></p>
							</div>
						</div>
					</div>
          </div> <?php } ?>
        <?php
          if (get_row_layout() === 'imagetext') {
        ?>  
				<div class="slide" style="background-image: url('<?php echo get_sub_field('image')['url']; ?>');">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2><?php the_sub_field('rubrik'); ?></h2>
								<p><?php the_sub_field('text'); ?></p>
							</div>
						</div>
					</div>
          </div> <?php } ?>
          <?php } ?>
			</section>
			<section class="slideshow" data-autoplay="5000" data-singleitem="false" data-items="2">
      <?php
        while (have_rows('modules_second_slider')) {
          the_row();
      ?>
				<div class="slide" style="background-image: url('<?php echo get_sub_field('bilder')['url']; ?>')">
        </div>
        <?php } ?>
			</section>
		</main>

<?php
  get_footer();
?> <!-- Importerar footern till sidan -->