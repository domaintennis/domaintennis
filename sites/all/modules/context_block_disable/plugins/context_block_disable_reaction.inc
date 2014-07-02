<?php
/**
 * @file
 * Context reaction plugin for disabling blocks.
 *
 * This provides a reaction for the Context module that will hide the selected
 * blocks whenever the Context condition is met.
 */

/**
 * Context reaction plugin for disabling blocks.
 */
class Context_Block_Disable_Reaction extends context_reaction_block {

  /**
   * Implements options_form() callback.
   *
   * Overrides the parent function in order to pull out only the part of the
   * form we care about, and adjust the selected values due to that change.
   */
  public function options_form($context) {

    $form = parent::options_form($context);

    // Change the wrapper class to avoid JS from context_reaction_block.
    $form['selector']['#prefix'] = '<div class="context-blockdisableform-selector">';

    $defaults = $this->fetch_from_context($context);

    if (!empty($defaults['blocks']) && is_array($defaults['blocks'])) {

      foreach ($defaults['blocks'] as $module => $block_info) {

        if (is_array($block_info)) {

          foreach ($block_info as $block_name) {

            $form['selector'][$module][$block_name]['#default_value'] = TRUE;
          }
        }
      }
    }

    return $form['selector'];
  }

  /**
   * Implements options_form_submit() callback.
   *
   * Overrides the parent function in order to handle the lack of regions in
   * this plugin.
   */
  public function options_form_submit($values) {

    $blocks = array();

    foreach ($values as $module => $block_data) {

      foreach ($block_data as $name => $selected) {

        if (!empty($selected)) {

          $blocks[$module][$name] = $selected;
        }
      }
    }

    return array('blocks' => $blocks);
  }

  /**
   * Disables selected modules if a condition implements this plugin.
   *
   * @param array &$data
   *   The block data array (subject, content).
   *
   * @param object $block
   *   The block object (bid, delta, region, etc.).
   *
   * @see hook_block_view_alter()
   */
  public function execute(&$data, $block) {

    $contexts = $this->get_contexts();

    foreach ($contexts as $context) {

      if (empty($context->reactions[$this->plugin])) {

        continue;
      }

      $blocks = $context->reactions[$this->plugin]['blocks'];

      if (empty($blocks[$block->module])) {

        continue;
      }

      foreach ($blocks[$block->module] as $block_info) {

        // $block_info is module_name-block-delta.
        list($module_name, $block_id) = explode('-', $block_info, 2);

        if ($block->delta == $block_id) {

          $data = NULL;
        }
      }
    }
  }
}
