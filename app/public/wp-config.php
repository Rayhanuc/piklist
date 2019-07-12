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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'WhVJf/0faQwIkJGeGsEDXQcULmsSkN4YJxulwVcnSOFnELvNbrBhohiKfRRfxsALrFyWl89m3xFqcRnHIOUghA==');
define('SECURE_AUTH_KEY',  'T1Bm/hiRkAIGgGe4kQI6B46Pnn7DzSD6LCtasZXsRw8yqY3+uPX41XnHwPFPEVf3Sfld5WEaeFBucKi6bR1ovQ==');
define('LOGGED_IN_KEY',    'kGS3eQvvSu+ZZbnrMamm/XGaHFqZOwN1zBm8mnLKgcfO3cmDjLJvv/GFxRzCuGULH/C/gXjp75ZjbVY8E42tFg==');
define('NONCE_KEY',        '69l4p3NBAcooahma4NbPH8E1mp92u4g6poO4a9vBvN+6civCHx0LuUIOQmhaSPVhIHoBLHzyS6jv6UnIqIHLAg==');
define('AUTH_SALT',        'PZJBhlUnnGfPzjfQZaEB0iYBH0yFrwJlkwdrc3XHsR4yj61/U4p/ai5vhOifColBMXoYq1sbi6/3KXE30MDqUg==');
define('SECURE_AUTH_SALT', 'f4QrigJ8CsMzAKnFgBreZ+m95E096lpC8KyIpx6mZCYNE5KZB5jH5SvDt+SgxZNI62KntekslMbzdHgLWkXlDg==');
define('LOGGED_IN_SALT',   'W7RHIM+MlffMT0sX/9OBM2I0887eGr5T6tz78hLHdL06Rr3r78KjqnRfpKha7ToKAsiPigQBUxshz1DSTP075A==');
define('NONCE_SALT',       'zM72XvX723/fN8j8b02vsW8XSntrKB2Pyl8BIt+WNmmc8QM9SYCpz4RLKXn4Q40KaSI18MBwaP9HgFZ/dXtsXQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
