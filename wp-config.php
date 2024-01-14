<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define( 'WP_CACHE', false ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'mitsumaru' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8HoSWDDqLpGFXh2nysVzIorJ5rJdUVsyOMnqVtULhPRXE6ltY5n4iv6kANkQiISq' );
define( 'SECURE_AUTH_KEY',  'GEHP3zO0DAlfA3jLaugG2Yj2hlRLaMjkkMtOdQqRRWoD5pvmWMFx2T3IJ1DhIW1Q' );
define( 'LOGGED_IN_KEY',    'C1bn0z0EsD0UPpVFKnxoo6oc0vnJlAOAA5uRBr6ypUvSaq9QauZww2d2YyxVqIpH' );
define( 'NONCE_KEY',        'TupHEGKtQUh9xb8qiKTanOYNSbu4wCEOoHKAknRzYNlpQSpDGyrK40YeTShfFr4s' );
define( 'AUTH_SALT',        'eDk0X62ImubyMoMrJWmHFhI6V90yC5Pv3iqlRb3Pxpe6mQrG6jcUp179k4f0iCtt' );
define( 'SECURE_AUTH_SALT', 'LKi3Enneb1sxEVPcTy9rO1ZwYTvwqI1x9NjcLCmO9afbnoIr8aQUe2naeOVN38cg' );
define( 'LOGGED_IN_SALT',   '0nljDxrTRgsJCn9K3cgPjeQRc6TatPVyPuJ2DxfMWqEhiyJ7tkva24issWZlfq7e' );
define( 'NONCE_SALT',       'efU0oW4aJW83wDA18Mzl2GD27hszvowxBREbd9opOywVpx2psarRS4nw6zGiyCv1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

//define( 'DISALLOW_FILE_EDIT', true ); //disables file editor
//define( 'DISALLOW_FILE_MODS', true ); //disables both file editor and installer

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
