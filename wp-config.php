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
define('DB_NAME', 'jumpcloud');

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
define('AUTH_KEY',         '(H?+V=kj?icydpT{|$l>oDI2S?5^n&mn=$Kj|>r_;CfJs3Um/3{oZrA_/lUd5Lnl');
define('SECURE_AUTH_KEY',  ']xJKF^9YKXQp09Kgu7%pk=dy_QPR]<-JD~2j).1$]w)q]>Z> f/aT`IN9$Vfe1yT');
define('LOGGED_IN_KEY',    'C|UW,I;^V;wZ81rTw37v{X RF>.c}b P2svJ^|lsd.q8!w2J;LvVJmI,2X6&aQqh');
define('NONCE_KEY',        '.x{J;GQ%%z74WR<#B/=}utS8oc+3b6BRA9&L4;;aw_p-UmwojLCawsDA4AEe 2]M');
define('AUTH_SALT',        'KcqoZ6pAiz%1>f)1U<UUuUz~(~;Z`;[`It$h2I[Jxg *KdRH,i^s:4ZYQYChlQJG');
define('SECURE_AUTH_SALT', '1&]uNlOD_8Ta<i!KCFa%kcn`yWT2JDU3*q0}kQINkD~#e-l|[[B2bTR/5s<yj_w]');
define('LOGGED_IN_SALT',   '[L8(K$[a}Hwva:*x6]PkQ2|47_oh/D2q+.!0557QS;Aq8u7zKIoGZA!aIniW.<h=');
define('NONCE_SALT',       'Xe=kV%Vi9TK(p~((!|9QrHSGTW0vC&/J$E6vP] X5nN(D.980o@UVv6Bo?*U|KBG');

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
