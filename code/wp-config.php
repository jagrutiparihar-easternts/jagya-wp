<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'jagyadesigns_primary' );
/** Database username */
define( 'DB_USER', 'jagyadesigns_primary' );
/** Database password */
define( 'DB_PASSWORD', '6t4rhf^H,+M;' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'WPCF7_VALIDATE_CONFIGURATION', false );
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
define( 'AUTH_KEY',         't:!c^UZy xmF)bKJ;Z/*08Zbn6_Jcjp]@RyPZUAO6t{x@NwX|R;-+N(+3Tq-%W,t' );
define( 'SECURE_AUTH_KEY',  'X&!Z4q1I~cax<3p<ZavKE7N(/)Y!8R[P5Kh{$W5),N4TwGfs2ZI;M[?Ni?tt1zCb' );
define( 'LOGGED_IN_KEY',    'q87-p^H#-j1S=<QO3}M6Y{=La9]3%H&lMcHx$3jlG|d&B&NSa,wTgu>wTOY3luL]' );
define( 'NONCE_KEY',        'b[!^N5T.J78+DtN;GO(f+4!*n~k/#jmH@HEd:GgO/-ar~01&5$g->U4-Rs0i jPr' );
define( 'AUTH_SALT',        ']xr0Tb/b]uWb%oC->Tj]MzBK_7YFRw=]LUz8sob-sUO <UiWk6E{0;UD4sij@;Ae' );
define( 'SECURE_AUTH_SALT', 'NgwS29(&0yjq%pc6cP?&H2-`@H^}}>RyhVGH%N1= WV_*Rr4b,,rST)48baTSr[;' );
define( 'LOGGED_IN_SALT',   'h,r,dA]kW+wr`Wzk:ps32>LI%n^l/p@z$zUwC=I-MGua25x!+/1yTr#:9+m.Nn(&' );
define( 'NONCE_SALT',       'i*EuPFt/#`a|E<cX9(_s#6De~t{rXNcm-e8^p2*`22], L|5%(o_OI_l&7#)|B8/' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jagy_';
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

// Disabled theme update
define( 'WP_AUTO_UPDATE_CORE', false );

/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';