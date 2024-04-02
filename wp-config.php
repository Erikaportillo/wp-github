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
define( 'DB_NAME', 'versionamientos' );

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
define( 'AUTH_KEY',         ']zE3$VFAratDN@L{ K~lPTl[0T?L>[)l)YErk2c4G/o<NwpH{*S;U+9Vt9|Zbey=' );
define( 'SECURE_AUTH_KEY',  'Jc0,|}4Z]Tgl1Y!1&L@]R,(15{tz2t? -b1~(`iD4z<}OFG!NK1yO|9<[oYuOuy%' );
define( 'LOGGED_IN_KEY',    '*/sr|ROgh(nM=E#fWV}kr&st|[V4oi`X3j[3^-2xD FPDGC3cgA+C`_$]oKq8`mV' );
define( 'NONCE_KEY',        'lwr2Z7~G0O@dw]7/{0,D/#D2E(cgmU~Zr;E(qw$;ugITjrmSlFxjnFDqF&sG6g*v' );
define( 'AUTH_SALT',        'y~pvL?Y>n}.I{hZh3]Z?F._*P*{VnNTTby;O16Yw=L[-io!gd/odhBs+0[1ve=08' );
define( 'SECURE_AUTH_SALT', '!L_6|tIch;&ns0uocew$(,pUw/$oxW(~ 7`I]MW;*zD*#&e]QaIs&TeoYLVNa{iy' );
define( 'LOGGED_IN_SALT',   '9(R~B46.K;5sFRHxInvbLu>_vZiP(H0AX{AOUk!-Uc$Y!HR?Dk)#pag6A8 N03d=' );
define( 'NONCE_SALT',       '2,q4kN=f?VgG<SIH^=qkH/X3LvGhv,d?KR}IvI.}E>4MXewe&X7w#btZ%l97Z5EO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_versionamientos';

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
