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
define( 'DB_NAME', 'WorpressDB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',         'B.5=L]]q5pfN>:b_-JOi$et|1]bh-u`*%4N=#N0I&vY2@%-)[DhV)eZ}IXl0P&,0' );
define( 'SECURE_AUTH_KEY',  'lzT[7&S;c$^r:D3q6bXD~SXA1H+D-xSQb*K.FJeL8M0y2ZV3ub6>H/@>T>t-;}Te' );
define( 'LOGGED_IN_KEY',    'eTw#MY8F|t*3:DX}lVnZy]is345UmN^z@A[f:_$JJFR>n6>GtsunVvprtK%+zV<f' );
define( 'NONCE_KEY',        '4-2UR}<(;6)/HqwFEys~W_j1~{Yf,c^)ld`(E.{+&[T$FQKv-eq9zL&g, 4CnkX4' );
define( 'AUTH_SALT',        '[ZZ>L]qK#h-nBmBrW?)N6H:nq;/kz-[?~}DGWisgNIKNzU{ILWV*)DMtzdGl]qQ%' );
define( 'SECURE_AUTH_SALT', 'GVv%&*>01+.b/Jj`rjf?-Xj2tXR1aJ(e/IU<3o+qZpM)rF@]kV3v6.nhHbG*TfR>' );
define( 'LOGGED_IN_SALT',   ',0Sh;4Ydpzp=f[~%K7#%PF|&B$huMqUZHWsSJDE5T|5JeF5:ZYvv!r9+]PRuc[f6' );
define( 'NONCE_SALT',       '`J^D<%.]U)82l&[Q%,Y% 1LrkiG4vaRdUaHq2s#ucGF>WxR^*E[cQo4&p,puc_:L' );

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
define( 'WP_DEBUG', true );
ini_set('display_errors', 1);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


