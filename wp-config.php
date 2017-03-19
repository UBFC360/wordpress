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
define('DB_NAME', 'UBFC');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ZDq61D^E^>g^Z5fi)]+GbM}~W%cy8CnrDY1;Fcz6D/FJORDX4RI9XmDY<_06A@({');
define('SECURE_AUTH_KEY',  'G,]%{bP>#KMe)tH,S;|rCDBf!=IG M!Y$3N3.}CN_^UC7wSgBE7dW?Ua5%.uxGSB');
define('LOGGED_IN_KEY',    '5Anb?uP&&u5U]7o*^!3Gh6:[esbUtc*tJ/D! 3Xn~nP+trpPY3PJBZ4G>TOaa+{(');
define('NONCE_KEY',        'BN-3}C-H {ZJ6h6J1#SDu6 Je#A876S;j?WZsr4S0{<G}K`wA6=.5G6o`4{i}Jy9');
define('AUTH_SALT',        'yq3q/U7-5~,leW=@)ZD9P?96y!>9?`B^y;Ex[>l0u%h(drjk0q7S~-Pkyg+r)`;*');
define('SECURE_AUTH_SALT', 'gN;|rv1=0&S)G-cI~0]aU{Tj~7M=:b*;S cSf}qE2DG8rC:.k<NZ$E|&/1.]fO_X');
define('LOGGED_IN_SALT',   '^k?qA!VN|~{pyBH%.>GD}~[~YhABf}oC7XnW5}d_<q:j2_:RCM$YNBjsCa=/dCg.');
define('NONCE_SALT',       '*nB29x+7#MOO>=De<=~Df}`5=%4w&K}3+f,~ X`@OmhisXp fk-AtnUCRK+NOM2)');

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
