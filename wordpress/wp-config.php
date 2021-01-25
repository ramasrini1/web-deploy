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
if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {

	define( 'DB_NAME', 'wordpress' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'root' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
} else{
	define( 'DB_NAME', 'dbpeqirc6jxdee' );
	define( 'DB_USER', 'ukbpr3uvbaub5' );
	define( 'DB_PASSWORD', 'learnwebdev' );
	define( 'DB_HOST', '127.0.0.1' );
}

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
define( 'AUTH_KEY',         'rv(9]^{fwFB82Pj-Y_?z3_Wv`As0S #dsy[Q`3n$`RC)(WxtPU6~&a{lH>MXPvPE' );
define( 'SECURE_AUTH_KEY',  'jqohaV}DYRjZm%>P+x/:kX:d(AB9;!PcqCa!gJf;<DNy$;!hYgF{v%+Y:IkXj6_U' );
define( 'LOGGED_IN_KEY',    'y7c2)JKdfP$II]MG%d2t@rQ=QO)1W,v;j&NFNhJTtPXT=UT1M%>J]W8d;;UOn .-' );
define( 'NONCE_KEY',        'Jf81adR&R=2?lweISysWz78@D/(s_p*n>8_&i]QQF+)Of(b[Vo7]b6ZQW3AGY6Wq' );
define( 'AUTH_SALT',        'Wu,}F$5f}3o_eY)c<g/N,+@9SSY(4N65)dfeLQ9Zm43t6jgM!)aA;fAk#EZ4Dy@?' );
define( 'SECURE_AUTH_SALT', 'kcO|QUG773~v|h-O@5=dZU)M$<H{}]8z?2<d!G1)8Ri/pB4}ycCqPiS-B)Kad=Kg' );
define( 'LOGGED_IN_SALT',   'uu?[j#_B[_(9cDCt7SmA,8.h{8XE?5;p+L^zrW dvd)AlaF.okqSaHLMQ3>d<<Af' );
define( 'NONCE_SALT',       'k(Gc*qFNkgwS^S{aDQ|YiNq0xLYup `9%`(K@6vLWGr<5G2`H#jpC!`@5IxHy)3x' );

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
