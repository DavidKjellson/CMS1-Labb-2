<?php /* Template Name: Search Page */ ?>

<?php
  get_header();
?> <!-- Importerar headern till sidan. -->

<main>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
              <h1><?php
                printf( __( 'Search results for:', 'twentynineteen' ) . ' ' .      get_search_query() ); 
              ?></h1>
							<div class="searchform-wrap">
								<form id="searchform" class="searchform">
									<div>
                    <?php get_search_form(); ?>
									</div>
								</form>
              </div>
              <?php
                if (have_posts()) {
                  while (have_posts()) {
                    the_post();
              ?>
							<article>
								<img src="<?php the_post_thumbnail_url(); ?>" />
								<?php 
								echo '<h2 class="title">';
									echo '<a href="'.get_permalink( $sub_page ).'">'.get_the_title( $sub_page ).'</a>'; 
								echo '</h2>';
								?>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a href=""><?php the_author_posts_link(); ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href=""><?php the_category(', '); ?></a>
									</li>
								</ul>
								<p><?php the_content(); ?></p>
              </article>
                  <?php } ?>
                <?php } ?>
							<nav class="navigation pagination">
							<?php the_posts_pagination(); ?>
							</nav>
						</div>
					</div>
				</div>
			</section>
		</main>

<?php
  get_footer(); /* Importerar footern till sidan. */
?>

