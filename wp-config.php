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
define( 'DB_NAME', 'woocommerce_prac' );

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
define( 'AUTH_KEY',         'Zp1]GWP*;98%%kR?;)t1.C7Z~ET+FMXDMkEtQwkiO2Ta%RZLR/+?dtqxZqVJSzS2' );
define( 'SECURE_AUTH_KEY',  ')r1T.R.;9D4<po?ly$%q0;V#sD;}Qbh_-!seHkJj$cNHfGo:XuY)[uvXU_3*TK)q' );
define( 'LOGGED_IN_KEY',    'QLlAG6]mONDRTpOHMk:1mroVG%t~2nsxFwFb!RX,F2ZeI_CFP/TeT;`P4faeA0=f' );
define( 'NONCE_KEY',        'XwwP{=I+D1>A^Zi^9vG#>.4TdQ2LI(+UsOQ 3Ll}v.FQwof1cW2Z.bIwf8z;7a=E' );
define( 'AUTH_SALT',        'I0}6t1W~C#3fnK^~=a3aE5t_S9em3G)bM0>^KXK0QB%t[9xm),=X;D9T<GNp]37*' );
define( 'SECURE_AUTH_SALT', 'f[lOJd>x@q={/NurFYzTQl;%d<-6{u;k5sMb=VolQlN^!%0eh<dXTV?^OT.yB(!C' );
define( 'LOGGED_IN_SALT',   'tBPalI{iinH}xwj[JCV.zG oBfCw(S>p|^/,XGo<_>*>5iU!b{f+&W+4Y3-Y&7(<' );
define( 'NONCE_SALT',       'W%9*|r?!F %jJnWjRN!q7A3?U%.0@o<q*vhwV,8m?y$e-1*j?LoUY-FAo+0[/sB`' );

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
