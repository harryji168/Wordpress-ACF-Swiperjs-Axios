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
define('AUTH_KEY',         'l7bMG2GQNfZhrD0kgEeZbQlrAdyuaPGgCU3uuJ9RirmEAPPVGwuTqy75byjijx6mahhLadKEklK6QX48TjpdCw==');
define('SECURE_AUTH_KEY',  'ftKEZV0wvTpAODLmC0UkBq4W+ZGnOKk9kClsTNUnd0Uzzm9+9Nej1WEg5HmxdJCMjBehPa/itR/OAjn6ENKLLA==');
define('LOGGED_IN_KEY',    '17aHtLW8KsW7NkDFlFdlpb87cbyOyoEmFaeezJEdAh/UKEBNd888eUHdYjZ+MJ51ecPlO1824Vb105NTB8jBoQ==');
define('NONCE_KEY',        'hQdrvK8FMfM6linysEDwnqANQQhUVzivaBBeg7qoC9hNqbrnn73vrhZ+JDkRQjFdf7LUWEEbvmv/0g5403KOLg==');
define('AUTH_SALT',        'O0L5AkYqdN42jBq2DAhQ4PEgUhdlTuTBqKP/LU57gPWGpYl80ta8NPZgKubzz2g24ZGR42q6PaFP1AayLWpvsg==');
define('SECURE_AUTH_SALT', 'posq3/ksviWRufXQzE4XuBzdff0cpOGaxwIOLyVVf4UqXQoPzVXpHbrXpSgCKUCUkqXHN9k/SnyriyhcMcX4Hw==');
define('LOGGED_IN_SALT',   'XsIM7QFkoS0Uv3d4vifrE486XDPvCG1o1yU/OqDOhI6gDL24T8Grzb4heLDYXeBWWNe4ZpBaIu33xHt5Uf22qQ==');
define('NONCE_SALT',       'cKZwctAi9dG52yZizuxGZXXJ2OIcG0CU58HrLWyhW20x42QLEesbmNQuHofLfSECo8DfFtN2b9//qu9yqDilBA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_h2eymt7g0s_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
