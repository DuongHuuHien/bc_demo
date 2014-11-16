<?php
/** 
 * The base configurations of bbPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys and bbPress Language. You can get the MySQL settings from your
 * web host.
 *
 * This file is used by the installer during installation.
 *
 * @package bbPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for bbPress */
define( 'BBDB_NAME', 'demoshop' );

/** MySQL database username */
define( 'BBDB_USER', 'root' );

/** MySQL database password */
define( 'BBDB_PASSWORD', '' );

/** MySQL hostname */
define( 'BBDB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'BBDB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'BBDB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/bbpress/ WordPress.org secret-key service}
 *
 * @since 1.0
 */
define( 'BB_AUTH_KEY', 'w0bwk]vVRb((k9ED}mQ6rv`~KN7R7liHk]p8]r`o{@$S/5k(gB:wEyoG)l|}]#4b' );
define( 'BB_SECURE_AUTH_KEY', 'kr4=R]Nf91(%@%0[Hkd><>t/;?Gq}ENzI0|^(bYX5>&6 &Qs#BH+/SOa~DboH!VO' );
define( 'BB_LOGGED_IN_KEY', ':}GO1(x[]Bs,F]v|VPLP0=,Qwf>swnlY}-*NqF9^7IC%3V(OZ8AY1r_/DLboxD]W' );
define( 'BB_NONCE_KEY', 'hE7/Jrx)4k&Ys&bBy1~&nme=SqkD.:@94%RI64gMW?a-5(6 a_962wTJ+h~+0o&D' );
/**#@-*/

/**
 * bbPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$bb_table_prefix = 'shop_bb_';

/**
 * bbPress Localized Language, defaults to English.
 *
 * Change this to localize bbPress. A corresponding MO file for the chosen
 * language must be installed to a directory called "my-languages" in the root
 * directory of bbPress. For example, install de.mo to "my-languages" and set
 * BB_LANG to 'de' to enable German language support.
 */
define( 'BB_LANG', 'en_US' );
$bb->custom_user_table = 'shop_users';
$bb->custom_user_meta_table = 'shop_usermeta';

$bb->uri = 'http://localhost/demoshop/wp-content/plugins/buddypress//bp-forums/bbpress/';
$bb->name = 'TÊN SHOP ĐẶT Ở ĐÂY Forums';

define('BB_AUTH_SALT', 'a&uYb2t+7u;q*?$}sAk7GCyD1yFV85{8na9AtK>BIb5UF~{HlAU(3YJ}%6?0_|rO');
define('BB_LOGGED_IN_SALT', 'bQM*f4X@5A.5iV{_Gl-QszUIbD!jNeAn!vel@KCAb.boy+@W/E]Vz%Uw_d[G4H<X');
define('BB_SECURE_AUTH_SALT', '3fp>OsgKL4,Flq@p<j|$b6!gcJScc4%SyrPS!KMzqRL-09_(H[MUoz<}8xyIP=l3');

define('WP_AUTH_COOKIE_VERSION', 2);

?>