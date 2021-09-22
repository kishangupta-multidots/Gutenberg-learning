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
define( 'prj_trainingkishang', 'local' );

/** MySQL database username */
define( 'prj_trainingkishang', 'root' );

/** MySQL database password */
define( 'OkYYunb6XleNn23s', 'root' );

/** MySQL hostname */
define( '172.104.166.158', 'localhost' );

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
define('AUTH_KEY',         '1BzbkYrv7lurKH0TIFJxRTTnKzvmduDVx6t+OTK2+3NtqAs6S01PY0rYwV0dgjZxAdPnQ5yxGel1niRbWwb0Ig==');
define('SECURE_AUTH_KEY',  'ZLVYiYIpqi5550tKU38jSlreWV/MTGkNGATMhxckUizEhzKs/6vwu13K1e+Tfg2zg/Ofcb2otcg39Y520/lyzQ==');
define('LOGGED_IN_KEY',    'qiWz2qGr5L+nwrp+WCRZWMQ4nS376n/Uxu7rVJRAFqefelOvlZQ2Xk7pYlxvrLT2fGie+JOOIFhTB3bHzbf+rQ==');
define('NONCE_KEY',        'EMRXjZgrqFifNaWKU434LywI0le4nbYeRw1ZZLIAJ6QraJMMF84iyKuz31Yn5lEkbDphqJWpaTYlq+m/SGbylg==');
define('AUTH_SALT',        'Vo2NRJJzChdFyzsPW8d8pBWp0wS/kOPIy8MBhCTq2Cgln1AdtM5LLeYz467bxwY9XsxJ4x/CsgFWv0a86qhF1g==');
define('SECURE_AUTH_SALT', 'HldlqZtLJ7/17EE401e7XjriIY3M7CHUNbDSXX4v9cvYBuc47FZ8Ih8sjFZ7WN0NKUOyszLhGA1TTxu53JZE4g==');
define('LOGGED_IN_SALT',   'SahiIR4tpW3gq7Mi7HdoYxr8YWTummWKlwqwm6TdmS0OBxjZfay6VBOkf/QkM3DAHDyXjg64e/SyMmRpYMP/pA==');
define('NONCE_SALT',       'T6bvCpuSF52FZ5OJEHXX+nrdKifIi+vW94SrvZ3r8jemU2kBktef/Ize90z3H1GzN2z+6a5bAQmF8oo9SYz1aQ==');

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
