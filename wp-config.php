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
define( 'DB_NAME', 'affinitysteps' );

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
define( 'AUTH_KEY',         'gHCuS5~-U.m2t:hm-OXr;8`ePkn!<}48W%ruy{,:E<uPZ|^d ?n~i??,l/QmeZ8J' );
define( 'SECURE_AUTH_KEY',  'sT`?s`*r_.^!t&r$-aw>;%fECaUe7@1LUgr,rM*(tS`%ds:Fz8-9xR9OjhvExO`<' );
define( 'LOGGED_IN_KEY',    'G]|LE_X&0=T3~v)?ys<5yaU$oP;-TSj.U5v_]+$SW3GT&c1^h,6>s<Z!bPFl$Del' );
define( 'NONCE_KEY',        'l=I-wK1?w5z#MTm-SkWe=u5|R>}*}!&%oyBA%0sg(%;1iU;cQ91h C8`XB-</,~%' );
define( 'AUTH_SALT',        '5NM6lw,iL)VNo~r;1&1Xf;H@Ej[qH+8)BylQ!#TEJ`u>fk(5|#I(f$YI<pt4~zpV' );
define( 'SECURE_AUTH_SALT', 'NyiatX5/RmA7JZWt!rw*{a<u,OR*cNK:N=8FkUMlHQk)W?SQ;8hx1Chuh=hlC{o)' );
define( 'LOGGED_IN_SALT',   ')Q9<+Q49!tc;/c7cCxR92S-J2a)*7!>/0HHu_$Ngu&%Mlje1avAi>K8M,{bi_>D)' );
define( 'NONCE_SALT',       '<Ls&}+`YKFhK8cbh0 %P^WeJAad^M=F/=BS=XiyXPG-}z|&MU%QTkPn:ujI)@s3%' );

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
