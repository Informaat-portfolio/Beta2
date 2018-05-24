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
define('DB_NAME', 'I-online_portfolios');

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
define('AUTH_KEY',         '8wIBn@1~;&t(|qetda,u_+S-GN7+*]3]OT(})Z|0HvY)C+[)rMmb]T5+[}M.4.r8');
define('SECURE_AUTH_KEY',  'f j@U>?EYeS_{lOmiY/M;Pg6II%nOv9r^PLao`]deh?+ZI!Rmwj7ix$8IQt&5aA-');
define('LOGGED_IN_KEY',    'T9w[1%*vV=yCm0H.>_TN>$t=Xe/lt/kZf]4mZ*9?kVv0YM{&!gEr=uO8Tv,FCQ2e');
define('NONCE_KEY',        '[%Y~tc@3={dqagI@1j[c+95iAD4OSom/uzEA>.Hg9Zt&W}4(q@1I3R-C=H+<_v8R');
define('AUTH_SALT',        '%?56#cTg~jKWB}f]EtCY.R>7oZG$ir$NnV=}@|W%E/fv/>[(V@j)SQTm7k.JV*e)');
define('SECURE_AUTH_SALT', 'QF4711kY?9 3fQ^]GAj<07hEp={[v2Ic 5?yZ1XdwBQkO<eGR b.@-)nUC rHD1Y');
define('LOGGED_IN_SALT',   'X:lo1i0,Fa{bMu+fCR.Eh}b&p<m#hWU!>4Ue*ZEsU6C@U>hbDhd5Tm>SbxGDXAb#');
define('NONCE_SALT',       'tcmaCgLzqgk)b;-6/~`@MigfPpiZ}]xk]$&~ f8|H:v-|84W  [<grg-pZ 6l8W>');

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

define('WP_ALLOW_MULTISITE',true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
