<?php
define('WP_HOME','https://kodomjaa.ir');
define('WP_SITEURL','https://kodomjaa.ir');
define('FORCE_SSL_ADMIN', true);

// اگر www هم می‌خوای پشتیبانی کنی (اختیاری اما بهتره)
if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] === 'www.kodomjaa.ir') {
    define('WP_HOME','https://www.kodomjaa.ir');
    define('WP_SITEURL','https://www.kodomjaa.ir');
}

// بقیه تنظیمات معمولی wp-config (دیتابیس و کلیدها)
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));
define('DB_USER', getenv('WORDPRESS_DB_USER'));
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

$table_prefix = 'wp_';

// کلیدهای امنیتی رو خود وردپرس موقع نصب می‌سازه، یا از https://api.wordpress.org/secret-key/1.1/salt/ بگیر
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

if ( ! defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');