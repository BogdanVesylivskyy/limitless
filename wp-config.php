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
define('DB_NAME', 'bogdan_vesylivsk_limitless');

/** MySQL database username */
define('DB_USER', 'bogdan_vesylivsk');

/** MySQL database password */
define('DB_PASSWORD', 'Mqj5NH"2c-B8r@cZ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '$jT@Gk$2H=(D3S<3?BF%`-juHB{?k2-HzAlwY13^+iF?q^}t7Fh{.naQDm~>k!84');
define('SECURE_AUTH_KEY',  '.ZAA)fd]A ]Jq (*4^h]IvGN$3wsKyO:?>Xfr4<irQvuZ2B(oG;esxKb%`}uHPR#');
define('LOGGED_IN_KEY',    '|Hb2JiPwR0fLILh W]PJ@`LV-5vi+%+|AG%gB):ono&Ul:W#v8>T>LE1PZhNzT+)');
define('NONCE_KEY',        'j5u$B<)JZ% OF}&wv.u0V_S>a{k>-juvg1>wE{?TWdL[K7=XAFkPV,<$#P9-C+Zr');
define('AUTH_SALT',        '0mrCO7L$bDu3s5eVSE:$yi,]|N^~>mB+%,b^s[^S2Z*=(Rj-^o`$K@II+=VLIOs/');
define('SECURE_AUTH_SALT', 'R?_cWPnI^d(az`%V!/m*.OB^#D57YVnoR.AFn%&{_8wQ$khYf|FR4.2Ggn.}L,R,');
define('LOGGED_IN_SALT',   '|M`qV7W9wfiNGo{-i?`DiIZ,%U<#i9ya~3.5WJn@{}B/u.4NF|3.U;{3^:L0lU<J');
define('NONCE_SALT',       'a!c5Vs3O/2a8Bk%v~]9)b],-B4{$@ [b.F *Tufqaheh(nRt,d>FxmBvCpu]E|6>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'coffee_';

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
