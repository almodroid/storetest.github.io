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
define('DB_NAME', 'almo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'L#YkXO(B7jmX7YdHNpw5X5j3-@y=`/^k!:Z(]2vX`D1|};/0=?2UWBxU2{BK=!|K');
define('SECURE_AUTH_KEY',  'e2Y:k8L`FbPyB*/!TM>XrgcBX}io2YzjG9o[aA}fG>6jJ>5Zva>MKU}~l(]/Qa{`');
define('LOGGED_IN_KEY',    '9r,U f32qc,]2CpAmRl|KH$,wv-0_DTVuy*+Y%s-Z[+;^258{X?hN(EyUe ucf]r');
define('NONCE_KEY',        'ao*}c?JDetyl;/P+%;JD#o$SCv(B#mj2m&Dz h&8BDoar{tSR[r}Hf3h$!DW1:DH');
define('AUTH_SALT',        'mb!A@hh9lbIC-zLon2 L_B0nH=G3xuqYnxgAc)|y]@6Df)|n<:+[K7-l]QzPI33=');
define('SECURE_AUTH_SALT', 'HL3c|?$qqm{m<^^T#rQ@;a6iy%PRh][$4+iuc7ew+UIgK;2RmAB:v1*id1dSA/,D');
define('LOGGED_IN_SALT',   'cT1-mw,QWMMaPLldzESR)wORlq&Avi)G1LU(8<T+Q|.1MhON*op>nnTSC%y1)>e6');
define('NONCE_SALT',       'Aoqt(NL@Jxu* g[GqDO0.bQ/5]mrb(2@c8IUH*5eX2FY@_F)c4~>E%8Z%lMTb9v=');

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
