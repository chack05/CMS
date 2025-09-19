<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_wordpress_db' );

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
define( 'AUTH_KEY',         'P~X5xFhk~{(p0>L5<gAhG,J_H:L46E3[Fn$p=@)!d:;e<<bePW#t2|_nOs?WNkGn' );
define( 'SECURE_AUTH_KEY',  'Tozjo7r5?)G^g?#p0A2Bb3H Ui/=^.!%GU~6m,-5E7@C!hL JLaM!<TG^E`4]bPR' );
define( 'LOGGED_IN_KEY',    'JLAsr+,Sy.KY,#I[$Muu/d)u~{3 ZG0jrPt~)cLjS&,w[zCpI[{A NyfuuM3>F8Y' );
define( 'NONCE_KEY',        '-]] r.(W;WT+mGwK@n9@a9Xo M=F_L2cteT ibO=~~qq$&9IiOiqt;Hi-qxOSG>Z' );
define( 'AUTH_SALT',        '[!o/Vr>E9U PI{VD8d?Ghg?g<I~D:*?j8gqgkeDc%M-U3~d/p[$$*i+YQb$R15>O' );
define( 'SECURE_AUTH_SALT', '06Uaqi&A`@@B,C.:xTE(>NW|oMe5.D@*b15wBw6~/AUvg2e29HRwK2z/ZNUU3f|K' );
define( 'LOGGED_IN_SALT',   ' >g`|p&)kSrgJ4Z{n]!>YhWsuyOl C-YgomEz*$F~#/#ASW.NSH,H47%5L}kXohd' );
define( 'NONCE_SALT',       'KcWc*xX!d5TM^A>:|l57ka]U8I<5;){~,O~8tVfkx%MtfYe=lW,4NR4IL]xY%~?W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
