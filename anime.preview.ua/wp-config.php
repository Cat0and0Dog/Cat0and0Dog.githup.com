<?php
define( 'WP_CACHE', true );

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
define('DB_NAME', 'anime.preview.ua');

/** MySQL database username */
define('DB_USER', 'anime.admin');

/** MySQL database password */
define('DB_PASSWORD', 'Mak00Didi17Ga55mk7');

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
define('AUTH_KEY',         'd4=:e6Miy&!@2gf[[?keoP@@NdHxOX+iS)+zO8HF|-QNY_0_C|)IbE%4-]D9i<#:');
define('SECURE_AUTH_KEY',  'S>r+yt.L|%V.OqI~%G3P78*tPXB6+T-:#Q6G1kp6u4 k|(POm@2-k7K>[%8TrB;N');
define('LOGGED_IN_KEY',    'M}QrET<D+JXj(*E+!dstkr1A_,%W+BUDd0nJi=wGxF93#O+kh7mxH-xwYO}0HlC+');
define('NONCE_KEY',        'CTK8G4D9!dJNo$y3qDeYpQCQYG~@7U-|o=(V<n3G2[ruh&F5a3t:(bk!cC+8U88X');
define('AUTH_SALT',        '7=w~BCh ^]+p`uwFMg#nV&kHp,fH|b?}04]nJ,|5#|Y&sHpV / h`_-Q*[*=rADW');
define('SECURE_AUTH_SALT', 'mZB-.RmT{~$w/Ing}?J0`Cehy}{G$gOcW)lDmbK]Oa-G0Hdkl)mit6ORFYEsT_Bi');
define('LOGGED_IN_SALT',   '1X+JRrUl$(i=9g%sfE(!bc{Vh>e?-@lIc2dt-56m6$hpO]=477g)ha!s7m7Gw_x?');
define('NONCE_SALT',       '+,p$Sz1_0XPO+ch=|F9(%_G1stBnPvfr*tMWF;1Sw>_,E&7W~o-82nnOP99Aogv{');
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
