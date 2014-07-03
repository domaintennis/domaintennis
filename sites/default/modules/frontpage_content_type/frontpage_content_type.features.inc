<?php
/**
 * @file
 * frontpage_content_type.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function frontpage_content_type_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function frontpage_content_type_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function frontpage_content_type_node_info() {
  $items = array(
    'frontpage' => array(
      'name' => t('Frontpage'),
      'base' => 'node_content',
      'description' => t('Frontpage content type referencing entities \'Frontpage Banner\' & 3 Quicklinks.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
