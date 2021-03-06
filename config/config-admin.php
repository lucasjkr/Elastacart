<?php
// HTTP
define('HTTP_SERVER',       'http://' . getenv('TLD') . '/admin/');
define('HTTP_CATALOG',      'http://' . getenv('TLD') . '/');

// HTTPS
define('HTTPS_SERVER',      'http://' . getenv('TLD') . '/admin');
define('HTTPS_CATALOG',     'http://' . getenv('TLD') . '/');

// DIR
define('DIR_APPLICATION',   getenv('APP_ROOT') . '/public/admin/');
define('DIR_SYSTEM',        getenv('APP_ROOT') . '/system/');
define('DIR_IMAGE',         getenv('APP_ROOT') . '/public/image/');
define('DIR_STORAGE',       getenv('APP_ROOT') . '/storage/');
define('DIR_CATALOG',       getenv('APP_ROOT') . '/public/catalog/');
define('DIR_LANGUAGE',      DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE',      DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG',        DIR_SYSTEM . 'config/');
define('DIR_CACHE',         DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD',      DIR_STORAGE . 'download/');
define('DIR_LOGS',          DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION',  DIR_STORAGE . 'modification/');
define('DIR_SESSION',       DIR_STORAGE . 'session/');
define('DIR_UPLOAD',        DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER',         'pdo');
define('DB_HOSTNAME',       'ec_maria_app');
define('DB_USERNAME',       getenv('MYSQL_USER'));
define('DB_PASSWORD',       getenv('MYSQL_PASSWORD'));
define('DB_DATABASE',       getenv('MYSQL_DATABASE'));
define('DB_PORT',           '3306');
define('DB_PREFIX',         '');

// OpenCart API
define('OPENCART_SERVER',   'https://www.opencart.com/');