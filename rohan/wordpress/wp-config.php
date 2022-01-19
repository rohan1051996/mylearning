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
define( 'DB_NAME', 'sonkarbrother' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'LO&&syCoI#_%}%x4,2{D-zGP<j+t75Al<r{%W(;DV}Q^+:mFWM`VOn%MYtJPf>{P' );
define( 'SECURE_AUTH_KEY',  '# ={G&`4;|Q[%6#veNuR&))Qpaq(XoOrd.O4mW?{OmcY~7VZlDNI+9&%EC%lz {%' );
define( 'LOGGED_IN_KEY',    'x56}|_Wa_y3(Sk,zmv@zqY^O/y)*_<EHrIV!-^p;gr|JJ^K][y0$Eq Q=`N6SD<-' );
define( 'NONCE_KEY',        'DkoswI})}6|Jjdu?[{nw1yB&F=Q=.UtBFozl_`k/|3lJ+g!/)Q$V Dcw=0^*94sC' );
define( 'AUTH_SALT',        'J1R,FBhK@rXf=V_h2DgL5Ijecbt=5#2J2JE|R~$&els|eOZi#/:z+rqqMEP(w5(m' );
define( 'SECURE_AUTH_SALT', 'V^]US0Bm!T5]?e`:$Nu0Q$U{kv`S)gV;BP>W8,dywt5CN>EQFYWzxk={o6/kYZ?U' );
define( 'LOGGED_IN_SALT',   ':wz8l@3Wa{do0_?!b_hP!&My#L:T)VC=P5n9<Kd9.2nJ:cU3c:l/^ib+Bp+<~Kb&' );
define( 'NONCE_SALT',       'z4DBltd{Gm%U=(L1&-Kr^HbIla(<7i6npD:EKdEbJ}0)dk]h2X).d2M5d|{L**c/' );

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
