<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'grodfood');

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
define('AUTH_KEY',         'f3+dTpl)8kOh*q(]zy[Y&#||-WUP:^}#`SGChZ<4G)1=Jh?.22DDT{Uo8-jG|+P.');
define('SECURE_AUTH_KEY',  'Kb}h$KUKhAIyibO-s4,)^SQ)-T5&TfM+Kwi/7>LZZ~zIr]Z$+[em;3!0_BP2-EOF');
define('LOGGED_IN_KEY',    'ne{X3%o#D%M5U}RYFU3Gya#G`<L+8*%+wG., EI5LrIa_s@)4!B}|4Dv;z>zc]v,');
define('NONCE_KEY',        '~JK)qZ|,5<,x}Cg2:-<FF4k++qf0%:4L(m`_+ +j/ju49Yh1R@+Yo_QQ)ce|Ce+L');
define('AUTH_SALT',        '[}<LZOZ.gCe]/9_R+zI,BFbojB5VvK7SQS( EhCd4l?p6e=HJ^5) 11yv4:C<Pyb');
define('SECURE_AUTH_SALT', 'ryJ3^0-N&k.%e&Zj@l.K%*INj2eW)mIp+2l-G@J%;q+Ju+=OH>=xvo(n`zB3|l4e');
define('LOGGED_IN_SALT',   '<Uwr=2geq5UWsVGo[R AX|wGf#}pbSHtm#|l%zA+C8{EwsRua@C${fhn/+X%<{}]');
define('NONCE_SALT',       'Fm?nz`49Yv4@$+5@WG@CZ/mWB-D>5t<6 HDG<t7]+iQzol{G+qIho]mF&NhvXF[<');

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
