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
define( 'DB_NAME', 'wp_test' );

/** MySQL database username */
define( 'DB_USER', 'shyam' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Shyam@baseapp' );

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
define( 'AUTH_KEY',         'wVv7XxL^C4SRh4ia&ZMry}5oF0RkX:%Z;Xw*`vNe[lPu4UP4:.pcr~&ONDdOI[C]' );
define( 'SECURE_AUTH_KEY',  '+:(6c!!,y4)2xMl0QX1>HXb)>e<0):O.`0!S](bVT^[ YrLv| 326MvQ,=;q*k0F' );
define( 'LOGGED_IN_KEY',    '<-GHfQ;q8U>mrahr;,yua:/4nqnr`; ~*yCTWd,SWWK&9(K/p[V{ zZoy{{/&Kga' );
define( 'NONCE_KEY',        'GPsS408]gt1-K_%8)3D{M9hqu`xiGH.s0bXdb|9F`Dg.j>Q4| 8K4{xA(b_X*Z0o' );
define( 'AUTH_SALT',        'fS)nl0]5R&s[B;$j L$TL}9x--?#xNU0pM/7II5)q55[E~Jmt_j[%OrFI4 x(Phs' );
define( 'SECURE_AUTH_SALT', '_j7/mU<_k<Qv5MNK#hr@RC@WzKbs%jXPwHw~=.zPVM[KX=T.Mo@^|8R7uFY^g$:X' );
define( 'LOGGED_IN_SALT',   '5=H_`]v~m9q*R<TCSO+j/1)l|#IEMF4aI7LA#Zw5cM(x!$D@zT<{.uYnw&KNpWT!' );
define( 'NONCE_SALT',       'N~a-lhieY78-v1zRWUp&?#B@[H]QKvU*rlc*DPt!dP:PZ%R<di)FEZ#ybU+xF;/U' );

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
