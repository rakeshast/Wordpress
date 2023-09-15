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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ';J`b7?t81C9U+j#?;7uIXx[Jd<Q43MP:pteq$ir+eT!|TeD!ugE7z_?C/pXd:&bb' );
define( 'SECURE_AUTH_KEY',  'Nx`Ea5!-xdQa*&!m@^=X _Nn5NTGSk^S4JTCpN=k>;0&>K!{v]x@>;o01wVyS6 +' );
define( 'LOGGED_IN_KEY',    'jCh8F.i=#tcp[fH@JzH??YR<DTF{e)*f]D`noM6Pz:eZ_K yAkZ@1&YuY6yw|Qe`' );
define( 'NONCE_KEY',        '/:T:N)FQN4+U<2=h%hU_[#.HY0SjH}rqVqpxBOIg</^s0p0F|##,:V&_ctcH9>_Q' );
define( 'AUTH_SALT',        '[Gb$?%#SqR$WM:GW?S6~M5d@czdWxJqsAKy=|TGX!)~!Iw5.<Es|Oe2@jY0:wdQm' );
define( 'SECURE_AUTH_SALT', 'C!wW<xK{~kjYC`g/n,{DG0#X?#3rU,0<VnX7Q[SG88tXU<2;q@#5?=?b+T~[K^C_' );
define( 'LOGGED_IN_SALT',   'ys^n?GQ%0@m-Zd7WZY#0p0]v*P_x?cM?P1I YXg%G07ah<ym(0*YT,)Gq@.7e$y?' );
define( 'NONCE_SALT',       'XMosl(nvB)[4p{s72UV,gM&(#&v@)E#v0>v!)}.E:m6b$I`x]xmo/4^7l7#g,ME:' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

define('FS_METHOD', 'direct');

// define( 'QM_ENABLE_CAPS_PANEL', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
