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
define( 'DB_NAME', 'assessment4' );

/** Database username */
define( 'DB_USER', 'admin5' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'r#.oEf>]aPQ7!*l^[J(%/NY&z.};vr&3CM35t|IQZz3t!6B _8=bXl~56^f*lp<?' );
define( 'SECURE_AUTH_KEY',  'l$]F&L :mF1,Z%+7.ZfKI|~MR_bh-~M*kzJUHH|hAle/ dq,t$b-#,9wBa-1H8Vd' );
define( 'LOGGED_IN_KEY',    'g^gbIHKN93Re5Rv)Qu<,:&1/kC[/nlZ3d2OkIF/|HX<=_P(4DrA.6#pMHfP`Oa;<' );
define( 'NONCE_KEY',        'Obz2P23  P9VXGNu^v!$cqSR~SQ?2smK79G*PmO*J]B?;~.Sz4729p(sTAFno(Z8' );
define( 'AUTH_SALT',        '5-xy=qSWx9REUy2dCY^lTA_+C,+]=Bd>RTS+G[U|q*qBFHj*$%CP]IRAd0m{e:iU' );
define( 'SECURE_AUTH_SALT', '~_gKBH}QXS4GyktN|Ea&N8c{U7=NV8mXP>RMX(-1+ye:)CfSN)%kV0QIkgk&qQ[A' );
define( 'LOGGED_IN_SALT',   ';K2(VVtH-nLseP44f|}]qURF;O/_d$@?dx}So#6O)nNbNVWofDxfsKEYDyRCr~xY' );
define( 'NONCE_SALT',       'kd=9bzE$zYo$Fo2@FdL$UK5f`hE.OVu{Z##(Z:N]v^`!OIE[UrFl<HuDR^gxa%k0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'as_';

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
