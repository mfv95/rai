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
define( 'DB_NAME', 'rai' );

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
define( 'AUTH_KEY',         '6VhAZ _``:e<zAnDUL=11ejGox!%#<c$;7&N:%:*fQm%+sEO,WoRN~PO3<6#A{g&' );
define( 'SECURE_AUTH_KEY',  '%JZM<X7CEBE>/Z>w55@wP7KNg@XQk{C^_)02.`pLC$WtkFM]Lb3~9x|P;<@*}6.]' );
define( 'LOGGED_IN_KEY',    'wfQ!(>PWf0zJAkcsZZ+EA?e0.1*l-XzCqiKP.R*y)FR:_,O%>_}/k~<sJs}1c8M<' );
define( 'NONCE_KEY',        '16q3UTQTw<myBzyju94[yV#+p64n[T6d?Vh&]coVa(IR3oDk mab4M]T;#c(*(OQ' );
define( 'AUTH_SALT',        'HrdV##dK&XNP.L;|C}Q+{f)j.S.J>{)q?r5I!S`J2E3`Wk2~rshN)vF%NI#_*E}f' );
define( 'SECURE_AUTH_SALT', '@G5MyM859l:)%o@/S[q/8~EaTN~V*J8*!3AcsJa%[`MBlq+$J<3]KR,>yP#drqpK' );
define( 'LOGGED_IN_SALT',   'fKd<(,rCg|5W~|U97IcLk}vlZ|qlJ)B!!%L=N@n5ywFt#[QAFBNYZ87l/k>6y6PS' );
define( 'NONCE_SALT',       'skW)W3Q-IkM&`=6Ii)~>C$Jn)*2/2mn:dNwc;Qjtn8=[rl(L[+7_`RHX2C#<?dX^' );

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
