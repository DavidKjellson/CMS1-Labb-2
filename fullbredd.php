<?php /* Template name: Fullbredd */ ?>

<?php
  get_header();
?> <!-- Importerar headern till sidan. -->

<?php
  while (have_posts()) {
    the_post();
?>

<main>
  <section class="standard">
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12">
          <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        </div>
      </div>
    </div>
  </section>
</main>
  <?php } ?>

<?php
  get_footer();
?> <!-- Importerar footern till sidan. -->