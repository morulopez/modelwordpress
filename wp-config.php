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
define( 'DB_NAME', 'mundohippiedatabase' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jesus17121987.' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '38;jPgXaqArpB@m0.^Q=L%*R65@4,~*>%Z|fg7r..;$:+AGcSx~uB^@,/QZga@Z5' );
define( 'SECURE_AUTH_KEY',  'HQnpabgZp,!G3gx2=GfQVzi}a*R:-a_~m5gt?Bcau A`Am(OxekthN:^~4;f_aJT' );
define( 'LOGGED_IN_KEY',    '?MGihr#{p0uliL=<+2(^kS9;@XKfS5<Xv%e3?^bN,(I#GO)wO4c}T-}5S4=DWt#K' );
define( 'NONCE_KEY',        'TFe96cuFrgWEriK9jR1;ECno<aky ^IoH{43xzr7cXT1o_m{rCM4}O>qmjS-un&Q' );
define( 'AUTH_SALT',        'wbq[]8r_aCFa>9^b1^^!mh&-)9GkiMj]EVaSDh`TD#m1.ua(smb?E$T]w>^{A!y5' );
define( 'SECURE_AUTH_SALT', '+,n!7g,NpF13Lh(UaW*ldTZ@~^6=8:MwNa5W0z`:O0BN9.bfC=o59FGLBgXQ^K1c' );
define( 'LOGGED_IN_SALT',   'B31T5H|l0OpbMhV8+xoYu2Y`D*Pm?]jWeb5`(9q,5_EFf{6O>/<|)/^T-)0Ao&dw' );
define( 'NONCE_SALT',       'w#WZ31OxJXSZ<:&];uM-W-:-P&p1w5#B3m#[8Y!?m%9WC[[$F>6YkEry~qS.[6^k' );

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
