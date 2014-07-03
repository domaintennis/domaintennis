<?php

// $databases = array (
//   'default' => 
//   array (
//     'default' => 
//     array (
//       'driver' => 'mysql',
//       'database' => 'local-domaintennis',
//       'username' => 'root',
//       'password' => 'root',
//       'host' => 'localhost',
//       'port' => '',
//       'prefix' => '',
//     ),
//   ),
// );


// The name of the database. This will also be used as the memcache prefix.
$_db_name = 'local-domaintennis';

// Path where all contrib modules can be found.
$_contrib_path = 'sites/all/modules/';

// Database configuration.
if (is_array($db_url)) {
  $db_url['default'] = 'mysqli://root:root@localhost/' . $_db_name;
}
else {
  $db_url = 'mysqli://root:root@localhost/' . $_db_name;
}

// Toggle the use of memcache.
$_use_memcache = FALSE;

// Use memcache if available & enabled.
$_memcache_inc = $_contrib_path . '/memcache/memcache.inc';

if ($_use_memcache && is_file($_memcache_inc)) {
  $conf['cache_backends'][] = 'sites/all/modules/memcache/memcache.inc';
  $conf['cache_default_class'] = 'MemCacheDrupal';
  $conf['memcache_key_prefix'] = 'domaintennis';
  $conf['memcache_options'] = array(
    Memcached::OPT_BINARY_PROTOCOL => TRUE,
  ); 
}


?>