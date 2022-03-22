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
define( 'DB_NAME', 'iijor' );

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
define( 'AUTH_KEY',         'T=$TI@9&N:W$A2}A0d_g~m-p}`u^RfLCNyp_VEm+>5)/XVsGzbo43,A%PkOCY!i&' );
define( 'SECURE_AUTH_KEY',  '(Ix~:aGTO[c?0o=X}Y3geFU2X:oYT1j[G21T4:0e)d5w-%0LDK^9CcRrYF(RA%](' );
define( 'LOGGED_IN_KEY',    'Z^FKL3`JueS%?}>-z|zn7+o=xETGj(>a4kR$&|B&XO<AuBV.z1gm=%i^sv=2Vhgr' );
define( 'NONCE_KEY',        'n4qS=tFQIRH#EO&f!6g@00!TH7KN)fYTDokL.84Jy!:or4~c]QwSZ7*W7 )M*pzn' );
define( 'AUTH_SALT',        'T^e;FT,^T(N}!W< XDu$gt^,)Y83qnk7e{Rf}~8Up:[t6n8wzHg:6P!y4<WLLPy-' );
define( 'SECURE_AUTH_SALT', 'H@!De@QJ307?eiewm(WBD>*@72%ogQgs5plj~5_5|?K<k]6orcT/oC;BC|Rf]Szd' );
define( 'LOGGED_IN_SALT',   '1f@5)W[TPg&nre+B]P|rGXknTZ|9NV~b~?5=o1fVC]xKZ9BfmtU$i:jEn%_x$PmX' );
define( 'NONCE_SALT',       'w9rmf68)>7vgTf<Cc9|lFL>UA/~$/+^&%Cp2{b_eQ} @Tv{kl RPze>*H+r%v+FH' );

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
