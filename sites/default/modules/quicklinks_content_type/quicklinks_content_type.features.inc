<?php
/**
 * @file
 * quicklinks_content_type.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function quicklinks_content_type_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function quicklinks_content_type_node_info() {
  $items = array(
    'quicklink' => array(
      'name' => t('Quicklink'),
      'base' => 'node_content',
      'description' => t('Quicklink with image, text and link to content within the website.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
