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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         '76P,,x8]{s^tB62w%EmzRf[A]03ZR2+^:Zs1a~x^+H0vIV]H9C6VO>d0Gr;X0h07' );
define( 'SECURE_AUTH_KEY',  '4;[y_3>f91Vopr:6D|:3.vV(6OI`vJ?9F#t[/4Q*&PXP@!&>Z#mR3u3_4Ve!V+.x' );
define( 'LOGGED_IN_KEY',    '$!TM76pRWAT(;9e7i=M*84UV,3a&diGI:=@_5HWAQKUj(!9?OL!&KK0ScE|asb<r' );
define( 'NONCE_KEY',        'D=Rhv^$ T4$ySTMSEltgM+EPb#$q.8wr8B N$@r2>eGi#.4Nv%yY,-`7?=l7Rc{&' );
define( 'AUTH_SALT',        'wti4/)#{+?NWZ+WheHXTB8j_.y[gcfo!3)5y%s0Y7nknG9=L}]ZR#|]bJN{&M Za' );
define( 'SECURE_AUTH_SALT', '6L;u6)QqXZH,fWP#T$/|?Iw=jt%8r7<Qy?RIh}7h{q{2tZ#Qo&f>J;voeg7kgj+U' );
define( 'LOGGED_IN_SALT',   '^( M)hCi4uZ3--gHfgm.4FsU*7-ilL3[+}cZ?|qjALex(rm6/Rnh8AOE`H}7[hm7' );
define( 'NONCE_SALT',       'd^n5D@YnMfzs@+xB%Tn`$xW.?:jSXigTFBCtbEPZ;T8Rt&TkX*VNpiFXJ,]P%p,_' );

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
