<?php
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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V4IvWr2uo2OH0aerqg4GEhapEcgM1NhXnqaftrwSP3BxW+uUP+9LBsBpU0o7l4sTs4A09GIO7lfvktq7z7Hltg==');
define('SECURE_AUTH_KEY',  'O8lYgYIoJAcPS18EO59T0umbrcdU5iGuExjrOaji1StwQvSd1XoPInRgNzkOVBkJvTDdKGPUsAgUGCRH1jJh9g==');
define('LOGGED_IN_KEY',    'Eh4wk5wr/B0bNswnEtu5gU7lEgZSCcD8FGQFpJkhanGzB/2U1eohYerl/OaY7hiNROKv4vQnbK7iYgWnHJ7yKg==');
define('NONCE_KEY',        'wWEkn1Eu1pLxUmLGvpkD4ddlQaf5KL1WQZlW2a9ECxtel2Mmac8bVAuXFOaLvu/mJhF419N9qnK4ue3vSLdl9Q==');
define('AUTH_SALT',        'BnNkVrJIAufuycZ7/yUCXkDtnL2NbBfgbIjEjNnu4ltW7SGrEL/IVsu36ZHZ2tMaWyKK1kVitljuUKlsBjkifQ==');
define('SECURE_AUTH_SALT', 'aSHbMaR2zS5p/XtdkWJ/jB0rhkmbdFFGT/5wV1b0lw+1yNZhOZu7Jw1VrcCKWmTW7/7uPlp+l91bVdHgZ2sTkg==');
define('LOGGED_IN_SALT',   'zqPx87TM9pnbwEdZyMufn0PDOuKAvSLpSvRun+sEeqfv9PG7DAVKLGTrSWd0hbtf12BK+P4X3lslI5JF3phk+Q==');
define('NONCE_SALT',       'S4EUMgowSQC23wGL8GKn3Li7Noa4Qyy4l2C+XJ8kMZENBybafy1dD71YMy6cO3hcP/OcFgLCt0HczDFRaWqWDg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
