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
define( 'DB_NAME', 'pruebasitio' );

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
define( 'AUTH_KEY',         ' cm UlDYQjb,,{;?K=PtZAD`04suamqJNxzQ{]O[VPkj~Ec09ByID_qa,}<`qRhL' );
define( 'SECURE_AUTH_KEY',  '9wr2v$&E6ntxeY7n$LV$ubefiiRr[J_lk*jSH1E6d-Kzk,zPM7!r<XV&o`LHVN*(' );
define( 'LOGGED_IN_KEY',    '_KCFY$EqFl56Syxr5vV^-M8 x5<ePp9O>q65@rsMDA LbHRN&(,yP.O~t/9ho(Au' );
define( 'NONCE_KEY',        'UHvX$`q}EW3)>v4lQ=65nVdx,n7({6R;]vo[{Ckl5GOv$M*|?Sg:1do+/J=nv0p^' );
define( 'AUTH_SALT',        'q@z9TXN(2xIR LWr,THR@Z%B`-T3Aj~0DJeGCn*Ne+!0(*dRzuj3{A^vcGCn6n{A' );
define( 'SECURE_AUTH_SALT', '|zr7(V:(ldyKa{oyZlD4F._h*d/:IQ!+)A -3!Aw<O(~X,he.#Yw4j_NWi7v{Z}H' );
define( 'LOGGED_IN_SALT',   '$8;^{GEr@2]$pKn7-d!<B]N95#G:qFn/5.uc8.~f4Bh2yl^++B:pT/?Llc#-$&yG' );
define( 'NONCE_SALT',       'bR&9akba}CETK<i18dj1_rif0N[$N+lgj~j$6mESamLv%_{8M0FXz>w54z%m9 /c' );

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
