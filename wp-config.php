<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'people');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'alex');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qG+$lThK|IiYw]=$4T<yq~AW4j+;L(_6Q{0!eQibWae<-[U@hz_|4!^e<g?sR1$-');
define('SECURE_AUTH_KEY',  'X|!T)Cq/L$Wy@t|y*Nu@+K-RK#BSJ`s(KkoduGVK/+g `,Bjrv8BGiX{Yh7v-~Db');
define('LOGGED_IN_KEY',    'u>(^grny||]PNzf(9SYm>@ZHZV |#TYS@,T!J_&!L0{JqI|&FzxzRJ7<$4I*%n#0');
define('NONCE_KEY',        '44$$>?R:^y$AF?oYI+*-?8rN9[.+1&gENlphCGPox;<{J+x!/h=26su3P$/K1IJ0');
define('AUTH_SALT',        'rd`lA%4S@PS@GS/`fr+#d`]c~jP4aXQ~9h{K]b0W::!GX+9rwIoEJ`BeA+dSpU>!');
define('SECURE_AUTH_SALT', '^Vx:i+cEza</(Npb5v:imX ~t^-Aa,Yf!90}h;j~?76:q>eoMC i^R}w]x!Z9h4@');
define('LOGGED_IN_SALT',   'F{W.bFLLmvPFBKpg%2udR|40%LUOKW=M:ZiN=D73_{CzB|6G m+?!T5va_mfzy@,');
define('NONCE_SALT',       'J=m#nodX*h|(8=v<+w7([JfF:?6UfKX~W`Q-:+]yp6)/WYXBuk.sf[B}T#qQRJuT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/api');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
