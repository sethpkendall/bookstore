<?php

/**
 * template.php file for the bookstore sub-theme.
 *
 */

/**
 * Intercept page template variables
 *
 * @param $vars
 *   A sequential array of variables passed to the theme function.
 */
function bookstore_preprocess_page(&$vars) {
  /**
   * Here we modify the base theme's class assignment.
   */
  $vars['left_classes'] = 'col-left';
  $vars['center_classes'] = 'col-center ';

  $vars['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $vars['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
}


/**
 * Intercept block template variables
 *
 * @param $vars
 *   A sequential array of variables passed to the theme function.
 */
function bookstore_preprocess_block(&$vars, $hook) {

  /**
   * Here we modify the base theme's class assignment.
   */
  if ('sidebar_first' === $vars['block']->region) {
    $vars['classes_array'][] = 'left_column_box';
  }
}


