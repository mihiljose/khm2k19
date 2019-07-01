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
define( 'DB_NAME', 'khm2k19_db' );

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
define( 'AUTH_KEY',         'z<K!15ks:$>pP0uUDc?Wx~$9Uhr8nA^Pa4u6B%Ay[Pn]eqb<q.OX?WMQ5DHKqenL' );
define( 'SECURE_AUTH_KEY',  ')_B&>gZ<mG#%&?4My,8FnKHaPvRn ~Y=/?!Q2LRE~g]C!x-aUXEJA-7Jya2-;2%.' );
define( 'LOGGED_IN_KEY',    'j2Z[F=F|r#}J$w7P1/~USdb]YMm@9`54cM#qS&9Dum/{ShpF3U>n9aQyxv@|Y5$s' );
define( 'NONCE_KEY',        '3.#carwqf;,nAIIxuz!S4fXej67xq{4l),_Q~v9oOHAr$Y+9_K&Nc#78AURZc^9)' );
define( 'AUTH_SALT',        '7wRgs^nxjf{&;jVt`~^!SwqfU!uuPMiZ67G_2daT|cDA_pVxTSo/#H%2UNlm+`DE' );
define( 'SECURE_AUTH_SALT', 'cn[H3N{JWoTw?:l#Iv q^0?e{Bk@^+K3oegK|vu^b }aq: FP9);Hcw#<kXJ#-dm' );
define( 'LOGGED_IN_SALT',   '}Hp+)6)[QNG-PsxB)95:>o&_KOtX$q|,U@>e{chF2L?mVnBn}Y];7`l8^^ )`MG2' );
define( 'NONCE_SALT',       '4T+.V6<68jq>3Fe6>~rT_u<0VX-VJ=k<R9vwX$2$>xsba2|tgk^10?+(iCE(n_GE' );

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
