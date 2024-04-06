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
define( 'DB_NAME', 'Kinmarché' );

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
define( 'AUTH_KEY',         '8E 3(jo_Le{5rV|/vEmh/ ],FNi|+[1ZedDyNmLPOB0bJ/Jhj>#` 0Yh-`bm<Er/' );
define( 'SECURE_AUTH_KEY',  'h#J/7Y[tt(svXXq3c=K~ zWu,zEsJVOsaonc3]x4B2=sivZ%G=X&29^PQCbA5i_M' );
define( 'LOGGED_IN_KEY',    'Y%7rs0yhS0K`aTXJ3CG?&;^FkW)7sP|ZyAE8+IpQ0QT9b G Rdj)q}.G6lVR9<>j' );
define( 'NONCE_KEY',        'FQ %R|yi*jjJ$h_g2P. ls|zRNVnP,0dVbR*vB}bu}~hRoM#Yj|fA6Z8TH{FmK)1' );
define( 'AUTH_SALT',        'pnd&-eW%Z$!c6<_KK;w*;W&q)N!TH=7D<<4hflW*pA@&`ld)&=f`LeA~lPZ/6KG&' );
define( 'SECURE_AUTH_SALT', 'DwPe+u4vB];U.oe,px(}RZ^dh9JT=Exc,bZI.+JoLQ%k9&,LU($Ty:f~A }WKZS7' );
define( 'LOGGED_IN_SALT',   '?|&Uq0&afJE-G`NKe5N$})i5} jKtp._n[fEtZiqw>(Y#.Zm#.,:sR1>pJ`dvxX@' );
define( 'NONCE_SALT',       'f<p,m&x}zP+L[7~n[O#mK91k{US9obBPnU[c>s2%|2I=2nm@uU`8k]@C+2*P4|d{' );

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
