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
define( 'DB_NAME', 'softtestautomation' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'R1g9-S_a1.j|n+,(U[CQ.D0p(1M3gJ26cmxm>|m8232teap{#u,(YG_5Xm[<51h.' );
define( 'SECURE_AUTH_KEY',  '1wTO~i~4!b%x0pz>EUCm+tA$m9nd]GG4)Z./ELys2>F7KkHfa3.*x_~RT(u`c`$D' );
define( 'LOGGED_IN_KEY',    's%`1t*/fZ.vt3?,Qi<Mq~ BKUqr]hN/9H-B Cb#6Xm?F~<B]x:;W|`HU}~I;.Rc/' );
define( 'NONCE_KEY',        '~%zjxWRqD[lhJ4<R$5>|K[XSVh_fg@8/L}Wn_e@7r@|;2=P#Ja)TwZnck7!U_ajb' );
define( 'AUTH_SALT',        ':-b``56d,/;LbI}9|ro7wLF><W^oKk(N48Z2v5vE}X&T+}4if-fmh@<6Np!cMk!n' );
define( 'SECURE_AUTH_SALT', 'b@HTgNDV0u@Wa0+$Xl_i^iOc%/!S;.#<1_#B-[C[pXDOqfb$^741P_szkM2dFVPJ' );
define( 'LOGGED_IN_SALT',   '[SwTx[l&{s3F#RC:e>rFee@Z:y/._;qy/X]2p[`;0/_9fW{dQFT*HoKi86$?M3{P' );
define( 'NONCE_SALT',       'qWjbg[$0^jC#{eI}< s~~^8B5(79P>s}u4i]({0^(m`XQxU*#p|J(g!EM.uUV=>P' );

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
