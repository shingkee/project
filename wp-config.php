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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1011');

/** MySQL hostname */
define('DB_HOST', 'localhost.');

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
define('AUTH_KEY',         '6G9D81eVbG3U*-8oE+/CK$Zg>3~%>y/P2lP,ZvzO|-l91cC<;?@T|ohre9>WK`_t');
define('SECURE_AUTH_KEY',  'MS#1MrIe?/Ip=9-RX/ !Qr>d+8*1St_R Y+m_S&F1Q#(<gK`7hAXS~!q7Cfn?n9=');
define('LOGGED_IN_KEY',    'w- &nHU*JmmVlvNQKn+q&_oo;t>errEgNG+PmbjiqCVXRw/q@1h+3.z1olE/i^H4');
define('NONCE_KEY',        '?$hb-pNu}14DBB.Y?HZNgyzf-|m~y7C&`FT;~{-T(BCe>8W8`Uw9We^VyQg}K`*6');
define('AUTH_SALT',        '+uPJ4x9+^Ks-9||wou[L(e>jLtT<s0lp<To2fOR4dl7,vGic&u|Xo({ip8fp;uOA');
define('SECURE_AUTH_SALT', 'X;|/dEd;~f,G^?czo%w%/HLna 0EdDWI`(G&~mWZundwnm|j,$z4EF=#(b A{>Z$');
define('LOGGED_IN_SALT',   '!<`O=!g 0h/Y>RpW)L+|+_9ZV9BNhgHhBHa3wWiMzQ|Tj)e0{$RT;.617fu#(0+w');
define('NONCE_SALT',       '[zZ DcW1mXEVpgvO|Q_5LnGpwW^(+5]w]A-~b7~)C>_7L3)=<8]*i*D^RfA-d|4k');

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


define('WP_ALLOW_REPAIR',true);

