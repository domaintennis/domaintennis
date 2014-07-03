<?php

/**
 * Implements hook_preprocess_html().
 */
function tennis_preprocess_html(&$variables) {
  // Load the fallback.css for Internet Explorer 8 and lower.
  $path = drupal_get_path('theme', 'tennis');
  drupal_add_css("$path/css/tennis.fallback.css", array(
    'browsers' => array(
      '!IE' => FALSE,
      'IE' => 'lte IE 8',
    ),
    'group' => CSS_THEME,
    'weight' => 1000,
  ));
}

//Fontawesome
drupal_add_css('//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.min.css', array('group' => CSS_SYSTEM, 'weight' => -100, 'preprocess' => FALSE));