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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'EvoSoft' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Disable need for FTP credentials */
define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         'NL|8tiM#U:7T`;tn-ZT6ai8e1*V{P1w|X<zQ?^ru1X~<M2yY}i3UnYWxTe|A{6bK' );
define( 'SECURE_AUTH_KEY',  ';G8w3`s~L?`jWe<<vO`f&_W~S[iuhxOiWEI%)([{8LN!g$nvjY0$idH|>p/=cA~6' );
define( 'LOGGED_IN_KEY',    '#g2GuDv]gLEUEX-<:H^9T?gCbYsz[zIF$mOhWmg3,Dfb?+LHS?9C1!K$M/Oqf]f~' );
define( 'NONCE_KEY',        'e~e_B]-Z@bf!2+]>1%y wDPcmsp_Vg9nYg]G.1g?,L!-FOQaFzc&UNnQj)ZFk3EQ' );
define( 'AUTH_SALT',        'bRtuk(0`_s+;x)3>T1[&v<mYW%Cdo-X;E- +g5=`:o7!B^lbOm:jeUAncanG~2I(' );
define( 'SECURE_AUTH_SALT', 'owmt57# V5/A~.|v~tsAS1YphnZLuoYDP}E8Qbo.Y?]1=Xl;FsLsB7eSGJ-f*)7c' );
define( 'LOGGED_IN_SALT',   'JXHHA]!}t4ekpag{VPU48,;hJZ%4}L-jAZ~mH -EYt?v(/3K|)KocSSwCcaL-H6E' );
define( 'NONCE_SALT',       'ER:Z{?o!(pRmMMM/%6)2nIFQ ?Ng.u9RXV|?HTm?~.3bh}%miAP./vlx]E6V~3Ts' );

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
