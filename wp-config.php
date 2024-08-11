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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test1' );

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
define( 'AUTH_KEY',         '64]I~Gn+IA(KXUppIq=3Q.>RI+G}{~[$ZG.&qp@Q$gXK K7x E2WLs9ia`9G`lxC' );
define( 'SECURE_AUTH_KEY',  'a=7iZ{+v]*4.7R&S.P*C@S|IIFl)<j2sGD!cv2IC#3g,yi]l=:BAHH|O:fK@Si+B' );
define( 'LOGGED_IN_KEY',    '2mw/#jP7$v5Q{BRyEL$ed&i$qrfI$l0p!eY|lEV%Ch<5i?>6>h^0}IR?lzV,|^Y)' );
define( 'NONCE_KEY',        '*XK|eVJ]f%;6F!~_!* G-iGmd^A%2i)OSAYl1cC}6+PnL-]z]4m1&{N$kZo(InXY' );
define( 'AUTH_SALT',        '7^SZG0SnpTJV0p=3KM)3[=?0t4%^l 83?ykt]@)=[=Hj)lTRf>R;*YlqG8_nlnsM' );
define( 'SECURE_AUTH_SALT', ',T_9KqfL=9,^P 92t>dR!fs[~x@s(T7|a?j9mLzdC]}Vrld{qWmX4<50[~#bvhW8' );
define( 'LOGGED_IN_SALT',   'u:@/A1f(zl?k(a*lk+Ll}7<=CjV$08]PC)XsQr`}!#8:?yWJXM=wm.c3jl>#`E>1' );
define( 'NONCE_SALT',       'iHboN>ksPL]-7a+6Nbmvx=QTz=eK#{QIfX;SF1gfz(]x<Ct76qbn|dE1GecYlYsd' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
