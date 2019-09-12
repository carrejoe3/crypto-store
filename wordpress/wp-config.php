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
define( 'DB_NAME', 'CryptoStore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'feI0-k,z@^{{5U#+up2M)p$V7ad}:&*b5t?4zGF7ba+ngRL2F.{JqvcU&N$n(%yA' );
define( 'SECURE_AUTH_KEY',  '*S^}N=lNOROB QOz.tehiZ#9h!rZ[#*d.5{L|!tCuy}U8jj.D-pqi)*gXcYyX{ ~' );
define( 'LOGGED_IN_KEY',    'GfR.`sW.U`Jy3h9 NDYPdiWjAvoe6vDW|0r2,yL%!1v|F=+n~Q$cGI6F*M~2?N_J' );
define( 'NONCE_KEY',        'yV=Pt2A,+Za^f#[)TEY+p6^Y ;s=5|;}TzXs%XteZDD=^}Y|_50a1ED(=;2q:-|I' );
define( 'AUTH_SALT',        '$jO,Ao^b@an%Kx18aI~C`vZn0xk;@6LW~m2/`qWuEBqTk{sN.W* y@=xmHh_Cak5' );
define( 'SECURE_AUTH_SALT', '699xCb>vK:O!Ic3Qo.@!L-9lZm;7<2VmEO(;Z[qh+^lJO?O`Q3t]@k&19OP@4b_u' );
define( 'LOGGED_IN_SALT',   'is1i]eq[7;?)/(=*o/WOhF=&|qW%0vMITy=|W Bb0Ogu`ws&W%4M8b[C/1ra>byk' );
define( 'NONCE_SALT',       '_-1OhJAfAi7K8dsg4!4S7hUc(~?E!qWbI4_.t*oT.!1v.2Y4,1Ieq]7<8}=1F7?W' );

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
