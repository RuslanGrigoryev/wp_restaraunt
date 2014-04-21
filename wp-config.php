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
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'FAkKB61;]hE-&enh>Uo<#d}0p!+&3WHJ@.Ji(`/)a+r{-%*eV aE^#pFvIa.1iM-');
define('SECURE_AUTH_KEY',  '|bYdJ1|g;,W-@X0vO=`+^myMlrZ3s|}:2CP.Z}![[9];z$9|m?ZQg#8OscBN,rep');
define('LOGGED_IN_KEY',    '93k#H,FiV;,.*`  !=;h!gToYt^`VW=SL9K?UUL$i3x@Z)raAys$;C80Kz0!uH4j');
define('NONCE_KEY',        'yv? p}~bThdY5x^xi`xCNjv|1pETjs[h+A&J-OGBU/juSD&Pr2ISTgXC(G-ExZs;');
define('AUTH_SALT',        'TqLf(`*;|oL_9QkH-y-q?Kw 7@pXP-sjsV|5]>abE^Y.AmlJ+S|BWB?2l>er#Kzw');
define('SECURE_AUTH_SALT', '&.JsA$p6-wg9`3bACN=fj$[&&n.30&m,M~Lj-%%_0XlDMzD}w6|;,t&h*^F}<T%-');
define('LOGGED_IN_SALT',   '3&N@4xKzx;Yy_+`Pu>/Gd$4%Kn1}3IxD*U]$59Yz{l][7`nYCIv~eMNf5]<XxeM_');
define('NONCE_SALT',       '-o8Gwu|;~~T5%7?[nzh]%S-|qi(s?(p+sSGa.OBiofv|RxZt,zoW>J`~rXQ=5f1c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
