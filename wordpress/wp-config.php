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
define( 'DB_NAME', 'abc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ve_2,(0a?bHa G!TYijZzA(6:U>rp_/cG*{n4((%_+q<tkO.C*H!9 /_t,OvWb<I' );
define( 'SECURE_AUTH_KEY',  'US)],7`a*_KQ!kOLb?Kp~sC-v?ciI)VQ$SaI=@~_yJ4<I#)+`hX6xa^UNfL[g/uT' );
define( 'LOGGED_IN_KEY',    'E`+]oj3svT*SSHt8UnxZX]M!^_qf0-bYy}WD^B5C0V^&ez;;JXg]b33j!oGoC$Gg' );
define( 'NONCE_KEY',        '.IN[Lbq pe7XH%ZO?$X{S,dyTM#Ol~S6FEP-FW2joE+vw[U>vZ&(g*Dqdu6!$mkH' );
define( 'AUTH_SALT',        '%;{uI,TtRRZ>u}89;{N!Z47UW`]|^/Y`6cd+)#&wN*W^8H]8XbyEFta(W!kv8@x>' );
define( 'SECURE_AUTH_SALT', 'FAii5Ca/2^sF%e8~J^;p_M@3#!]r/`#$PwU1V>:0N7_Zp}&^u&4Q}/ury;W+~OJP' );
define( 'LOGGED_IN_SALT',   'BV`Dm|;Z0v+*vPN({n!-U}ka%W5X5B@9NZ5U8a3s]phJ!{TU43JmtD]m~|YKP9[|' );
define( 'NONCE_SALT',       'K ~*eGFrZTbO%{XA~bCgRO|TetOsnG[^42[UqJ`f<7CW&PW3jLPOiOMbAv]<E0=b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
