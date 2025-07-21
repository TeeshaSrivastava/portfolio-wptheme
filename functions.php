<?php
function portfolio_theme_setup() {
  add_theme_support('title-tag');
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'portfolio'),
  ));
}
add_action('after_setup_theme', 'portfolio_theme_setup');
?>