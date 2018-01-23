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
define('DB_NAME', 'local1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
 define('AUTH_KEY',         '~%p~#-OD8_)_sVuE<LFl!a;w/hSA>!*:t0!<)f-Sm2:3Vk()Y|mK S_%OP2iC5tS');
 define('SECURE_AUTH_KEY',  'k,`--l>))9Ycm8ICCKbD>*eP2Fi-H^bZ+956G+$h=..+>Pn79~Jsj8S&V)#+?.eA');
 define('LOGGED_IN_KEY',    '}$cF>ECab3G_b.DkMq9dYS^9Hv}?^vC]pJbb@kZ;)`+4_G1,h0]B&RS[Cr}:|/ss');
 define('NONCE_KEY',        'o~^2rem@D`+ e16YfEQL$2{.qHHC4uGE0-Mz`I*d/&7vf+gq{k!}G*Yz>94y$Wy=');
 define('AUTH_SALT',        'l2;7iM<3&{F,7OCjDbN@e+1lR|P5n{qE2-+GnWW>GoOU]0.5xdV(9R[4Wb &oD{{');
 define('SECURE_AUTH_SALT', '+0#Uc8c(4OUxVN9OUpGv5Uy_K:xe_65K.JwqKje}WZq8E&t}R@}mT#)L<3_CUf:;');
 define('LOGGED_IN_SALT',   'E_I@EK3]<vSE~]D9odyRC/AEtAv<96gx#DWU7(h$e+EG1!l-?XJIaGZ5|@HdDqH2');
 define('NONCE_SALT',       '/xk^y:2#kJG@Y!koja1dVj~K5UlR+*]? !jRIqZP}5g0{.P*-wE0j0W[a55RlrN|');

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
