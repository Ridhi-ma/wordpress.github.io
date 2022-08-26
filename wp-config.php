<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'animalclone' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '(WkxUW^[E_<0%%/:(?9D/kA8M-<F~!n&T|,0foZW6hL/rV5GgBh.p]F4[[)n1|Ni' );
define( 'SECURE_AUTH_KEY',  'Cgg/]6-(FCW,8]$Q1>?54bMMfN>_W1YQY!Uslk*OCZS]<9q3}uf`*(fS=+w;:MPz' );
define( 'LOGGED_IN_KEY',    'WgoP6 _f|vEaH%hG:S=?Q]!.:j?VZsY}9)L@X8/mznD7k(/WRpxwC=D;ZT{3x%_{' );
define( 'NONCE_KEY',        '#WCJ?#Hx jtP$<-N,bhF8ZoUP}QV=ywP5RQLo~N_TSenI181=Bfars`ae.1yIsff' );
define( 'AUTH_SALT',        'b6/y 2T)b7#nZx1K7T#}U<75.PiMklGvW7UAuq2mjgSt}a.1r]Ej<P56K<^Kx[Dk' );
define( 'SECURE_AUTH_SALT', 'z@!Q)*+e+k85x8~%+Rf!F{qF}%phz^j;dwDU-DDm4b0HdW1tBvFYa6W,;@-_@[Wq' );
define( 'LOGGED_IN_SALT',   ',W7~Ggg)`|,2mcVx?wteaWS:^/_*;|G$C=KN7fB8j-s^&ao3s1irRXh~%(c;+bID' );
define( 'NONCE_SALT',       'BTjp`$WTb).qGBZ<*WOKdrDW}NG{K|^Q+1)rtKnc<.P@[l+?O#LEBo5rc9zu-=^n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
