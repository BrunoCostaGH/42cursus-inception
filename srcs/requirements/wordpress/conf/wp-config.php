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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'f8*i3q&08F,`^&,+,C&!udZ`K`_dvB F8*n(tQDF?kOG45pN*/]&fPr1q_0}+IX]');
define('SECURE_AUTH_KEY',  '@IkQEjO)Sf7H|xI*UJ;9 Z-xi(nh_/+BU_A,?gy?6V_8clt{f_>j;BL--^73Dk^J');
define('LOGGED_IN_KEY',    'LVe0}8+Xp <`[`(h_6E*iC2(}hRu%?d2ni0;ok>-@H*!Y[l_C-8o~|>|o#hO>~)|');
define('NONCE_KEY',        'r_7^3P;Jd2$88#MXoe.f5+nQO~Z^BD*i(Z!? <+>uk)?m>^{+)4$Q}*67PiwGn@K');
define('AUTH_SALT',        'L]hT{^.@|GC$J12`/9I.<x{iswu6>R<GoQ$<;S3gp]=L[m@_>|mCaEu/@|_dx^iY');
define('SECURE_AUTH_SALT', 'HMEW;cC^Ap};OVi#4U~Bq}vJpEeN47 KSdLdJW+)^$S<U{(x*+|~7VOqtHs#irOV');
define('LOGGED_IN_SALT',   'Nbxc! `rv0aEGnB9p1VaU|q%Gh=wj4RdML-Co0d!~ihCOEmKG)|IB0QyR$~;>=JM');
define('NONCE_SALT',       '$c>^:BdIo]<+vV(6UKsc0%=yYHSw4&+A6*/*0Xth)!{?c0@<OP{44f^Md;Qir`ij');

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
