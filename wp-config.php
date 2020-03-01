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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+-I <k65@55B>&+z+&DLKb0m.2cChXLuaIAhuH*;p.=1Z+P|`u=l}&_,.s]wr.6p' );
define( 'SECURE_AUTH_KEY',  'C[RQnX5$6rpG/XPQ3V[:._Dr8N(twc/dqt/8O% eB%NF;b*mk.VivXh|} 3A6ca,' );
define( 'LOGGED_IN_KEY',    '3`(fc`|*fEe]27PFIqePx@PkM(3n?Byf~^DT$x*9StJ`NETirQup$!jjVpH>,/SB' );
define( 'NONCE_KEY',        '(?Q|84a:/2V>6dmjjW*pfGI&|Qctyl4?XsUVcpv0WX&O3&J(Q)2=1`t)2i~6a[X`' );
define( 'AUTH_SALT',        '* mV?Q]Sc^1->oi:w=g0]{/+$w|4.0+bCKClu2_g>P8DVU#Ot__q]|5+JMzJAy()' );
define( 'SECURE_AUTH_SALT', '4l5?PZCX;^fUzs>w(Jp^=vr-p$-*B3ir1ecXcRr7Jj9B(+f2.x*At(]}Z04[y(|5' );
define( 'LOGGED_IN_SALT',   'pM3Xec^6KV6&Nd?ONdB<F}Jv?5pmc`C892J gY!xI+WL%`6q<(K_?i_~&m1W;!{x' );
define( 'NONCE_SALT',       'F$_X~>*O0:nP&W^M+o7B3)UH0DXSX]LJO2u>Q>T&4>S:uPin@~1zYV,3oy*d*wSN' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
