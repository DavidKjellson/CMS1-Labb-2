<?php
  get_header(); /* Importerar headern till sidan. */
?>

<main>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
              <?php
                while (have_posts()) {
                  the_post();
              ?>
              <h1><?php the_date('F, Y'); ?></h1>
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
										<i class="fa fa-tag"></i> <a href="kategori.html"><?php the_category(', '); ?></a>
									</li>
								</ul>
								<p><?php the_content(); ?></p>
              </article>
              <?php } ?>
							<nav class="navigation pagination">
							<?php the_posts_pagination(); ?>
							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
                <?php
                  dynamic_sidebar('sidebar');
                ?>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

<?php
  get_footer(); /* Importerar footern till sidan. */
?>