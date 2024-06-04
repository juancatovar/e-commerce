<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         '])LI$4kVtU,XnFnmQYb;ew6,([9<3q<G,3LczDMMI;T`]#lZvb(H2A,gaCse10[B' );
define( 'SECURE_AUTH_KEY',  'tRY!P4YhrSHgA..q[^7]cp ^MorB~k5%0t!^bBL5]+](:}k>{~(M}7+h<%memt 0' );
define( 'LOGGED_IN_KEY',    '50q@D,(WGgHD;an`>biz#syUP)zsfC>O}KV[L=b5OqhmEs;+{5~@{)}A1(7q`gf_' );
define( 'NONCE_KEY',        '[CKSNQ3SL7_r8pwI#D#~,bChQX4<t66=]&`L?03vtFf^zDKsq=Pmcr=>bTyG^^1f' );
define( 'AUTH_SALT',        'r}B[j 5j`d6l JL),kEN(l~{baV@A*.*GH$8XEG+<C={(Zpw=7`%LV*e3jMR?C7s' );
define( 'SECURE_AUTH_SALT', '/}HIN0XLVdumSk5y`o&dz(9a|i&Tx|Z]NR@nSW}0y=n=l:{}DPn2JYS$?>?%2Zqt' );
define( 'LOGGED_IN_SALT',   'dkg5Hz8/j(/:.:{C5K0=nhUi`hT.^_o#s4=<HCCUJ-W*W=+sJ36_b*mPC!gePe+x' );
define( 'NONCE_SALT',       'AH>?Valiv{w0?&pq~dQY23C>Ih_@mpN4# JdxF|[>ooxW%`Bi$kud&hpx3neYy3?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpec_';

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
