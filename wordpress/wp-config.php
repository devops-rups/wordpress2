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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'My-password@1234' );

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
define( 'AUTH_KEY',         '!ombnue$?OxC/}h9WO[:Pm]r</X>sk9u]{XHl}JmgVCpbMmpD%K} LgRebI{Y(9:' );
define( 'SECURE_AUTH_KEY',  'B{x2LOn/%~q$7cM(TbM .LmVpYx{R3i1D J$#I;`d2oNBMA?Z0WKXT(Is#=nZlHN' );
define( 'LOGGED_IN_KEY',    'DrVYy+C^/kQ6TJ:;UgByQ]lhqU3;mo8!7Okdm1;CMNiIng0i3$XRJ;Ta526F4%4?' );
define( 'NONCE_KEY',        'fQ^1{zhG*A/5fC{AZm0-Z,!g/$qrP{?6XnTdf]a,Y{6)7T}h;?u!{N1!EbQJF`LZ' );
define( 'AUTH_SALT',        'Ony<0od(6L.i7h8SwECPJGUeCxGdh`1hNg~&3%?`%FqbD2HeptK:R@yq34K[%pW<' );
define( 'SECURE_AUTH_SALT', '^/:j-<ma)Kh$|.V@1XfZ~8/pH5e9^$AmU.[YN{rf.53<e(= PT5!~M$}dq_ecWP?' );
define( 'LOGGED_IN_SALT',   '4kgtiwAwmPVzIK`<JY#(TnrJsLpU[O&uLC)5gZ+msIzI;@JLiga6CuPv0Yq?!}^t' );
define( 'NONCE_SALT',       'cR|f>K)|nX[ndUB6Y.qfpCAK2`~1W+n?RaF,d%=}V+p!qc>Wc& Yt1KTkr7h:F4 ' );

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
