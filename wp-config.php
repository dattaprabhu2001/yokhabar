<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8(hk+tb)mE+X9NbW?.[R@~eg``0?HP>QHVzP2PM8$l1z3vc.&tN!u<2H$j2 ^|kG' );
define( 'SECURE_AUTH_KEY',  'LF30[c<z!hn8#i)m}`$QI_//PA:NpWhM4gw`#!IK:<=6~1tjc#!hL~)`9ZDXW033' );
define( 'LOGGED_IN_KEY',    'o+=jCjA*+g]9y/gyLn(LY:lA(Z[g0jKl/uAY9^tk&Yw;=!!BQ^hj(E;;NaHH>SCI' );
define( 'NONCE_KEY',        '{JdP]4y})r8JF71-Hs@u:8Cr|?:jd5A#jpwbjY/Z|+St!B>O4EYgs|p_NEyG.hl&' );
define( 'AUTH_SALT',        'x8J`Y=X:=v8AEKCt<m STHg&{vHKAlflx;bN(g7_>{Wx;L+Fv>ny:?jcGt 7FX9i' );
define( 'SECURE_AUTH_SALT', 'AwRu!Q_8JDatV5Vm9?Nx=JB8rtf5z3>0;3`YY8dLr}zEX!0b(@{4d{.M?t}YG@2 ' );
define( 'LOGGED_IN_SALT',   'O$&&TZAF r$K71`2I=EJGQ+-4Lm0lHl;&wU v{-l|k|icvtiL._Rf}MZAj.H}7e(' );
define( 'NONCE_SALT',       '[G4z!qlq`1{`n55leW$W1-a0UJ@Q`fsA$}1E5+~n<jV!P/N!8J_#4tZP#u!iXX+2' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
