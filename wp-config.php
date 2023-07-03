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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'gGMVWKMY7TTK1eaUDmUvAe/YMmd0nHwtcI/MDp5XGlESABN4ndmx1tRfPidcm6dxMBMMJVi4jgRYlUK8SXLPtQ==');
define('SECURE_AUTH_KEY',  'Ggp6Tv/X5YnCVk7HY9MVfPB4A5LLtQdlIkCVXS0dbqiIPXaLoC5+7rJqsjU0DIZQ1S+xJzk8M+wmiA0C/+0KFw==');
define('LOGGED_IN_KEY',    'D1AxtZkVmmx80Jpt3piYazzrhsUAyPoEa2a2ETbTEEuYiLTqETZVykjh1u+mWJhFNAygQjHiRe7xsJJEnLyLhg==');
define('NONCE_KEY',        '/dPDVdmOxZAqhhxIO5OfMXFkxBnZHGiLjer6lX7F2zn+KI8wm1IzMS9D3MKRKMpclpoJVz5ElTkJ8MFpDArwBw==');
define('AUTH_SALT',        '8kN/xOACt9vOcVgkMa7oHpnb4bKJfhEKuPI9yQzzorXlvD8K6P4sIK1IY0VIUq2ml5g0g2cDujybUDamWKa4og==');
define('SECURE_AUTH_SALT', 'NLLBsHBX/OxRMGbVo7Y6w2739lhjYEYKxotw2MCmghPRcegdf5Sf1i36MXmBornjWUwICizO2IwgLbRAunOfKg==');
define('LOGGED_IN_SALT',   '/I1EiyAYr0AnoISVNizcFGm8w3TwKawQZZrv4VU8U/rFFbaJe3JAHfFSfSDo/9curCZuCnJVtCY5/QdMqpA3QQ==');
define('NONCE_SALT',       '9zYL5aMJO7AucgLuJKk4rj8UY8wAZd/bUnN71ENw2zGZ4aq84Pex+xnbj2zJkHCYSw/KZkbFV72XwRTgs/NUaA==');