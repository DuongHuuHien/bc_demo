<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'E:\xampp\htdocs\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'demoshop');

/** MySQL database username */
define('DB_USER', 'root');
define('WPLANG', 'vi_VN');
/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WPLANG', 'vi');

define( 'WP_MEMORY_LIMIT', '64M' );

define( 'WP_MEMORY_LIMIT', '96M' );

define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w0bwk]vVRb((k9ED}mQ6rv`~KN7R7liHk]p8]r`o{@$S/5k(gB:wEyoG)l|}]#4b');
define('SECURE_AUTH_KEY',  'kr4=R]Nf91(%@%0[Hkd><>t/;?Gq}ENzI0|^(bYX5>&6 &Qs#BH+/SOa~DboH!VO');
define('LOGGED_IN_KEY',    ':}GO1(x[]Bs,F]v|VPLP0=,Qwf>swnlY}-*NqF9^7IC%3V(OZ8AY1r_/DLboxD]W');
define('NONCE_KEY',        'hE7/Jrx)4k&Ys&bBy1~&nme=SqkD.:@94%RI64gMW?a-5(6 a_962wTJ+h~+0o&D');
define('AUTH_SALT',        'a&uYb2t+7u;q*?$}sAk7GCyD1yFV85{8na9AtK>BIb5UF~{HlAU(3YJ}%6?0_|rO');
define('SECURE_AUTH_SALT', '3fp>OsgKL4,Flq@p<j|$b6!gcJScc4%SyrPS!KMzqRL-09_(H[MUoz<}8xyIP=l3');
define('LOGGED_IN_SALT',   'bQM*f4X@5A.5iV{_Gl-QszUIbD!jNeAn!vel@KCAb.boy+@W/E]Vz%Uw_d[G4H<X');
define('NONCE_SALT',       'lKe:6Lhq,@F#,JDaX#)$+8[w;;D5q!.&/+F0e!s{t/$6A4Xe^bIL4^/o%-&ds$3>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shop_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

