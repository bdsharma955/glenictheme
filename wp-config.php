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
define( 'DB_NAME', 'glenictheme' );

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
define( 'AUTH_KEY',         'u*V8G}I$*h(h[?,jqV2:>n*{Ev-{PqZk4d*&fYreh#i%rY1ZmrNe?%w@$k1S3ju^' );
define( 'SECURE_AUTH_KEY',  'S|p?eM,BN_LrDDUQVO;:S/uSW+A#to(6xJvM+ZTp|geufw`A,w}e~6A@I9H q,LC' );
define( 'LOGGED_IN_KEY',    '~%YKI#IpU@2V/*9;MqGA!R7 ZvF{l(^bn_a(1vBCMpYKEN $XE!|]:=Ah`cdm<p4' );
define( 'NONCE_KEY',        '!d`XmdFO*l|eL~.SXxm8Y];(w~]}C?FT?tAO^G,1x6d}!fXJVa-8;3P)bO#V;>}p' );
define( 'AUTH_SALT',        '^q7oQl3mYp(skI{[ML+!zm6GR~X~br|cw5At?unFt64%eCt<OIrd6~$95p0@@~|h' );
define( 'SECURE_AUTH_SALT', '-Yv>~9|OV$&c[i13X}Julx7z<JTIU7nb?RM{PQR`!k.q$4a_{s01lI)cg3Btv1ZZ' );
define( 'LOGGED_IN_SALT',   'YY;VS&3(B:;/$wC3G:>4oHg1&r,Fa(h[HjN<([=KdyOPDHusZmA%!*;x[^wB?;kG' );
define( 'NONCE_SALT',       'M!/ojAdp7[-7D<55p]P>VVg@pvJGXF+sO=RBCk!iO5=xS]E:|hXVM;42nx6((t@P' );

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
