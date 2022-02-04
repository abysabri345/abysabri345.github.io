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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'Oz)<?n~*Pmlab$Q`XK],:TsV!ePuvLf::nS_WUQf.xKMGj T>aIyi3&(!/O#ya>&' );
define( 'SECURE_AUTH_KEY',  '<xFmYC 7w/Z}hEd(M7]oh$AByP/N`T |0vrj6cflf=k_jLlz+:q+TM(nLQ%8>Q>_' );
define( 'LOGGED_IN_KEY',    'H4ubNib;i_0{APm},~Js=(r:J%4**2+v},8h(Cr#y/3qu~cbjXc0yahDUII_h*6P' );
define( 'NONCE_KEY',        'RRl~|T@d<ma8>Jw~R{#+UQnFEz0E(3(2$eg~zdm-1#(7x>4i3GJ!N<S!O+@vrui<' );
define( 'AUTH_SALT',        'b ?3zh~v; 0Oo}qwAM1s94u,w?yu`QSiw>l>#z0+yx_2ypDq74O6xu@bn(= 81yq' );
define( 'SECURE_AUTH_SALT', 'q;}t)d(dbHA_ 4*m==/C9zN?QzctUe`Jrs+la`Dfd@.W8Sl-0(rx||cSw>|nt0N4' );
define( 'LOGGED_IN_SALT',   'Mtm5eSki:,L}f?5DJo +i3a $Nzi70W.X=Fd5|1&;.Nn2wp|l+KCGRw(,?[tEMj5' );
define( 'NONCE_SALT',       'sqA#pJ%Ma)M{</kMk{)!S$~Tu/PeX>Sr!O12?7b5dTx.@ CL, eAh#jnk6Q,NCap' );

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
