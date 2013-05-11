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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '*+8YY9SggczF<lGEvXdR<ZS}LQ{O_S)I* AR(0e-)a9.&A=5w>U*k^eR&Y`1ZcbY');
define('SECURE_AUTH_KEY',  'wZI2*^sZ!rYcnd+qvsx*]3||l*.-0IlEs/UI+d+)V2OL;-{-SehfV$-GF>=b6;yU');
define('LOGGED_IN_KEY',    '^L$l=T/Z8Ml.)*( k47W2K4aOWBBgO|kkcB@sCdq7F%hf@-]C3|Y-w]kNoD062`G');
define('NONCE_KEY',        '.KUF!@J&v(eQQP1j+Dd3T26ludjlg2-%@6n>x3+A>z>L>4!osZWtu>]X=F@_kv4C');
define('AUTH_SALT',        'F/3+c-cArBg&:JumOKmKz+[NOv;cZZ/xcm[gzRc^UqO@51?;NGE:`-RTv?tzJ!rc');
define('SECURE_AUTH_SALT', 'iSSo[C;AX-(!gDTBwYH_5z+db6b5d+!7*I,ZEAb0n^`<_#c|}2XtvQwZ|Q$:[?nc');
define('LOGGED_IN_SALT',   'cr:il?a{x`S[f)~M%^6Hgwq9bM-fSP+%}|uR-Vv=:H[rr9q=JTbTZ4_g*_ZJ#k;+');
define('NONCE_SALT',       'GZ4kGEnQf4`Z?g[ihX%D+sx*5O|nO;md:b] *Q<$9/+*Akv0`.<8#sGQQ<|8$UZ}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'androidschool_wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
