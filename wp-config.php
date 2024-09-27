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
define( 'DB_NAME', 'chuyendecms' );

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
define( 'AUTH_KEY',         '_IauQ`1k(@raTs=aY*:qLWXucjt>$8,rYO$oeVh6akYLtn&t~Ye0`f&HzrcpW(~n' );
define( 'SECURE_AUTH_KEY',  '~AJN=$jxp`zV#+N|(+ kdPTXubEl]]3NN<=~mf[dt7*0w,;=2=L^5rKx62*Luw}p' );
define( 'LOGGED_IN_KEY',    'dM|R*YI`T}79I-L7>ae> j:DLJHr<t@J1%V)zGoxDdenF,5g|)rB@[^dE<nX0vU`' );
define( 'NONCE_KEY',        'sBKHFOoY(nbQ3xB[}AM!GHg=@ YvD}[fe5c6Lc@~Odp(Iw_@_|#-HO}QN{F>}%p*' );
define( 'AUTH_SALT',        'IM.rj}rt]f`}@vCKSq,.{N9G/=.%N9,PbWw-1k>wmYz~G#T/:<I+MEgfmW?aQ=k5' );
define( 'SECURE_AUTH_SALT', 'S~y<q&h4>d;t]dz4lD;`6CIdjrA*:{s=WG}<(gL~SHXdfCmh6UXzHNfe;a&&ZQt?' );
define( 'LOGGED_IN_SALT',   ',cW4k*7f9(SrG5|VeOt!_$Z}`.z:!o@Wz#:RiqRCuJqS!8BnAwn2tuh!SU_c$:s:' );
define( 'NONCE_SALT',       '=AXOv[p=6jpqP)uW?BT?DauhF3lDk~[Z=G8ws9E1k e]va5RB8dV?B~@rRz(`@xn' );

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
