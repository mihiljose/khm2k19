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
define( 'AUTH_KEY',         ')|`GJ)vRnKqcC@-x$D=8ZJQ)}@!>sM4YKbHL6(gvU#RKiD8Rx0C.v*S|]F/MdnNd' );
define( 'SECURE_AUTH_KEY',  ':,0LnB/jG`9Sp-VWzLr}x]a{c9jszF[wKYhr??tr*xV-E7D/xDawTmj!&Bh$uR!C' );
define( 'LOGGED_IN_KEY',    '@Ojs:@Z|I8Y${u] }J.YZnTXE^a(+SD.3XK9G8v#89Rh[`,x&.?t#-;YQ8Tqh O{' );
define( 'NONCE_KEY',        '>4l ~(`^HX*;/Td2|n/?u{>W,fD1P/~KLLiU_F(S$)ev)U&;&,O8zv7S-6l.+ynY' );
define( 'AUTH_SALT',        'I(xk`@;es,V|[#<f&Xj7bs]HrvJdEe_rO~,B|i[dE053ExX{iR~Mmt+Lw&>]OR+m' );
define( 'SECURE_AUTH_SALT', 'Ra3^zb~a]J|?!1O,p7+-t-ww6*%!].W)$.Ln?9lC6_A)>y_ElP}B+^D+B=G:,Lw#' );
define( 'LOGGED_IN_SALT',   'NsO;&0:7*YwK4y~jp%#{RLr,z`#{yX;]8QsQ,jPEYIKDpPonJ:`NoG_lKdJH2wU<' );
define( 'NONCE_SALT',       '}nJ4F8]Xq])km;_tnK0{RYTV_a~AG#v.-||$sS/(yL$GaPaaqtsUU?ECGsVQpz @' );

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
