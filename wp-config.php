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
define('DB_NAME', 'assignment8');

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
define('AUTH_KEY',         'COpt%*f?FJ9rOf]6$~EW~plhn}/|aX~;.>fmMb$|;1D$]^aJ~[:.30ovCg`lPNJq');
define('SECURE_AUTH_KEY',  '5:V /ea1Z jPT3ozb_cI8:o)GgSmwWw6!Tp:%`Joq[!d7BJcR+$>9v0;oc;B[ncv');
define('LOGGED_IN_KEY',    'yr=B(wP9}^ECk5)nWwF3zD[>wH e%9NMtuR3AO7:16za:OGgsdX_8c`2L^_1Lc@X');
define('NONCE_KEY',        'u{ca]HJ^8J6-Cj$G~C8W*hdQKB[lb@,/`d#?q3`#}R>%Tf2Dk<8s+FDfP2p^ZZ4O');
define('AUTH_SALT',        '^39D` Y:*KbDTgJjASAZK,wuXXfq|{=6~dPwPrbyD:=!D#(D&&#TV,e d69PcIls');
define('SECURE_AUTH_SALT', '>>D=8RIE8/#a-w-*1%_KcO,#72qPbqW_+hkPg9yg9gn%%?EnztvV^LM8T1](93`|');
define('LOGGED_IN_SALT',   '&;H_W1@rl?T(LqlQ!H J[O<qDO$Z?$bI=VB(P1b}%c*t:6V$]Mrs`{YApzx 7!p*');
define('NONCE_SALT',       '~p*@Ue0fSnZ69Sh~|_LiOOWEz?RusW|vsOQ|qk[yDb1w?X(ml1VRAN`VbeV_Qwv,');

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
