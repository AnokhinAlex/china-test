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
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wpmGrjAvm2wH');

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
define('AUTH_KEY',         'd;nu&c+7uKK`Y3k?YcpP=L;+5|R?nX%LaVGeXb+aO_F4dP_^a5[h5 F.7FhuY1TU');
define('SECURE_AUTH_KEY',  ',I|fwRu2mA&W3HIlML)XrgfqujE[F?>PovB[?,i#x@0/*ugxcBM,H+ObUQD!uayQ');
define('LOGGED_IN_KEY',    '~UfTt(Yv$N1Sga9qSX*t^DXn_nN`e_zHUas`M,2j{TIAlWY.a#Wu=]GmrknEcGIx');
define('NONCE_KEY',        ')5^z=p22MH9`N{4GK>.B9)g5Sqp)%BAToL7jlXmU8w<~uIQN>wA]YBhSPjp#4l.{');
define('AUTH_SALT',        'Qxc ?1,Mm65Fbrm;A-ogJD)77RuSSAtt-=%W,cRF4j?$c:4,52{R&k7p^YO-uVE@');
define('SECURE_AUTH_SALT', 'dZkL D?t-Q9?$!nBsE#mENZ1%b:v+8Ce`hL(k&ueH6`/~/nG^u7)BE|-vCEdv.PJ');
define('LOGGED_IN_SALT',   ')p(E14=]V0jsay[CONm<Bp02O;_hCE~@`2wMw%S-NYJ}jweQ3^=|REN;W@/1f-_@');
define('NONCE_SALT',       '3+^y%=n)%D?[GN}]FBYHs{e<E%ZY -pz+Y9Zz^ -}AaeQW==#[~$UEQ;71?jTc:I');

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
