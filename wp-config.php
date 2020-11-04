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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'deb77629n2_ouderennet' );

/** MySQL database username */
define( 'DB_USER', 'deb77629n2_ouderennet' );

/** MySQL database password */
define( 'DB_PASSWORD', 'watiseentile' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i`5-0)v_Wn~z0wVQMF8vPW3SxsO#06Bn9f3rg,Qe(s}0:h.k)9e:/H[&3Te~lTMU' );
define( 'SECURE_AUTH_KEY',  '`]9mkY1}LA4?I_7q^tB2l|q`#DH3#5Q0|(V4G*U.`<}|&HKD<Q4>Xg%rdFp*8 9h' );
define( 'LOGGED_IN_KEY',    'GX3|OjXED3)K~+Bl@&q%-ghPGH{a0t/lC@t!U&y-@X)J2s>+Yenv]Q z9h7nlbIR' );
define( 'NONCE_KEY',        ',vQ%F&pX}OB]H7/Hcb+h_K=)*nB(Q2)>@x| uh{~&?^ {m{)XO a4,uVW?,Hp4c8' );
define( 'AUTH_SALT',        '@ ,IT]7q#)yeX=A=n,.eWN0IRMXrGxQ_BzJ/$lki(Bkq?R#Z6-]`R->1>89N]_3_' );
define( 'SECURE_AUTH_SALT', 'tAwRB<(QH(9kBRkUcUz{Ucb~U/xLY`GfE`?,,C9_l)ICd19*0)x$f<@|TG7+{^Ie' );
define( 'LOGGED_IN_SALT',   '8$!S](Ln?]nEx#>U9^u~So3I[emp{rEb}TXd&dDfbn[o:a&cz@3Y!MH9+53qt%z0' );
define( 'NONCE_SALT',       'C<%7hH{1dw}bJyh.3xf8(_LeB5c]T-qtSmAvp$KG^I{;kB22+;/<j#*/_Z A#tbc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
