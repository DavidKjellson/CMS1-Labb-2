<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag'); 

/* Ger sidan CSS-mallar. */
function includeStyles () {
  wp_enqueue_style('fontAwesome', get_template_directory_uri().'/css/font-awesome.css');
  wp_enqueue_style('bootStrap', get_template_directory_uri().'/css/bootstrap.css');
  wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
}

/* Ger sidan script-mallar. */
function includeScripts () {
  wp_enqueue_script('jQuery', get_template_directory_uri().'/js/jquery.js');
  wp_enqueue_script('owlCarousel', get_template_directory_uri().'/js/owl.carousel.js');
  wp_enqueue_script('javaScript', get_template_directory_uri().'/js/script.js', [], false, true);
}

/* Ger navbaren dess huvudmeny. */
register_nav_menu('huvudmeny', ('Huvudmeny'));

/* Lägger till en inställningssida för ACF. */
if (function_exists ('acf_add_options_page')) {
  /* Lägger till "Temainställningar" i sidomenyn. */
  $parent = acf_add_options_page(array(
    'page_title' => 'Temainställningar',
    'menu_title' => 'Temainställningar'
  ));
  /* Lägger till "Headerinställningar" som undermeny. */
  acf_add_options_sub_page(array(
    'page_title' => 'Headerinställningar',
    'menu_title' => 'Headerinställingar',
    'parent_slug' 	=> $parent['menu_slug']
  ));
}

/* Och här lägger man till widgets. */
function widgets () {

  /* Sidebar */
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar'
  ));

  /* Om-delen på footern. */
  register_sidebar(array(
    'name' => 'FooterAbout',
    'id' => 'footerabout',
    'before_widget' => '<ul class="menu-class">',
    'after_widget' => '</ul>',
    'before_title' => '<h4>',
    'afer_title' => '</h4>'
  ));

  /* Kontakt-delen på footern */
  register_sidebar(array(
    'name' => 'FooterContact',
    'id' => 'footercontact',
    'before_widget' => '<ul class="menu-class">',
    'after_widget' => '</ul>',
    'before_title' => '<h4>',
    'afer_title' => '</h4>'

  ));

  /* Länkarna till sociala medierna till footern */
  register_sidebar(array(
    'name' => 'FooterSocial',
    'id' => 'footersocial',
    'before_widget' => '<ul class="menu-class">',
    'after_widget' => '</ul>',
    'before_title' => '<h4>',
    'afer_title' => '</h4>'
  ));

  /* Copyright-delen längst ner i footern */
  register_sidebar(array(
    'name' => 'FooterCopyright',
    'id' => 'footercopyright',
    'before_widget' => '<ul class="menu-class">',
    'after_widget' => '</ul>'
  ));
}

/* Paginationen. */
function pagination() {
  echo '<ul>';
    if (get_previous_posts_link()) {
      echo '<li>';
      echo  previous_posts_link('Föregående');
      echo '</li>';
    }
    if (get_next_posts_link()) {
      echo '<li>';
      echo next_posts_link('Nästa');
      echo '</li>';
    }
  echo '</ul>';
}

/* Lägger till paginationen. */
function funcy($template) {
  $template = '
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="pagination nav-links">%3$s</div>
	</nav>';
  return $template;
}

/* Skapar en funktion som gör att man kan välja om headern skall ha en bild eller en text. */
function headerimg() {
  echo '<a class="logo" href="';
  echo home_url();
  echo '">'; 
  if (get_field('har_bild') == true) {
  echo '<img src="';
  echo get_field('header', 'option')['url'];
  echo '" />';
  }
  else {
    echo 'Labb 2';
  }
  echo '</a>';
  }

/* Denna funktion fixar breadcrumben på headern. På bloggsidan ändrar vi ID:t till bloggens, annars länkar den till första inlägget. */
function breadcrumbs() {
  echo '<ul class="breadcrumbs">';
  $ibland = false;
  if (is_home()) {
  $ibland = 12;
  }

  echo '<li>Du är här: <a href="'.get_permalink( $ibland ).'">'.get_the_title( $ibland ).'</a></li>';
  echo '</ul>';
 }

 /* Filtrerar pagination och funcy. */
add_filter('navigation_markup_template', 'funcy');

/* Adderar funktioner till sedan. */
add_action('widgets_init', 'Widgets');
add_action('wp_enqueue_scripts', 'includeStyles');
add_action('wp_enqueue_scripts', 'includeScripts');

?>