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
define( 'DB_NAME', 'resturant' );

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
define( 'AUTH_KEY',         'Q{<QyDximJv|ipD4x!x/>6<P9)9G%r3Ub4E|G/!00f-jJp)ztWh%])vYS&woGS57' );
define( 'SECURE_AUTH_KEY',  '[=5YjZO3-{bty5$>w<T:HyMmlHseY5U*r*H,s&&fB)sGqg~ORZN@Z]s#gx_)[W!b' );
define( 'LOGGED_IN_KEY',    '{?/t~5:J#Q*SG4PP(U5IM_fbN/N_EEJGb]dZTzHb[mn:4C#yLq9>q8^2IBClwC0a' );
define( 'NONCE_KEY',        'x({..n_hmwkL{m%6}R1c=:bjVQ78)9 {_KA| IGh|utHG! 0~%F73jiI{;tGjgf[' );
define( 'AUTH_SALT',        'Udk}i>r|X3Aic:4P<[LJ1IFi[S[IqY<6Y(v_NOjz-~Ddp&)3=*w0mR g*kZ;?8$Y' );
define( 'SECURE_AUTH_SALT', '/*j mK+1V6nRE)nIO+q7Re4 2z/4IOEv%6AKp`94]FJYM2e~63!Q!-&%E) 37x`b' );
define( 'LOGGED_IN_SALT',   '/Gea_Co&6|QY)`=j(P3Zi*u/e=8}(!B8jlt*&L^>sC)(M@FX@;,oi~0r<;Cm-~]4' );
define( 'NONCE_SALT',       'Lxa$.0i/&CNcM(z7pR Vh0N.w_L.p5Jc0T~Tc<G#6k$7Opm[(2;xdD+)<4r<JXrO' );

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
