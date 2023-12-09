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

define('WP_HOME', 'https://barnass.co.uk');
define('WP_SITEURL', 'https://barnass.co.uk');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '2fd866723757283d6b94a9ea991733e2df9aeaa4dfb2d449' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'oldPnoAKgYrWVcqqL_A2(X`!oPM%l6&XEq0d6IzPyLh9$?FMyGqquy=OKQZ7JoQw' );
define( 'SECURE_AUTH_KEY',  'm$wb=u0.sY+Qb]^p1U]2Th*BbBF?*+LOb{gW-{_7-.Eo~@AU)WySd6u.<r8QokfS' );
define( 'LOGGED_IN_KEY',    '_<guL)QT[~p$k1vq_3Vyqm}vL3TdcP6TC/0rn,uL;e&l~Qq>4l@o.dZ0:u*QX>N^' );
define( 'NONCE_KEY',        '6Wy =V2r&0nPsps(+cK&dCD<!(c21$[(ugz+G7@iSNzNuN&>BegxB;:* $ml(|dw' );
define( 'AUTH_SALT',        'e`>nmuO#TG<JQ{_uYfF0=2(-q{yi&F3vMRyp/)Zt?mvPS]LiGgb_6r8H/|}>/5wP' );
define( 'SECURE_AUTH_SALT', '#A9X9CAa<R5Rf]?(.%q6uxz`^q677lzcty[JzvaA;tsa8tGU;1UzzXKmry[i?57}' );
define( 'LOGGED_IN_SALT',   'c[CP+u5IojVZ=>1+hxKvBj~f)qZj)f`oCj9uT-Rf4O.4Fwm[WA<{y)RrWP&[#AU&' );
define( 'NONCE_SALT',       ']-ZfGQ{Q1)~l$Ee($5$&OWfa/Y/r$x>hM$IcKV%ITK3%1H8i^[$F%nh2@~Vwaluv' );

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
