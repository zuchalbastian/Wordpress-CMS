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
define( 'AUTH_KEY',         '{k(zvKNA:p&nBA%_.c1cz,l-R5 Wf]?F1vYBiC&lPF(~xs9X &71Fq)nY@SS@W}D' );
define( 'SECURE_AUTH_KEY',  '?;$=s&pWbKD1PQ@n+}Fm8B%7JX*2?N=,:f1H&kXtf$7 6ejuubh^N,IGxr^.%9@X' );
define( 'LOGGED_IN_KEY',    '}~kHAxVof%`KB2@t*2&W2!F)yq}Wv,]n_4a`?KQoCrT&dA5no+,,b{L{6b02VY5*' );
define( 'NONCE_KEY',        'NmguSVp98}?Es7J=2VqYTc7aW/nI]Mzf;PbVy4K=(@WKS+f4n.0Qy4aP6T[)rR}R' );
define( 'AUTH_SALT',        'n2O*5ZS4]< E;q%nYt{6/Uls&(p!~q~*~T~5i)W:R+6_eD4K.O RxvTw$&T0q&YE' );
define( 'SECURE_AUTH_SALT', 'a!&%O6w$zc~)X6@s{!d@Ns=X0[pJ~CBf>>#K#1x9pkd0m`.Xd9%[e{@n)<{H[u=q' );
define( 'LOGGED_IN_SALT',   ',wl=U:]`_bdN!x&O4Z{/Ex#!qVBN-f9U{#(ev;6c=5gt9yH2P!NQzsHU<k#=;keM' );
define( 'NONCE_SALT',       '=G;#]>:{+xcj.?tc2I%R2n xF]4!mQW;/2icWiTsX*d9<syvX)(t:8)TZ=$|f&ew' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp34_';

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
