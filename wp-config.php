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
define( 'DB_NAME', 'raven-blog' );

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
define( 'AUTH_KEY',         ',aYtHlvs^I574UUu!wU)F4$:-JUVe1<OgqN{Q#_iNyFKiC[;{6Aio9MuKVMg.XYW' );
define( 'SECURE_AUTH_KEY',  '45Dz1^;/<TR})p30]?gw=(7EJvNu)0IU)h<lCi*iG!+EpFxA^b(64L<c$`T_vQ}M' );
define( 'LOGGED_IN_KEY',    'F]u fiic#BoIqFD^+)N/Os#?hbu5rQY[lX|Y?BRyM](hXgV#==N9X*q.=:_X&eLk' );
define( 'NONCE_KEY',        'ERiN4X|~Z/|*H>)3N`?8L.>bigawzAG*VVA.&H`Qvj2B-nj)sK g$fAA&be,>ZJ6' );
define( 'AUTH_SALT',        'GBV38r?]{Y-mi&bFX=`Y/k13ifuYSZ/!lv[{(CT8w;=k,a#1ERREz(7sV0S9dJkN' );
define( 'SECURE_AUTH_SALT', 'F>T.=T+40ZC3ba$t_B4M&CU>YNgp}sFcZUo^dT9Zf$8i}FbsF0TlBN1[eSPO+1>s' );
define( 'LOGGED_IN_SALT',   'v<2WZe7k4@[Do=Ez5ajXT[iMt{lvW,.DnPbDBJ^{)zSRceB$ $CZ.!NLMK(SLB]{' );
define( 'NONCE_SALT',       '-U&xm~nop=.rE8C^*kMa@DKCVk3g})&WuS/:y~w8|@]O8a2$sK.%8i+sPe>nY:d0' );

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
