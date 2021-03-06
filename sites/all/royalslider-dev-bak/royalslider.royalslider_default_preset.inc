<?php
/**
 * @file
 * Bulk export of default_royalslider_presets objects generated by Bulk export module.
 */

/**
 * Implements hook_royalslider_default_presets().
 */
function royalslider_royalslider_default_presets() {
  $presets = array();

  $preset = royalslider_optionset_create();
  $preset->disabled = FALSE; /* Edit this to true to make a default preset disabled initially */
  $preset->api_version = 1;
  $preset->name = 'default';
  $preset->title = 'Default';
  $preset->skin = 'default';
  $preset->imagestyle_fullscreen = '';
  $preset->imagestyle_normal = 'large';
  $preset->imagestyle_thumbnail = 'thumbnail';
  $presets['default'] = $preset;

  return $presets;
}
