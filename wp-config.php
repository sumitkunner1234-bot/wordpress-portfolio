<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u540359687_y23lQ' );

/** Database username */
define( 'DB_USER', 'u540359687_JY8bF' );

/** Database password */
define( 'DB_PASSWORD', 'WAFhjJBfGc' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'VC:V^PSt%O]*l.V%:js<F ,;a#J[m5bfX?M(/ aqoqms~qiTyTM<NrOz/qr0W5#o' );
define( 'SECURE_AUTH_KEY',   'A|z|+v;l#;&8.yg3#w*X|-#xB| Q3&3etn@*00HUUe9; >DqHg;MD3|]>m<q90B,' );
define( 'LOGGED_IN_KEY',     '_]aQP_5!P~n,f2Df9FUfL7Ic6!a/=vtf*4d-zZOT6*r,ATOevrn,bc8GNdPWcD^0' );
define( 'NONCE_KEY',         '1}19-qPIE)>oBpu;FWNS!xb/t?}}q&dclKdctl1s@SO$&i)m@3F0%u>)XjJw?{=f' );
define( 'AUTH_SALT',         '54AV7/!k-6A%^;9U5,:NWJ2T w,eco35bec)Ww?4U7*1r=xZW5HvrdLe{d&K9h*6' );
define( 'SECURE_AUTH_SALT',  ')Ix$b-M&R6-..<hDr++X5<`dP_kcS-v%F*0twN`F~,7(U|k]-aa~VO$%:l q(|O>' );
define( 'LOGGED_IN_SALT',    '5}y7OQztu+%?kC8bR. )O,ioJ^r,Q%MI6`i.O)OLT}nop-Z01,{`V-uNxFz)Q^fB' );
define( 'NONCE_SALT',        '^3o(hIu1[5)7^_fTHk4rZeJHTuZ?c,.?QY{/&#Q{l6e!O@4C%uY2v.h+`qjwr%oU' );
define( 'WP_CACHE_KEY_SALT', ')@u_0v.0hCBP^S1x$!Bm,J|FdG<y(>zK8f3TGc./Pv7do{}+P)1;>xR%nn!p-Ujr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'a1da588846c507a775c2bd9c5c652897' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
