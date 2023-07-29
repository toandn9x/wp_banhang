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
define( 'DB_NAME', 'wp_banhang' );

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
define( 'AUTH_KEY',         'kd<ZexBtk&VAr+<)W<*gEu$oO82awfq&=7<>vRTy6.Fw#gOv88JZ],{MY7cD[UyS' );
define( 'SECURE_AUTH_KEY',  '5E:u{@sR(kPVPhn$)E.[q46!<fJ8NqHC#f$m1cm!^7=}3{rQ6GDrM7/<oz9t~:YN' );
define( 'LOGGED_IN_KEY',    'f! ;GRC[d,trv><[Cc{ZcJ,gq?&q}igr8RUt>1A@!g/esEd!/]r/lM.Y,$-&Q_w]' );
define( 'NONCE_KEY',        'SH6q z95:$%fBPeKItn%Z.sZx[{+)jDn_xG&{qdp/bisBqXZ&i5#@*]A@`!^{{ka' );
define( 'AUTH_SALT',        'fAF>_!+[X,uKZrtbE.l)[wg7<`3gx>sh7<F-emiqk C%DqHv)!5&S]zlxRmMri^d' );
define( 'SECURE_AUTH_SALT', 'OEX|eh#eR:MqI K{CK4;4q&2dE!u08]:tWH[aHaR[+oteD@5k[Q+zCuAq.2n$qA^' );
define( 'LOGGED_IN_SALT',   '5SqtJ=8i%e|n~NM^#+;O8p:$mRK^cK.F3e77I!-FX!B*={>60.)/}*gXziW jlBA' );
define( 'NONCE_SALT',       'YU4qTe#NSJVRbHjH7j;}u6[cNC5tmBw;KmrM7<+m#h1*pq{+P[<dm9H,@w`~`LP~' );

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
