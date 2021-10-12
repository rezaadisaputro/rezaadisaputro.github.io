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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rezdesign' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '0x{~qPe]}*fn`vMFqZ;rTO7}6Y]O;)o)2s3+rN|1$!&s>^F_|xG=MHpaKSJSc *3' );
define( 'SECURE_AUTH_KEY',  '26_w^Mj*HrD8Gu+jddJ~7X@oyw5<PC.}Y#sp}&mgU(_U[)M^1_0=a}aNAh;YdqxA' );
define( 'LOGGED_IN_KEY',    'X(O*7#$)LH9s[Zp8_vd.<*ki._^vbdAwOM<@!gK`=x`oqAZ6`>m4dW_~;5R>)PRq' );
define( 'NONCE_KEY',        'L?=|Q<j<|d8qY;[7vl{q[<ZiVXrL-7pqWzN,(Srw<z0`f-;f6Uc!MA9L^*jC{ay4' );
define( 'AUTH_SALT',        't_u:kjuU0Rw$65)#mw q%hr);2wNu}lhf.` frJ.0hWI_P|3lyTVS<5QP+jD!qXL' );
define( 'SECURE_AUTH_SALT', 'V8@a7OkX8hR]87UJU)@YjijKWA|fZs0JJMybDgS-ApCe/.YD,r)b9NLlLr_`O&#x' );
define( 'LOGGED_IN_SALT',   '0IDMK-;7T*{2Og%u{l3FMMBp00=o5gM1887DLz(J%kUZk`f8NrXN6O` &WQac74?' );
define( 'NONCE_SALT',       '[C+-2iSB[H-eKleKPjI.4{0dD-:/koRCiCvc4P0vuTO!Nl3Oij~p24jRwONKub1V' );

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
