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
define('DB_NAME', 'grodfoodspicy');

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
define('AUTH_KEY',         'e_F}$?f9AkZbgwzB+te+H-I#M{4QI(HEx5F{eC+2|MjN go{6aU3m4)O9wj,*Rnt');
define('SECURE_AUTH_KEY',  's/v96rXDQ-8?`jt|]_XJ9i~She{s[W}3zSXp=50MXbj6ySA5-oXyv#+u#^0)JX+C');
define('LOGGED_IN_KEY',    '+pyqaeLX3tN+O:#cbq<S5Nd3~Rr+i)`[n^Dl7!]Yl=2k+)fx+Lv/71+j4mDu0,I(');
define('NONCE_KEY',        'q)d+>LS}-(WV+7VpDkv}@Otaxu8HU:wN|?e732H A?W,yZ6Q!?y5tzo;u;]y/dA8');
define('AUTH_SALT',        'r9+u:f|}#:+9n|(oqV4H.6VWwu(qu<-PESnUG0-1|%0r=_Tnj1`u.>z,%eB{GIQs');
define('SECURE_AUTH_SALT', 'J>G%0xsYSM-PiDWs22FjonR)~/pi3D[ogg?+a9+2m+]3Vr>CUTsQ^>U-0rZRlG.Q');
define('LOGGED_IN_SALT',   ';9@iy|X(dhJDMh7aI06w(~!zD^.Dj7hnyE{lBj6kUfWI+@e;ymt2S{#[Tyr~_iN`');
define('NONCE_SALT',       '*yXS|6k.Kh(S3tVYZNXpOUQe+H,Y@a#v^-V2 Oq/!qy?p>d~w8 B8IRnRa4|.,mk');

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
