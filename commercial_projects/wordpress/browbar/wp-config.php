<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'browbar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '666999' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g{{{j0yj@G|GK@#L]kqN=r3{AVF+#LuQ$z;K_M^WC@KcQXxSbRiw6R,Mje,2@+~?');
define('SECURE_AUTH_KEY',  'hRj/LuJ#sG+KMc_%khA3G8H-rBT`BK7qUA{o[!07R:LnPa~+L$7_E}Rq:aR8FA4m');
define('LOGGED_IN_KEY',    ',}_-+M9m~r<%Ly+pEnc7=Uux~KKQPUgZY~qfwDjBfU2J2:*e39|F[VvK1`if:8<M');
define('NONCE_KEY',        '_cFoyR_6m*swE2, +{bF|EWo5pDR./>!r+I[Q:D>H+=aFGgm-f([XOU:Qt17-Jh8');
define('AUTH_SALT',        '#,lS]XeeSNkAok{YgR[-c>4v@3Vj41;>+dVI7weO|dTJz]_m9pt=Q/~ kGyM+w6_');
define('SECURE_AUTH_SALT', '-;$#7jH?H&*x|:|{8-jyrTA AR4w,l#`SxNhGVe]-9jLyX;xk%-3YyaCQYZh$lLK');
define('LOGGED_IN_SALT',   '?U?p`#9!1k,>47-SvlSXtpH^|fIdxS@)X3g9<p[{.,ay&fQZ(v2V=_-hh}D/c*]s');
define('NONCE_SALT',       'BYA$ +##d sAnn+8_/=ZeRE!dy}KJT$-$3oU]cD[!W{V<-$8>!LLHHUfilIKs|8I');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
