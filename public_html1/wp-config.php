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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nicolinegrand_dk_db');

/** MySQL database username */
define('DB_USER', 'nicolinegrand_dk');

/** MySQL database password */
define('DB_PASSWORD', 'Nico4991');

/** MySQL hostname */
define('DB_HOST', 'mysql10.unoeuro.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kHNYExeDUCCxKobhBM5jaICky@OFDk%C#PRz&kBCAAkMwJH7vhanhX23c8W81r6#');
define('SECURE_AUTH_KEY',  'iYAwep40ulvfBB&wus0APd7pALyOYkuVHq4BpoV2yIHBA4fJqvPu#2vWGqw8l8bX');
define('LOGGED_IN_KEY',    '5wVe#Ljm@8qSZn@dS1q8DmDA^f3xJ82%r@mEjMBnSQaeoU84!HymmER18ADMSeFL');
define('NONCE_KEY',        'MtUve%S&5&QT!C(33z1tLPfkc*NtM^KccRT8b^QmLI^El@zQuKbbrvJwpksIrdQ)');
define('AUTH_SALT',        'Yboe!3M3dn8qaQoWjp(p56r&#omy3*4#w2TY13313b@Qs*6WXW&Ur*@87WB7iC34');
define('SECURE_AUTH_SALT', 'Jm&sWVKT5XiU5Ivdl@YoWK)7jrT6BvlZUIWEY1MkvdMZ%vD^YxavWnKMC^e2j&z(');
define('LOGGED_IN_SALT',   'EP@LnsUAa8JtXn9Y!6)(P1C!yW8NnvxVkBA^2%G(J67Qy%o%I9iHCkTI&kUf9Tef');
define('NONCE_SALT',       'AVvIE1NP8f#VMKGbU6aZ0qpCjYkDHJSs9kWfjPy0nCsA(3nIL(7rPTch)xWY@0gQ');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'clk_8d230c65a6_wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
