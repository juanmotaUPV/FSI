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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '@HKX_NwoCI^!#.Ke%*orwY]pH W_sgV*L{DV&`WA||W7+?-mE,A&?,X^o3|ObC<b');
define('SECURE_AUTH_KEY',  '[CRGJ?nJ#,zd9AYV3ozi(un#V&evlpcFY^@K4)XM8FW|qEFdJySI?_zT)%HOs.Y?');
define('LOGGED_IN_KEY',    'Mk<Vk,ulj(JA6NFfa#53/XX?r];uoT!7u4jA/FnfMy;l[/o2YA0KEdD>za1~0x(9');
define('NONCE_KEY',        'TLY9C:] 1crfL;ev%sHqum2ooA}F(-MMh(Y%vBxmZRU?!TO{!)A7b]2FFF>Slm$#');
define('AUTH_SALT',        'hRpU&;X(A>c2;[@skD?)R$j/3THHJ^A(D}FRicqPDM;2SeWg7E{0b)9n(Crh&;$3');
define('SECURE_AUTH_SALT', 'dMX|CA]jKymGP{x24*J=J;ZX%1Q)4g4.J#(cuG2!-h#fUTfXP8r)AeD.4wnPY)V0');
define('LOGGED_IN_SALT',   't-NC($u8UYGG}HTB+O.^PB5}T#.KE.I7!qjF!,S`u{9_/Dmi#:~OoB~nOOaUgcB.');
define('NONCE_SALT',       'by.fNa*1}YEMMMKDs]eJ_Erhs?1jt+[Kq@0*D-&.9VP h6<TQ}&?m( ?>zBsysk`');

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
