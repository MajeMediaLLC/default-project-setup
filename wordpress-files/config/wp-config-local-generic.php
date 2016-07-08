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
define( 'FORCE_SSL_ADMIN', FALSE );
define( 'FORCE_SSL_LOGIN', FALSE );
define( 'DISALLOW_FILE_EDIT', FALSE );
define( 'DISALLOW_FILE_MODS', FALSE );

// =============================================================================
// This section stays static
// =============================================================================


// =============================================================================
// REDO THESE EVERYTIME
// =============================================================================
// TODO: Per Install: Redo these here: https://api.wordpress.org/secret-key/1.1/salt/
