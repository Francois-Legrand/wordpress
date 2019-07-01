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
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '&.])mDJKe{jEq.ymU5Y9{5W2!quW1fXcs1&O1)<T>]vV_),O!P$$$Ed&OtRP|4;k' );
define( 'SECURE_AUTH_KEY',  'dm7+75EL=l`[q{b=l884}0%x.yTw[0w{T ~D_%i&t}<[1[z:,[revgS#m[U*FcB&' );
define( 'LOGGED_IN_KEY',    'sn(SzJ>=}W,Q&8CBN=Gl5A]xAHQ`)=e=# l+8FOFt[Zy>2E%5<K)w#OY-#AiTx|1' );
define( 'NONCE_KEY',        'zszZV*lM`$.E= ?e(@~6CR7]iD[vkDS:10;i:7u*k:)%++|9BJ1uN{/$e(*9aO9w' );
define( 'AUTH_SALT',        'SRB b&-#<.Zj&n0+[;w<6|.&8&dd5l6%iG(w9B6l4s28Wl/p 1e,VAQ/5hbfW]c+' );
define( 'SECURE_AUTH_SALT', '(+n*:,l-a~2O(`Tr<4l<=|~Q213ii9ze,q2wWR.%iO2H-1yFUh^D5jS%k0UqsECY' );
define( 'LOGGED_IN_SALT',   '.|8oKNufMfU$UOz+<z|oYq5,<b6[.dJ>}FiE1H!:vY1{SSx!TS.R]`?Y*AVYxNHu' );
define( 'NONCE_SALT',       'fPZ+ir0q}L?@RQ.r|a^4;E}aUd<M2{OYgSB7nvbewdAp3Qon=H8d+4O t#=5Ha(N' );

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
