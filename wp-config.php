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
define( 'DB_NAME', 'kpp437-indramayu' );

/** Database username */
define( 'DB_USER', 'admin-437' );

/** Database password */
define( 'DB_PASSWORD', 'kpp437-indramayu' );

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
define( 'AUTH_KEY',         'K!+<^%?bfvge?+UkGnf0X,4,!bm+xLQXjI]).@N3`bBh}+jK5h(:hnuJiu@C|LS&' );
define( 'SECURE_AUTH_KEY',  'EcL<k4eabjBBy:UmIhM7GGC8E?{lYr4Ozml8=t6ODy8|4[?>{iO%tMB&vQldIZ83' );
define( 'LOGGED_IN_KEY',    'seOaO{l-/yN+Gje(88Zxx^Z17l,jU`;n_N4gDjpp%0-Zhk KlAaRcY3_H29MYn~c' );
define( 'NONCE_KEY',        'G)9J/P,OSOSESwfuCMzNuWf[X^SHNu,$:CrN=Snw/$I~N]hO?jgaTnde9>T Js8F' );
define( 'AUTH_SALT',        '*yUxX;_K]f?st2tXg@d0Mb@~l7%U8~B&Gni,7 1k0j0/(2RG4Jl +gPx(!e:F3m<' );
define( 'SECURE_AUTH_SALT', 'OtlPd2txffBWFJk^HDl~lak|>DkX^UD6v<)8t4_I_|oHq#qQv1*LHwL^yDyk/g t' );
define( 'LOGGED_IN_SALT',   '#N}Dl1Cg03W*69Vl!IRK^@p,/(uu3<3pJPxp-n*>_>yvy!|wKqsMarJ~00WN>f/]' );
define( 'NONCE_SALT',       '|4)z5l.A?^eAhu=2k3j(4N3_.f*p-XB1,Hq5SL2a/2lrohu!4 jc&sC2ZD-dO@uj' );

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
