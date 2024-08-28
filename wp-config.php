<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Hellourlabari' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'usbw' );

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
define( 'AUTH_KEY',         'etYO-+<`a<dpM FHkN2_8_I[+q(3j)$u4Ws/bhlirDCp6]$x9mw21{{opgH%WKi1' );
define( 'SECURE_AUTH_KEY',  'marW],;7SST24#w(X~{;d|76%:?cVJ)i5Y*=lYnbe3M=7{c43 4?$xD=Q[xU/N4+' );
define( 'LOGGED_IN_KEY',    'oo =?/fy75p.yAi]jLP,r58TlnpISJ9yj<+~|na9]lR.sFU5$h.mX(C9gA>O|+{d' );
define( 'NONCE_KEY',        'O0+GyQ^h&:hCZC}o1ji_&&2)]-7V]<n!~8A:LHQ0A[b1m6~(g-y!sa}B9p1 ,fcG' );
define( 'AUTH_SALT',        '[j4)LN5&?@:*[;oxF:=rx](}j!Y:;^=.N`=8r1y1ntz23)dukErvse!KN:g`ks6z' );
define( 'SECURE_AUTH_SALT', '|H){zn,U/Em5{~vA{%@#O`h_{;hZ,JKD<.rug=H<@8xIe$^ze; 2DIEr}tC0H^<=' );
define( 'LOGGED_IN_SALT',   '+mRq*YO?=3xB<j?`Z9Rjf/~Ezhv*icL5gFsfhiJ!f_tJ<Vv4YOmWpP*=G%btk)4Y' );
define( 'NONCE_SALT',       'E4C{cJNTCyVTQU(XMmI[Iwi%XhBNX(QRV_.G.nBgkTpvg8:Ub1q70DNy]wA3~QeS' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
