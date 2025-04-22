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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'b8t&siPIk))s2R+2OeLNW@w7k$m:W3_[?z$D dseq>-tZur^0b=-%,C6!)c8Uk*&' );
define( 'SECURE_AUTH_KEY',   'uIVHOKrvBYx Q>j:4?s*Zo0;4Qb.!glfG33Eugv~>SX*>+`X!a?FlK,=?i6%h5ID' );
define( 'LOGGED_IN_KEY',     'B`*L2KvY17io3o6[GW.c*P0p[rV:4!Z}./T+s&;z49{8H#8O7%F]iR$RFmhF)?]f' );
define( 'NONCE_KEY',         '[p(+!?DcBouG,3:=XHr^MYOVvB<Lqd=?3_w`bWh*8AdY%Rvu{41T#W&sYq]m1zdU' );
define( 'AUTH_SALT',         '?gJme`:V]u+XkGEtHBu+JU$P=40BMM}HEB@_sB)w sTU-nalFL1E>BVw81C-(b*}' );
define( 'SECURE_AUTH_SALT',  'Kq19E>2h:?R/am!g~<|0PGy<TFB8l6{Gdn=srvf2Gz`zy]^#WM<h=!=yUd1,b9Z ' );
define( 'LOGGED_IN_SALT',    'R#,BYhRW5q[(#T<8U5J1C.(Xzzg/1OB,b[9zuCk;+y9}}dd<C{WaIPUlIfu:?aJ9' );
define( 'NONCE_SALT',        '>!LVeXTw/jKi.J}w,z^kkLZ}FtEsHcM8n$6eB}Q)QYT1^T)ODJ$lSYcQfWA[A~je' );
define( 'WP_CACHE_KEY_SALT', '<mb:` 2YBPed.~E-e9zs,VfVf2yh,m*ZGkp0SQ!M9Nb5<f#P%WY6^pP+:9eBm]9F' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
