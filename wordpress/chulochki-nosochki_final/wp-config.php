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
define('DB_NAME', 'chulochki');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '666999');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LFQ?o3Uo;]B@PcSU3lC$*PO-e48d-)BUsr+5Ke*W!5Yxqu,J?*>?,$~F9guy,gQQ');
define('SECURE_AUTH_KEY',  '<f<&aDmFI*A$QfvuS>ZO,}0pPb.+&3A0G+3AznY:of+]UIO178;+3ld51a1*cbE]');
define('LOGGED_IN_KEY',    '@u5s<-hj@Ipg|~~5:7?d-usr]I>>fw$rIe-22`{Z0z+@lI+<}FZ.>*C=-?s1^+,A');
define('NONCE_KEY',        'ZUk8*YXqQtEpv2b3:Yh/-1R5V[&GIiO,yl$UCzN^]$uN}bz(O-JCaM!ieEc|)eIG');
define('AUTH_SALT',        '=SWax|6>-{9O2cCWi@mDIY2&.5A[Ru[xS;AnB;6I+wa75gdxRaYxQ!^X4F-cRl^:');
define('SECURE_AUTH_SALT', '?fX9;OP&#D;:%}ap<Y+=V{7^4at7d*}L9<f-Sh~HC`R2tq{wDF[8~A6^baq0DPeI');
define('LOGGED_IN_SALT',   '+68)dN??CfF)~d%y76U|+0@OX[lj;-+#b1ng>ODUz`zi$OH8cc&)@F0z^~-r^eq@');
define('NONCE_SALT',       '|We<q:Pu`}b6qH?Jw*--5!`rSOmM{z?^-7`kr PH*GI9)/ZR4+fVke@fT->lB-OE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
