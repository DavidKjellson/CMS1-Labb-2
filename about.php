<?php /* Template Name: About */ ?>

<?php
  get_header();
?> <!-- Importerar headern till sidan -->

<main>
  <?php
    while (have_posts()) {
      the_post();
  ?>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
						</div>
						<div class="col-xs-6">
							<img src="<?php the_post_thumbnail_url(); ?>" />
						</div>
					</div>
				</div>
      </section>
    <?php } ?>
    <?php
      while (have_rows('grayarea')) {
        the_row('grayarea');
    ?>
			<section class="testimonial black">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-2">
							<h2><?php the_sub_field('grayheader'); ?></h2>
						</div>
						<div class="col-xs-2 text-right">
              <?php the_sub_field('graybutton'); ?>
						</div>
					</div>
				</div>
      </section>
			<?php } ?>
			<?php
				$aboutsliders = get_field('aboutslider');
				if ($aboutsliders) {
			?>
			<section class="slideshow" data-autoplay="5000" data-singleitem="false" data-items="2">
				<?php foreach ($aboutsliders as $aboutslider) { ?>
				<div class="slide" style="background-image: url('<?php echo esc_url ($aboutslider['url']); ?>')">
				</div>
					<?php } ?>
				<?php } ?>
      </section>
			<section class="columns red text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('redheader'); ?></h2>
						</div>
          </div>
					<div class="row bottom">
          <?php
            while (have_rows('redarea')) {
              the_row('redarea');
          ?>
						<div class="col-xs-3">
							<img src="<?php echo get_sub_field('redstaff')['url']; ?>" />
							<h3><?php the_sub_field('redname'); ?></h3>
              <p><?php the_sub_field('reddesc'); ?></p>
              <?php the_sub_field('redbutton'); ?>
            </div>
            <?php } ?>
          </div>
        </div>
			</section>
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('whiteheader'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
            <?php
              while (have_rows('whitearea')) {
                the_row('whitearea');
            ?>
						<div class="col-xs-4">
							<i class="<?php the_sub_field('whitelogos'); ?>"></i>
							<h3><?php the_sub_field('whitescript'); ?></h3>
							<p><?php the_sub_field('whitedesc'); ?></p>
            </div>
            <?php } ?>
					</div>
				</div>
			</section>
			<section class="columns red text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('redheader_2'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
            <?php
              while (have_rows('redarea_2')) {
                the_row('redarea_2');
            ?>
						<div class="col-xs-5 col-xs-offset-1">
							<blockquote>
								<p><?php the_sub_field('redrepeater'); ?></p>							
							</blockquote>
            </div>
              <?php } ?>
					</div>
				</div>
			</section>
		</main>

<?php
get_footer();
?> <!-- Importerar footern till sidan -->