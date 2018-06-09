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
define('DB_NAME', 'courtney_gee_site');

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
define('AUTH_KEY',         '4Q5?H,T7/zM5a)E6Z8WWG#HHC/jC*$%c9hR(OfpR[))k34YH<[32K))?_Ec~cF9=');
define('SECURE_AUTH_KEY',  'Xb9j>~w^lCv}PqxMW_yx&}JzNhu.a(psJAp`Il_Mq~yLDd[Vk5-W>GUZq*F77R-`');
define('LOGGED_IN_KEY',    '[4pR^$K,m&kmis-LC5HSBmht,y{d|k2v%3qzXxy88@PeVm3by%t/M;,?8; bhYvt');
define('NONCE_KEY',        'Up;$%CIJ0);4mZ:3bq>FHwh:fNrKR5&}k ZR53n2y]g[mZ%J3psaK%8$m*_D(tl+');
define('AUTH_SALT',        '4gB,pOxap8xg&64?:)ja^,)<o=%9yeWVQQ9<O>5VMae`,m4}mj{nzM_#CB|Up-EM');
define('SECURE_AUTH_SALT', 'a_qw~Vp|l`J#KRX5XNZHQwpyHFpy+o]y`_AcE.:*Y{kbpiSzH)~>90#6ZxQ2PWSQ');
define('LOGGED_IN_SALT',   'nMr8<<oK{!-vePPV:M~]@5_|%!i{]r>!gn~c[,eVyqc0d^mi;,<7Bnh I~(0+w^G');
define('NONCE_SALT',       '9F(J.MVKH`74.5~jCwFCn{^,kX>i]lz-4(/~eUYgiHB; (h}!]Egki`Aq7#*{Yf{');

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
