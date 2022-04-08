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
define( 'DB_NAME', 'cobold_assessment' );

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
define( 'AUTH_KEY',         '5,}r8 i6[^WeO%,?+{|&,lo&./.lU*Gop&pKy6WFEGeHNraDC^CyC3@$WzzsP/F^' );
define( 'SECURE_AUTH_KEY',  'J3Ua-KFwX6<X~n.{jpW3q^u*:>>s>+evl 2%@,:zsdq}v~Dh)N #PRh*SU1ud;@}' );
define( 'LOGGED_IN_KEY',    '>2;rFe]Y#9n7.AX;;VN2;bdUJEo]1?5ZJ|zziyx41z~Ig{96V1|`@B.>/g]&*;53' );
define( 'NONCE_KEY',        '(,V$<ePGhO@F?j`csCjzK9ti[HbAQB6!VY1FYDxgYHwTvT538?yv#%)IqQ&UY363' );
define( 'AUTH_SALT',        'R~BAIyG.aoqk-Q1?3!#SF(^R,BIqN-A~vFDLTiC2}f:[atz{bFRS912TzE[3gt-~' );
define( 'SECURE_AUTH_SALT', 'HPJ|[U0gP.XsYQ0r5Y{DOj5V4]N)ZnIR&UIS%uknoN%qHN0I~Ry~$:3wP/=Mb.}I' );
define( 'LOGGED_IN_SALT',   '5];jH ~&{cxPug*!d=BYc*:.d;O#CGV:jH7O!8P$x//YP%7+SRAtToZn9(}oZVN7' );
define( 'NONCE_SALT',       'riXB~3WItgK^+dfQh27<; /p0DP &=ACe;s|XxeR,oSZGN,`jQ29M,NQXQQV`HL,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lnd_';

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
