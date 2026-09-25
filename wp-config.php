<?php
define( 'WP_CACHE', true );
 // Added by AirLift
 // Added by AirLift
 // Added by AirLift


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u434629889_c7DlF' );

/** Database username */
define( 'DB_USER', 'u434629889_oIIts' );

/** Database password */
define( 'DB_PASSWORD', 'PQeUoIKAbG' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'O]t4F`!U:3$i=/uOJ05y5R%gVXp`nPmoBc-l(%!%$SWQjEKcV_K6=yFacld.^K?(' );
define( 'SECURE_AUTH_KEY',   'C>ySfQwuc;N]X|!mk94^lxuMqi5Ysg3>XA^?I]$(+<i4qCcZ:j^8quSDLOM_.gGP' );
define( 'LOGGED_IN_KEY',     '08rYI4qJJ/4>;M`1lt|sU9O644&X>sI3*^D{1cI&9IjYmP0I949J{<DPbv,/L.9l' );
define( 'NONCE_KEY',         'y,`,7=^#HS{X(j|mORpmn J8Q+?WgoL&2Kf.Zz$RhnQ|3m]YcFIEMtrdZquqxB/c' );
define( 'AUTH_SALT',         'KGN@z2vGO!xW>u2B%}y3uY2*?B>gr>v>^x6;W2BV6{#qPBa{GBvR&.3,i.vT$UG_' );
define( 'SECURE_AUTH_SALT',  '?[5CJwL<rygDo7+N8c1od]X49jEg60%+yk,6MaO[11m4HZhDu$z~riQ[kE#qA,05' );
define( 'LOGGED_IN_SALT',    '?A&:Qn6?Ow2mkQs<1n{4Q2@j`{9nKrLiZ?#(_=m(gR {(G68_(~4#u;WT0z[]mM]' );
define( 'NONCE_SALT',        'QCgPTHKR5?4I&gO]af}8mMt!%Fx -R2:hH)O.f]VD0$P4i,(,4(z}4/W5f+Rkfu@' );
define( 'WP_CACHE_KEY_SALT', '5K|mZ/&l}Vh]v~>wfEIV5/IBZxpU,u*uWTz2YqZEz5 Pd;}R8[?/bR(fogfW<Iy5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */


if ( ! defined( 'WP_MEMORY_LIMIT' ) ) {
    define( 'WP_MEMORY_LIMIT', '512M' );
    define( 'WP_MAX_MEMORY_LIMIT', '512M' );
}

 /*
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}
*/

define( 'WP_POST_REVISIONS', 3 );

/* Debug: normal halat mein OFF rakhein.
   Kabhi error dhoondna ho to sirf WP_DEBUG ko true karein;
   log public_html se BAHAR save hoga, koi browser se nahi dekh sakega. */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', __DIR__ . '/../wp-debug.log' );
define( 'WP_DEBUG_DISPLAY', false );

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/* WP-Cron visitors ke zariye nahi, server ke cron job se chalega (Step 6) */
define( 'DISABLE_WP_CRON', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
