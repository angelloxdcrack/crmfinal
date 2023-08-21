<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'crmdemo' );

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
define( 'AUTH_KEY',         'e<IEugEUt(^BG=27{Abz*`D]_~p`RA>T?R.?1)!rvM0U@TV.spJfGw@BSS7A<?tL' );
define( 'SECURE_AUTH_KEY',  '9?fU3YleS@xtu<p>wX/VN2vT#O?kB1EO9Sd2|uRHnZNE;kw6qZ@,S2vleOjph!!Y' );
define( 'LOGGED_IN_KEY',    'u`z~Iwm?l)fi}v$9lQLFTkpz#vWTtlvC(MUx 2l$fX`@p4o-{X_e|ld* bf.6YmQ' );
define( 'NONCE_KEY',        'Zfr.2Oz|>_tJOvwR%s{ l%UrFiw3s~0hIy<>Ger 31.QiaOd!odgKX3<L!j([%3v' );
define( 'AUTH_SALT',        '4V*UZu,CSaaM3c#<nV(tnOE~sq6nX@5[.f-IJz})!lAnLqwqAg$B 1$ag4di0F<K' );
define( 'SECURE_AUTH_SALT', 'M0vM[hXSi`2HQ7~t|6mXL;*+7XKL/;zc1@G6wUe#ji=p#|]j4CUzD#8m9/:PnY?Z' );
define( 'LOGGED_IN_SALT',   '5m!$rTZp+(QYvYVEv7!,iY#^6t-e0[:fS,2G(wOVyBof:( X`=LzsdAeT=#3UB=*' );
define( 'NONCE_SALT',       'V`L/;1k[Kmi,xr=PC#R^6Ar_bt.DCoXf%/ E&cy|uj{9n{67whCZoDA7$jf.pmDq' );

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
