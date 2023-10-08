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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_bonya_blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'AgOme}GnE=sL$M/<qf6b$eSH|OlxpVFS@C+gA<%m%bjAUf?hFf&UN@+dr2YN[g:1' );
define( 'SECURE_AUTH_KEY',  '.Ry9#oznZ:EPx+}:A~nnD?YlNmrdUQ_zI}s#>`RoKfT^#v<3yz0v<<reX=M [$T{' );
define( 'LOGGED_IN_KEY',    'LDlvh!&Q+ajQ!-z^U^3J^=3jiF)/,p EV@0`EGPy*x9Kl.H*S%X7Rwub*kl}]i2e' );
define( 'NONCE_KEY',        '7Aaj7sIrS3#hWk(>[F$@o-FqN*C[R>L#Hd`6M}*?E<umlW[%=1%[-0YiY?Yjxat1' );
define( 'AUTH_SALT',        's|IgaD_92qcvc3! c4+L;g4wNR#FE%wblLwfs*>W]V^Tg,82f}8v?IQmw5S;i5G7' );
define( 'SECURE_AUTH_SALT', 'Y|57@WX?e#04$;hART[ppJ&5@kH-vi<Le.AN<Fni([hZq_g]w2y~HQ;$_@p?T.0<' );
define( 'LOGGED_IN_SALT',   'Jxs1MKjw/8E*?_ uYzfmG,Vi.Of?,Ww(*!9Wp!7>dj-ftza<<%u|CMQ4x!Tzsecd' );
define( 'NONCE_SALT',       '7>{2mn*ECkd~Y*vtAg3DUg*r6~udx5=ml]Zsz3EI?KXmB_.)1rm+yH4YtonbYvfW' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
