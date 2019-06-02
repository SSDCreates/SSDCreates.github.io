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
define( 'DB_NAME', 'wp_database' );

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
define( 'AUTH_KEY',         ')]vd JA[-9VyaKGCVJRZ%KZ3 7}([xchM3L2k{XX<:4>jCW J}o##Alc<0Gp-UYa' );
define( 'SECURE_AUTH_KEY',  'i-cq*A)]9&1=9fK=g|,tT= ]hSipk4n~*Z>;zX26f~9qI19f3k/iK{[o3b1wDz:k' );
define( 'LOGGED_IN_KEY',    '3^/neDa8<`jo|Vq{,g&^)sUq>B+P~n<-.JeQ7gSHxeadZ]C.xV?m1(+4|Z[R5=L,' );
define( 'NONCE_KEY',        'I5Y3D=ivAKit:g .N+XlIL}*fyOKdB;nU8F5ln=(@Cb?O -i9N5:uvKU0Eb>! ~w' );
define( 'AUTH_SALT',        'OhDd0NXai2`$.^24^|zu*%PY>0+P#2[IJB3Psf)Jkwvn@&KN^& =a/_TX9t#9:gw' );
define( 'SECURE_AUTH_SALT', 'ANzsG$kY/qaMA X*(@CI3sMw@td_t#T3)F]`q&#Pg!mUY4j/W2,@ze,Q)s%QaZZ9' );
define( 'LOGGED_IN_SALT',   'EzB Ea7Uh<k7s}W,/WI[t M-nVB.v}jIHP F]9PkKY4ooB&)D^2R}t3np1j-UWIo' );
define( 'NONCE_SALT',       'Aohe`.q -O8^^Ekv@VcAM,][-y y?bM4%[5vG_,HpvQB0ohCw1:@v:@17WE(}2ec' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_soliloquy';

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
