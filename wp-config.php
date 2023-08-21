<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'crmview' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nAz&-O;s_r+;:{e,/j|?nKlRU[jNty0_4f!B$#@Abmo7?%0i.][X(Pv~7.y;00dm' );
define( 'SECURE_AUTH_KEY',  ',@@PR*7Ob(6SI{Ue73:A?0F#]I1_hL+z~hi^$_1n{3qU]c@sz)r(VcW=aZ3).Oj]' );
define( 'LOGGED_IN_KEY',    '2BS5Zdp3hkmDat6`7:akIwy,w+)Go+TujW#C-c3[4F1(<|7V?f8XDK[TYxJSF#z-' );
define( 'NONCE_KEY',        'D&Fm9k5(2Z+7QZj v:7uVc`@WKA HWU+=rJ+<<G&N`adl&u&ely3<A|prT(H<Y*w' );
define( 'AUTH_SALT',        '_?Mu8eH[RLaNekNQltE0rCR2?Cs-QMac@G.}s#tX[}PG$yRPh+L)-)=gAwl-< C@' );
define( 'SECURE_AUTH_SALT', 'aE#|QemkcaP1%&xvlWbGZpem^K 1|#WGk&FN1w*b .M!(+,*.V{RcJuBwgi0~^H5' );
define( 'LOGGED_IN_SALT',   ':tOP?8mq@)8>$zSq^h)7cp3G[L2x5{e&I[VA`h.Y+bZD.dWui9uI>/G_Lz6l:e50' );
define( 'NONCE_SALT',       '7%n.<q_^Yf9@i&LQtEAi.i|r_bb=!Kn~sdu`hi;3+T1j_l*>Yg$+G)f@-//HtH?A' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
