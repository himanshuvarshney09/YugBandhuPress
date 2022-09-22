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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'f[iI>!UU0l$n*P[9pX.^-o2Va^9n8?R*:cX,uGg<-8TU^<*lY>auvu25KbeGLH,9' );
define( 'SECURE_AUTH_KEY',  'WYz4M>=GQBue)(@kueeYc!opk`._|GkM}2~C,jjJ6_g&jr^=4Mokl0QB9QkDIELN' );
define( 'LOGGED_IN_KEY',    'k4-PO:6dY(4*bSOr 5*_yHEr:2^3!$N!RH`z[7tXN<EkNhP,4QI1.RA(Q!gN5iX#' );
define( 'NONCE_KEY',        ']-f]1:so>1Z0*}M%Sp0Mv1QbR)1RvqFI}<.*!W|chf)7p)AaX&3uE$_a0c3!%y`5' );
define( 'AUTH_SALT',        'P?V22J<kn!#9-s@dYL.qE3O&JPHpyS{zm$Zc%N;?]Q`1$#]5iW6_@d^{6A?$y0eq' );
define( 'SECURE_AUTH_SALT', 'U`U8nwKu0O}L!V5e~)5dysKPjq-$jxt7/$aUZ4=g#esGeXn;T%XBdthi:BJp<1(k' );
define( 'LOGGED_IN_SALT',   '2**Y?GD2>{c<qE0]X1S!-WT(|CEJ)wi6w/YCL4UlW&ftt~u7$mI-IQ#a%>ZaSzxe' );
define( 'NONCE_SALT',       'VleY7)>;)S<Y1yr^eCI4-WS1ZQ]$;g}U@~ Yb`Deg_L)`t2nqlH?rA._xo;G7;b.' );

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
