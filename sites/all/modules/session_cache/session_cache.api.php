<?php

/**
 * @file
 * API documentation for Session Cache API module.
 *
 * Cookies and database session caches created through this API expire after a
 * UI-configurable number of hours or days. $_SESSIONs expire according to the
 * global configuration -- see the comments in
 * sites/default/files/default.settings.php.
 */

/**
 * Write data to the user session, whatever the storage mechanism may be.
 *
 * @param string $bin
 *   Unique id, eg a string prefixed by the module name.
 * @param mixed $data
 *   A number or string, an object, a multi-dimensional array etc.
 *   $bin is the identifier you choose for the data you want to store. To
 *   guarante uniqueness, you could prefix it with the name of the module that
 *   you use this API with.
 *   Use NULL to erase the bin; it may be auto-recreated and refilled at any
 *   time by calling the function again with a non-NULL data argument.
 */
function session_cache_set($bin, $data) {
  // See the following modules for examples:
  // o IP Geolocation Views & Maps
  // o Views Global Filter
}

/**
 * Read data from the user session, given its bin id.
 *
 * @param string $bin
 *   unique id eg a string prefixed by the module name
 */
function session_cache_get($bin) {
  // See the following modules for examples:
  // o IP Geolocation Views & Maps
  // o Views Global Filter
}

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Add your own variation of the available storage mechanisms by implementing
 * this hook.
 *
 * @param int $storage_method
 * @param string $bin
 * @param mixe $data
 */
function hook_session_cache_set($storage_method, $bin, $data) {
  if ($storage_method != MYMODULE_SESSION_STORAGE) {
    return;
  }
  // Store $data in $bin, using your module's mechanism.
  // For an example see the submodule: session_cache_file.module
}

/**
 * Complete your own variation of the available storage mechanisms by
 * implementing this hook.
 *
 * @param int $storage_method
 * @param string $bin
 * @return mixed
 */
function hook_session_cache_get($storage_method, $bin) {
  if ($storage_method != MYMODULE_SESSION_STORAGE) {
    return NULL;
  }
  // ... your retrieval mechanism
  $data = "your data based on $bin";
  return $data;
}

/**
 * You make your storage mechanism selectable through the existing admin UI by
 * implementing hook_form_session_cache_admin_config_alter().
 */
function hook_form_session_cache_admin_config_alter(&$form, &$form_state) {
  $form['session_cache_storage_method']['#options'][MYMODULE_SESSION_STORAGE]
    = t('my great storage method');
}

/**
 * @} End of "addtogroup hooks".
 */