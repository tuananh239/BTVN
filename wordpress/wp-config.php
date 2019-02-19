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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress_passwd');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '?Q>68KW4cCw5Kx@EBZdPRsS7Erm/KEQ_3Yt;kJ80?k=?biAe:|5r%?q&gCF55,y(');
define('SECURE_AUTH_KEY',  '6.rTt`q:~>e4#3OjZnVnB7h^6NCYO^9WD3]{ALRy)-wG!FT=FhAG,/;!&%@lU<)E');
define('LOGGED_IN_KEY',    '|Dnl4*~NI0uF8|@*y]C%wfX4y0~;h%ux.4mD^.@u#S/-[N1WZ[s5o_94FYg#Nj4d');
define('NONCE_KEY',        '|1e*:vysQ|np|Kq,c(|}-8!rKeF89x|nnmhCFbpj=DI8UwDHb[g({]ABGL^nnr%7');
define('AUTH_SALT',        'q=o9FkWg<UgFT`XijHvAlcLOUb]z9Rz_;<qelqsE-7ztU-7i%C%v<*/|00q*|m&K');
define('SECURE_AUTH_SALT', 'C7~[.|1B;{QqvP2vT_(TB<_2HMHP`/}mV4%D`IVyI1mJWG044(d<QM+-JtT (x-7');
define('LOGGED_IN_SALT',   'yBYG!a(Z~rmPH`2k~ReM=Qubaf!S6&G6SUd}/PjMsuAMM/?*+a(y|h=(+r?3o%1=');
define('NONCE_SALT',       '`e,fjG,WJqlseYxB.l)ZVv/,o#H9b<.eTSv&}VM1Lh-79;o`x|YzH[uUS~f1I3lN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
