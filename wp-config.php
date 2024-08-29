<?php
define('WP_CACHE', true); // Added by SpeedyCache

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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cheragdb_wp291' );

/** Database username */
define( 'DB_USER', 'cheragdb_wp291' );

/** Database password */
define( 'DB_PASSWORD', 'oS2]s2!5dp' );

/** Database hostname */
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
define( 'AUTH_KEY',         '3yrze6anib2dfywpt9mlzrbt2ilcgujwe1aqorxbeqvrjpc0ydtgoco6yp2qpkfg' );
define( 'SECURE_AUTH_KEY',  'chsqgxvqvcjhwtvhjavuprbhhzyefzeh964yjfyqnnhyb5czkzgjraq4aof89r0j' );
define( 'LOGGED_IN_KEY',    'he33vya3rhhqwpc3uxryu5yoj6ivhzbubzngy8gv4m7b0wzwl3sfp42tplf22mvb' );
define( 'NONCE_KEY',        'azq2irhxqzubdzqpw7o4n3iboyyzlzpz5mu01okg0deubogcyykpfvfoaymyvt42' );
define( 'AUTH_SALT',        'ks1o3bwr8gdbbai2xkq1z1gyxj3abbcfdlfkuakjros5kilmvjoqbjzukqato8bi' );
define( 'SECURE_AUTH_SALT', '7jqjvx94nsk46inif86kbmsnrjvnthxagh1aftj4gclhqbsyp6gehei1xfmfmigr' );
define( 'LOGGED_IN_SALT',   'iiz6hxqk7zkqaesdzecvd3ry02qrhzmiie0llpmpzlr2lvji8gv1hkyfpf0dnkrn' );
define( 'NONCE_SALT',       'yzpafzpkklxbxelohyerkrb9zhxdf7nhpyqzu3dl2yfnumk0ebgodtvfxyqllqst' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuw_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
