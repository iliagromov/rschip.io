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
define('WP_HOME','http://rschip.io/');
define('WP_SITEURL','http://rschip.io/');
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rschip_local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'yFx1mNzNk1Xe6%,w>qjAX8PAZ9,lz;Wr.uNW!%|=u]b6[/XJAkzFY9(gv_|y0hl,' );
define( 'SECURE_AUTH_KEY',  'hGd0<n!$Gd2yMbB)-vw-0P~qT]9evZ8W)z@Ejr>].Y^3-~403seM[zno1iYq@8mE' );
define( 'LOGGED_IN_KEY',    'pM_3aO=~KB[T%s}J1^=Y:APl<3t&x4BNq`0GM$$Vrg=O%|8qrpRS8ux7BN4b oq9' );
define( 'NONCE_KEY',        'V[J}R!SYk{%uL_[sr;?,FShq]++Xs0yP3;0@7m=CC(xd?cIz/| zAN%l34BrH+n4' );
define( 'AUTH_SALT',        '0:Wp;X<3J3?Xswa/a#+47&aqyrI=TX`nM3CUgY;f[<#=0d>ieH]X|#,j~%s7)1-W' );
define( 'SECURE_AUTH_SALT', ' LD--nv^D.3pjL[_=H 2@B`ehup_ cBoNY>V-5lZA.#@6i_8ZaN[~`W8ZpWNurD#' );
define( 'LOGGED_IN_SALT',   '-t%c.5<&^DKcH4Q2H(/X97mg2LLLe(NYFg9X:K5W&MSUl69 9awS<`hq~f}~ksi0' );
define( 'NONCE_SALT',       'r|7Ov%bV6zl>9SXCO2MH42X$B5K6$C^`{@veulXjwk55`.$HC*Cw`:Gk4)(BhohU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rs_';

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
