<?php
// =============================================================================
// Environment settings
// =============================================================================
if ( file_exists( dirname( __FILE__ ) . '/wp-config.local.php' ) ) {
	require( dirname( __FILE__ ) . '/wp-config.local.php' );
}

if ( ! defined( 'WPCACHEHOME' ) ) {
	define( 'WPCACHEHOME', '' ); //Added by WP-Cache Manager
}
if ( ! defined( 'DISALLOW_FILE_MODS' ) ) {
	define( 'DISALLOW_FILE_MODS', TRUE );
}

if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
	define( 'DISALLOW_FILE_EDIT', TRUE );
}

if ( ! defined( 'FORCE_SSL_LOGIN' ) ) {
	define( 'FORCE_SSL_LOGIN', TRUE );
}

if ( ! defined( 'FORCE_SSL_ADMIN' ) ) {
	define( 'FORCE_SSL_ADMIN', TRUE );
}

// =============================================================================
// PHP configs
// =============================================================================

ini_set( 'auto_detect_line_endings', TRUE );

// =============================================================================
// wp-content settings
// Required when wp-content is outside the WordPress install
// =============================================================================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', WP_HOME . '/content' );
define( 'WP_PLUGIN_DIR', dirname( __FILE__ ) . '/content/plugins' );
define( 'WP_PLUGIN_URL', WP_HOME . '/content/plugins' );

// =============================================================================
// Memory settings
// =============================================================================
define( 'WP_MAX_MEMORY_LIMIT', '256M' ); // Admin
define( 'WP_MEMORY_LIMIT', '128M' );      // Public

// =============================================================================
// Global env settings
// =============================================================================
define( 'AUTOMATIC_UPDATER_DISABLED', TRUE );
define( 'DISABLE_WP_CRON', TRUE );

// =============================================================================
// You do not want to change these
// =============================================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// =============================================================================
// Table prefix
// Change this if you have multiple installs in the same database
// =============================================================================
$table_prefix = 'wp_';

// =============================================================================
// Language
// Leave blank for American English
// =============================================================================
define( 'WPLANG', '' );

// =============================================================================
// Hide errors
// =============================================================================
@ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', FALSE );

// =============================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =============================================================================
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', FALSE );
}

if ( WP_DEBUG ) {
	define( 'WP_ENV', 'development' );
	define( 'SCRIPT_DEBUG', TRUE );
	define( 'CONCATENATE_SCRIPTS', FALSE );
	if ( ( ! defined( 'DOING_CRON' ) || ! DOING_CRON ) && ! defined( 'SAVEQUERIES' ) ) {
		define( 'SAVEQUERIES', TRUE );
	}
	define( 'WP_DEBUG_LOG', TRUE );
}


define( 'WP_CACHE_KEY_SALT', md5( DB_NAME . __FILE__ ) );

// =============================================================================
// Bootstrap WordPress
// =============================================================================
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );
}
require_once( ABSPATH . 'wp-settings.php' );
