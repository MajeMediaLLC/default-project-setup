<?php
// =============================================================================
// Enviroment settings
// =============================================================================
if ( file_exists( dirname( __FILE__ ) . '/wp-config.local.php' ) ) {
	require( dirname( __FILE__ ) . '/wp-config.local.php' );
}

if( ! defined( 'WPCACHEHOME' ) ) {
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
	if ( ! DOING_CRON ) {
		define( 'SAVEQUERIES', TRUE );
	}
	define( 'WP_DEBUG_LOG', TRUE );
}

// TODO: Per Install: Redo these here: https://api.wordpress.org/secret-key/1.1/salt/
define( 'AUTH_KEY', '7a,+Hb4h-r{#)VqO+60v!sy8Bj/I`i 0gVooy^kXRjT%5YU8H=IUhN<6X(P~gUv*' );
define( 'SECURE_AUTH_KEY', 'k0:4D4s|g]d/c&[7Eg`egDcr$(IQ4?8> }! R7#]=q:]aY<5*sCC|L3~M3C#Z h+' );
define( 'LOGGED_IN_KEY', 'ci/z:A+_+G$m@X:OjES%s9&+~8%W|0jF4p22WOT;-#Kq)I5-R0GO*Kam5J!S?$g+' );
define( 'NONCE_KEY', '|S|z!7R-iBf+EHxK1m)E+:[.@h,-bJ:@l+h+0)`TB>-(U*)Y)CXC=S^[u:2s!7W$' );
define( 'AUTH_SALT', '[,*a_Bb)gZ(*fqREQ=+?&kw*>]GbMC-f|#`BI!}wm0I|i4``Hw1X%b=!kW8Z+X8B' );
define( 'SECURE_AUTH_SALT', 'DSeB_UZo|JDJHM^)RLt,E;9E&`WP-?/N7F&ax4A/M#vSZt8WHR4YybuIwx2%2!6B' );
define( 'LOGGED_IN_SALT', 'GQu1#H>3Z3!+>wC*oe|.F+nv3V^TQ,>zF~Q{5n?Qlpm@e+@kt4lbH82$T9>(h&Zy' );
define( 'NONCE_SALT', 'Yfao+69S~/>HXq_> YvA0qM45pV{!>dXo5(shG&x&xxQZd#n,(K+WPjY4KG,?o%K' );

// =============================================================================
// Bootstrap WordPress
// =============================================================================
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );
}
require_once( ABSPATH . 'wp-settings.php' );
