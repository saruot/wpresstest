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
define( 'AUTH_KEY',         'Z9Ovq/fZcUW*<HK|A~iVRW_qZ?/n CrBW6<|rBL<y.]!a[NX(F<`bE3]QMas7,Gq' );
define( 'SECURE_AUTH_KEY',  'llMU^9WABSA!.|2Qz-h4r=kVjvNp^9`wK1!G.=`pn:3H`r /45q)Y8hTlPnLGor)' );
define( 'LOGGED_IN_KEY',    'u+k+7= qTE&!unSY`k;%T|ti8h]=UR6Y8LL#IH~@Jdg)1B:D#->AYU5k-xaVRv(~' );
define( 'NONCE_KEY',        'A@_D{(2V?~IXMI[)VsTPC`+d89odL.Qe*ZX6KkuUd31$55y#+sr)e$=&VK}0_L]r' );
define( 'AUTH_SALT',        '+|SxT[.iD1SZm~W_.a8`:yX]W1!^Ndy~~FS-)iX~Krwk=#{>p_4H2z{gGlks]UlQ' );
define( 'SECURE_AUTH_SALT', '*Dh/z_O$@*Jkuw^?)>zHwq}m5jy+^ANWe0HNG&9g+$Mw]&pn%qv0}@Pe);Ame~_6' );
define( 'LOGGED_IN_SALT',   '=lnByF3vx  z5ug3tRef_TSTnb0m<F~ _J@6Bxbgz48@**;C~{O dsLaR0$JD!ZQ' );
define( 'NONCE_SALT',       'A$6EvYNF`H}VpJV$eO~32$v56|>M-UHoK*m}g*Pi|uP:mt@Lu_pszU%s%Nt{Z-9`' );

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
