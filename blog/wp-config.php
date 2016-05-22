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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kevincupak_com');

/** MySQL database username */
define('DB_USER', 'kevincupakcom');

/** MySQL database password */
define('DB_PASSWORD', 'QGykP*-S');

/** MySQL hostname */
define('DB_HOST', 'mysql.kevincupak.com');

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
define('AUTH_KEY',         '0Rk6YQBc?"$os5p^_**`|dj$;HJtb2b?WE"wY%Pe|^oNCIH8PEBa5:V(m7unhV|K');
define('SECURE_AUTH_KEY',  'l!9OKh0Fd`fK)SH%hRA*5_$Dpq(sHopd+fA:MBmAYF2$scZOkTN0WGN97muSW5+O');
define('LOGGED_IN_KEY',    'z_@r"f;~BE6z:t|WLW0jkwMa!%U5A0a*iOn$3DeMj#QzL~R`+^B_rEG_WBPuQC+D');
define('NONCE_KEY',        '_O/WQ@ZUWrYAbPt7DgOmX7AU1KbT"OvQia)vP5*GhQ?B+Ue%/3l7hXOm"(3a;i%%');
define('AUTH_SALT',        'MoQON`jpeilsXIhZSMFpz!~:JgDU@"%QcS~*`1U8iwfujP|D7jYqE"1rLW^cdQ3/');
define('SECURE_AUTH_SALT', 'kAOqDQ#2aIK/UXOub";`upw)S((?nrODr`)w|_e`5J!j49nsZHIh7WX?r3m*S9S6');
define('LOGGED_IN_SALT',   'wF!?zJD^:/Ngew5ui1!IOax3Fy9SYiR0LSdK3DWe%7yu#ryH?LVxtH5~x?;sG!z/');
define('NONCE_SALT',       'U@_&r?y~$N7r)xN:%4a;fR^?`k$QstYoTS2Fw^8JO_5wY6|e+2:y02&HO)fRz^_j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_rrf8cx_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

