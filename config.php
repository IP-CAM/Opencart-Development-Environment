<?php
/**
 * System Config
 */
define('DIR_APPLICATION', '/var/www/html/catalog/');
define('DIR_SYSTEM', '/var/www/html/system/');
define('DIR_IMAGE', '/var/www/html/image/');
define('DIR_STORAGE', '/var/www/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

/**
 * OpenCart Config
 */
define('HTTP_SERVER', getenv('OPENCART_HTTP_SERVER') . '/');
define('HTTPS_SERVER', getenv('OPENCART_HTTPS_SERVER') . '/');
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', getenv('OPENCART_DB_HOSTNAME'));
define('DB_USERNAME', getenv('OPENCART_DB_USERNAME'));
define('DB_PASSWORD', getenv('OPENCART_DB_PASSWORD'));
define('DB_DATABASE', getenv('OPENCART_DB_DATABASE'));
define('DB_PREFIX', getenv('OPENCART_DB_PREFIX') ?: 'oc_');
define('DB_PORT', getenv('OPENCART_DB_PORT') ?: 3306);

$required = ['DB_DRIVER', 'DB_HOSTNAME', 'DB_USERNAME', 'DB_PASSWORD', 'DB_DATABASE'];
foreach ($required as $name) {
    if (!defined($name) || !constant($name))
        throw new \Exception(sprintf('Required configuration env `OPENCART_%s` was not set!', $name));
}
