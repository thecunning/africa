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
define( 'AUTH_KEY',         'Cl_<p5AlIYzXf3tCagoaEqWT,Eep[)&b4?9XxOe57W3mqiE0ZW5X[WOtWRqQ7RK$' );
define( 'SECURE_AUTH_KEY',  '?D IQpvVT~NKgmyk;^aJE4]6<*K8~F[Pj<m<U4$yToHA_9b%%DA:cs)9G0+Cldgm' );
define( 'LOGGED_IN_KEY',    '!<W2l>tWcaW1+?a^mhFEU^zsMHCj3<8Rush4OD&C^OqnwJ$nVx(?0G@xzz>X$0d]' );
define( 'NONCE_KEY',        '&xC#4w6lNROEXnyR3$c_Z6^PyG/Y~-e{msrUj^yfJEd/];kA;^d5*%)A8-oroR1I' );
define( 'AUTH_SALT',        'xwKv;yv#hb4J1HWK7|*zo*UiSM=NYbJiP!4A% J`&c5`-9KJg#kat /j[mLTWd(t' );
define( 'SECURE_AUTH_SALT', 'V*J6lJLa>@V_#;*Tce$fH!~NV$SsF38AgJL ]7[0/u$&Q9HYpc)Y%O_Vik9:He``' );
define( 'LOGGED_IN_SALT',   'Ko(,o9SNapsAV=WcpoNEbK1J0]}n9wD/E>VAr0-(+s91**F9,Jf5? ;QLlpGuPzv' );
define( 'NONCE_SALT',       't6$4?!fVxDsW5>N%/IVQHkO(t@^M JL/BR5;AL${`14F!YG-QI6^?7LoaR$MTB#a' );

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
