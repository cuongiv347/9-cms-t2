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
define( 'DB_NAME', 'test_cms' );

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
define( 'AUTH_KEY',         '{#*J}KTCe[_ra9tPG=Bm$WIb+qRc#bIR#|e]vy3r}A3HO/=tb#N(|Ci)vx*kH]r]' );
define( 'SECURE_AUTH_KEY',  'PnvvK{K];tGi<7-Qi3a$/lTm/d+=l;b2,=iXyuT4$A;}a{lIC2%Ci8yBGRZX`Ig_' );
define( 'LOGGED_IN_KEY',    '/nK#~#EdTT![%V_HZayrJ,O^-@Hz7*~CP/8Tf}fL7b:#p^NcE#RqVcALrjy6FeN^' );
define( 'NONCE_KEY',        'h?(=k/.>pEV =zyB)e^;)^m|BB2lDesvA: >@cJ(|WL~5ygqVT0$8/5s6>k;fgh;' );
define( 'AUTH_SALT',        'ReMw:bkiy]voys2]bP gH.JY %RA+tJUcUES^xk5NmXIFu!soy!QF/9P}M%TqJX4' );
define( 'SECURE_AUTH_SALT', 'mBO-)|NzrUvO[sH4L(YU$@Ix]X+J!rOXzQU|pPoq@35A++OizCOJcL/XSi6sHZ$f' );
define( 'LOGGED_IN_SALT',   'CQWmf%D+RgiM7R%^z[X!){nnW]MY5O%~bEN%y/E%GY5FI;x+`2hQ4f1mQ.iquIBx' );
define( 'NONCE_SALT',       '^R0c@y!qUfV5S4N0lx#1df|]0x.ok1{8d_dbnu|p>k{ZQ:&74-<DN4L&%=X8hYsi' );

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
