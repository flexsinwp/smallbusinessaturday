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
define('DB_NAME', 'sbd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'a');

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
define('AUTH_KEY',         'U#z^c`81ky.eo?0E+ee7l%-CLA;&4YI;Yr:~F_PwnJ+U7Zj=X&vT1?T{nU&G>iRI');
define('SECURE_AUTH_KEY',  'KND[/v?dOzz&5+7c>b7;oNxs$-9Q!*yuydLM5&WRhIp7&O{(XG}<CN*|#/tI$5 s');
define('LOGGED_IN_KEY',    'mi,{|u2$[+E9 &1 }5+[530H*saE-_TYdQ.f| %%!u2)*/`+wap~zZ6d4T.RE;+Y');
define('NONCE_KEY',        'stP,t+P$}}!/;i#siPX02lo-V>EAMzFh8wCWMz/o[pwD4r`}8<N*@tfhUJ IMr;c');
define('AUTH_SALT',        ')|y=vZIKX*TD?d.:Kk~)T%I(neb#`bd#RdbB4)3u4Hi?H%1.d~@f{:|HB#jT/mIC');
define('SECURE_AUTH_SALT', '=+ >y<FH(}zPZeh+7QMo{2K.H (P`Qe~`$FO<jIsFN$eTD1o{uy2_@|i^8](&Mxi');
define('LOGGED_IN_SALT',   '-D}}>n9]2|RJ#LcG^:%D)]`X$zFFQ$8q~j-K*8e66W+[U{QuqC &.M*BW7MLWXt#');
define('NONCE_SALT',       '^$,a#P#dr)`)H83)$5s+>50}/51%.]vpv{8+wA/PLY$} gcvge.v52g#t/Z+e{hq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sbi_';

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
