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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'valenia' );

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
define( 'AUTH_KEY',         '!&iq<`S|UFbP@:YA&;NsO|Z5<OmevY8O~vso^7$/Jo#pRntDdpJ7YViqehwm5ZX!' );
define( 'SECURE_AUTH_KEY',  '9[GxN8%!{+ajpBo*m~bE;C2=P^<|zcaduKDYnS)`zJ9sHjRf.V;+APr8c44,M!WO' );
define( 'LOGGED_IN_KEY',    'zZY?3EqD]oOZ03g(;SU?+H!l1>Huz~i:gJk-@[DK$LEV7q;4D(*_f%M+kv-3RP~K' );
define( 'NONCE_KEY',        'u.htq5YabzWR<D`Q@1Giz>K/9r7Q|7-6piuJHeRMU8 81G1=YY#N2UFcxqK*cI+f' );
define( 'AUTH_SALT',        'g8L;cv4OY+}*/Zq!m=uP~l^wJ3^cWCS#U:!^LcP`+`S<?.~JI)i.0NF)5o52PEU1' );
define( 'SECURE_AUTH_SALT', 'F^*b5S8=pGl&*y,;D1&&dKZeEDH](nMut[&#_ROo]ZNfP2YsNW<ec:ESUG2#=?5Q' );
define( 'LOGGED_IN_SALT',   '`;M-!,|Rq^m(25os.>3rxN[?d-&Zn.gCDA&It<xdQ~w^9+e#!NVJ=k$o]I{;:P| ' );
define( 'NONCE_SALT',       'hm[c|xkM_Zk+fCA(8XyC20rqH(=vkGY`R{%9rkn*wu|[Y*GTZ%m(Bc1ctfy^]{e:' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
