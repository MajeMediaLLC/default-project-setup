<?php
// No slash after
define( 'WP_HOME', '' );
// requires slash in front.
define( 'WP_SITEURL', WP_HOME . '/wordpress' );

define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', '' );

define( 'WP_CACHE', FALSE ); //Added by WP-Cache Manager

// =============================================================================
// Dev will always want debug on
// =============================================================================
define( 'WP_DEBUG', TRUE );
define( 'WP_DEBUG_LOG', TRUE );
define( 'WP_DEBUG_DISPLAY', FALSE );
define( 'FORCE_SSL_ADMIN', FALSE );
define( 'FORCE_SSL_LOGIN', FALSE );