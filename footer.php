<?php
  wp_footer(); /* Fixar adminbaren till sidan. */
?>

<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
            <?php
              dynamic_sidebar('footerabout');
            ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
            <?php
              dynamic_sidebar('footercontact');
            ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<?php
							dynamic_sidebar('footersocial');
						?>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
            <?php
              dynamic_sidebar('footercopyright');
            ?>
					</div>
				</div>
			</div>
		</footer>

	</div>

</body>
</html>