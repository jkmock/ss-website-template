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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'i<075/Wh]Pd-6:QmV p[oVp*EnTb-r+M*Mw3Vz#O3$y^q?S&9i[H2/T*}->3|7a)' );
define( 'SECURE_AUTH_KEY',   '[&G3G+$HPGU&^o0K9JOYLdOBqZJc hDXV`6n-|y8+b]X4ko+!<:YYUwU8NGVMhLz' );
define( 'LOGGED_IN_KEY',     '&w^ X.0IYQIkFkVNg5D0=j%=TqXphR^*.EIvHj{kixmqEA[`^|ApBN2oEMFt&`$d' );
define( 'NONCE_KEY',         'f8F,BiDlB^p_tyuEa<g;+p*=)+zo:#5yBif*1ZHmg=b*odkXd~`R(ZHl&UJ|W/T:' );
define( 'AUTH_SALT',         'ut~^%a_WIQdG#T^-iOzQG_t+L%famFsU?e)|EvUAagVkl%qDN.M}3g=`D.G ]lB@' );
define( 'SECURE_AUTH_SALT',  'PSuXE>?vB5:5F=$ld>EQcr-[F_9p7GBeRkHpFd/=- u~/4JxOOq9Y~vR.#aV9;Xg' );
define( 'LOGGED_IN_SALT',    '5yMI/k.K(:`T9uBguQeb-rA~&@mP. Q!|&ckk$K@fA_1|NvZCq>TImgz^G#,~#WA' );
define( 'NONCE_SALT',        '_%(M==7PhL@<OxQp3j1S}~h^_:^vo%$1s%jKfP[@=&r~okxv7YS55j`Gj-zc0MqC' );
define( 'WP_CACHE_KEY_SALT', '?BPO(ET[eusw3,aUO#S+NY,w-2gIy-K~0Sq@cK giA@h{Gw-UDXYaXw-ay3uMn~9' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
