<?php
// =====================================================
// Load configurations of WordPress based on environment
// =====================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
} else if ( file_exists( dirname( __FILE__ ) . '/staging-config.php' ) ) {
	include( dirname( __FILE__ ) . '/staging-config.php' );
} else {
    define('DB_NAME', 'database_name_here');
    define('DB_USER', 'username_here');
    define('DB_PASSWORD', 'password_here');
    define('DB_HOST', 'localhost');
}
    // Defaults
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// =============================================================
// Authentication Unique Keys and Salts
// Generate using: https://api.wordpress.org/secret-key/1.1/salt
// =============================================================
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

// =====================================================================================
// WordPress Database Table prefix
// You can have multiple installations in one database if you give each a unique prefix.
// =====================================================================================
$table_prefix  = 'wp_';

// ========================================
// For developers: WordPress debugging mode
// ========================================
define('WP_DEBUG', false);

// ===================
// Bootstrap WordPress
// ===================
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');
require_once(ABSPATH . 'wp-settings.php');
