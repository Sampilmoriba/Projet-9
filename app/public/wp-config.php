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


define('AUTH_KEY',         'z4VL/PNVV9QuVyp3u8wggxWQkPq9ndSHxj4byPefSaG0NzBIu0XdorhJM3nU/JJYvBzCiR2KOHe+t5v+oBDPEw==');
define('SECURE_AUTH_KEY',  'n5AmcOc+WiRkPX6CnQkeeIV2uUxO69OuUgLBReiZyQXNnnB4P5FxzXgZfgZfSHIWq+glb0VAWLucm6MpAOdRoA==');
define('LOGGED_IN_KEY',    'UM+9/p+kn5JiHobO2qTO2Tkzcms8baChhqryzDA95uL8FmWtqN+yijf9FmTUsYVlcdi48iAYsf0z+QbGdSTSFQ==');
define('NONCE_KEY',        'nZGjFNy7P8Ax5X58FzRyI7YRgDHYurJgzlGJPCKL1NM9AZ4Umn//UitTdV7rUhFfsRQi+z7Q7j8CoCwKJcuYig==');
define('AUTH_SALT',        'AKpVPxFXMQ0TQ4sAqPxL+p3fHHsplHYAR7Rqr30R2Xzx1mciakDUWIVrWoFkbl5x6jMGAtOIEXFbKMs4Cxe1ug==');
define('SECURE_AUTH_SALT', 'ImrC8BZESkl9CpbSa6oBTgbaP9Uz67Ze7PWjCjKqfYvwI6TslE/ifgIwgbI9FfuBROSnaJvFQd9nFQhegDxQgQ==');
define('LOGGED_IN_SALT',   'WVJCDau+nsC6ceDoNTXzQ+kyL7chSZ4yRiw3Iri3+g8VDRgIP1MnUadz72uZuQPdUVY+tavmo2ql6ru6uc4swg==');
define('NONCE_SALT',       '9HkClHN0DxzOpIs1stsoYgvJ5J3kBp+MpC/fDLzUlibLkjXvm1XP/EzW93vdq7dWSm+FG17pBqdxJgRCzFEJZw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
