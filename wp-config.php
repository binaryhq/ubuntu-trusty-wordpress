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
define('DB_NAME', 'MYSQL_DBNAME');

/** MySQL database username */
define('DB_USER', 'MYSQL_USER');

/** MySQL database password */
define('DB_PASSWORD', 'MYSQL_PASS');

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
define('AUTH_KEY',         '|y8x^2ul<z0E.vzqo2i0vY8~qBIlxihi`KdF!xqHU]2gzRNE%w~$hKLegYfG-s*q');
define('SECURE_AUTH_KEY',  't6,C/I%QF,m}1^%7@F1i(cK`0I.t18e-N F5Vfq{tvhmItm-11oflu5ZDH[j|(i=');
define('LOGGED_IN_KEY',    '~6Ks`iqc}P9p0Fys<wR.hSp?r$eri:ly1+0e{or_ndzjNzv (7*Ey,_nlw|>U.O1');
define('NONCE_KEY',        '`&rpbdg7G5k/ZTZ#Tf96TZc;X0{-cJc~4X{|2)dL4$~yek[bML0Ozr?,nE}ca$B,');
define('AUTH_SALT',        '2T6x_I ]`e$oh.| |C<pUl4Ag2Xo#yAnEZ^~~G>NS-Ujx|bAlMXz4h 4E(q{/&2Y');
define('SECURE_AUTH_SALT', '%@1X}WL2pZ}?obz/!tR;;SZ%Rx0*{e3e{Qb*P;=cJk8miDk.%&RI.cOS}3%liQb.');
define('LOGGED_IN_SALT',   'BKh{=*G8Uh*( Z*)1 0t<@cy@tOWCVHxJuoLd%N8fjI:wdNIUtE=^qk~Ogi4[0?o');
define('NONCE_SALT',       '+k74MieAxrnO?`1v[9,|Xxg[L1]=!-SKqb5Er{A05qdKk*gS;WzO}BvX5*#l 5%t');

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

