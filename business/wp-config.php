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
define( 'DB_NAME', 'i4346078_wp13' );

/** MySQL database username */
define( 'DB_USER', 'i4346078_wp13' );

/** MySQL database password */
define( 'DB_PASSWORD', 'L.YN0dxfRMtJPxpZWJt97' );

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
define('AUTH_KEY',         'Wy6w8hHiYwamp3ia5DEsLZZABywBqX5oTz807bIPU8PjOa8rifZ3LdBaNdZE38E6');
define('SECURE_AUTH_KEY',  '3fdvBCjx18EUdSc2veW9BCOw8erLEaNIaKSf46iAbBRj3pafHuN4asZqa7sfjYzQ');
define('LOGGED_IN_KEY',    'NJFyjOfrJJv933IAsSzYNchSDUt5NcR1gT6lD5IZXU05GNmdgCTwyDw99G59blny');
define('NONCE_KEY',        'Nhfa2SzC9Jho8jd6yauyGscAZEqWuI49uvBFJuIJVTBeWVp0L3lxzi7tm0RsNYJn');
define('AUTH_SALT',        'xRWz7FRbkQf4H04EjqZtW4Qxez5e9ycU4QRH2bW3AhTvKQCXFJilml9VNrhuVTi3');
define('SECURE_AUTH_SALT', 'oBFO5zlKj3L6sjEz4lvnBV7qY06dLM4TzANYHgOLJcRO4EeLQYiTmYGBgq2xbEzY');
define('LOGGED_IN_SALT',   'hM0xYdtAu6CKxIUhyEElHeO2Me4ohB7KWdKCUMTJZzLHXlm7ujXfLA2EmtfMccNf');
define('NONCE_SALT',       'TWen5W0c0A0XNRIXDFGKGI5PBhZuNZHvuNhQs5g9CeMe43V14WncyU8Y47pyYto5');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', false);


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
