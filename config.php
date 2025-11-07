<?php
// HTTP
define('HTTP_SERVER', 'http://suit/');

// HTTPS
define('HTTPS_SERVER', 'http://suit/');

// DIR
define('DIR_APPLICATION', 'D:/ip/suit/catalog/');
define('DIR_SYSTEM', 'D:/ip/suit/system/');
define('DIR_IMAGE', 'D:/ip/suit/image/');
define('DIR_STORAGE', 'D:/ip/suit/system/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ibmax_local');
define('DB_PORT', '3308');
define('DB_PREFIX', 'oc_');