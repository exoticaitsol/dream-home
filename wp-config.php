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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u746845997_dream_home' );

/** Database username */
define( 'DB_USER', 'u746845997_dream_home' );

/** Database password */
define( 'DB_PASSWORD', 'p&7nIETovJ' );

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
define( 'AUTH_KEY',         '))bW[+us`+OSAh8~pKc5Zt~Yt@Q@)Nv6<j;}n8fU%To:+@P1/;%=]J4a^dUA7cp$' );
define( 'SECURE_AUTH_KEY',  'wQ^vb;!S,&WHuS)k2S+|YIQ;hS=vI8i`p;1sTF&77_n_H#;bg;V]0&UW#8$:yHxp' );
define( 'LOGGED_IN_KEY',    '-i^BtfQwH3YMYc)q&nZpgy9l05zV]|t$~Paq4hr tJ3Jzh$3mou.J]67zS!G$IBY' );
define( 'NONCE_KEY',        'Ga_&ODgdz>B@ %6lon.Du#0$^ks9t2^h Yu)e5*sp _Z sOnAD)MMLY<nP}Ph||E' );
define( 'AUTH_SALT',        'm)u3#q>Yn:]-mCMh{kRz_zBK/6DW)]4QVZebqekvFUww|2rJCclVhMqc[2]$W+<5' );
define( 'SECURE_AUTH_SALT', '(=Da!).wWwH`Lw#D;g<,{f]5,KeyBH;E-Soil^F10II,ptJk4S-]@1k0Xb[AIKCc' );
define( 'LOGGED_IN_SALT',   'ZKyjF4i,g+^E<[~ph=J7Y`Uz1+561 )@Sp^`*J3p MK11~/!WvEfl?n, pM3s<yg' );
define( 'NONCE_SALT',       'R,s&DcM9*(iXXw&zo& y{xKO*U+g <bx=+5AI5[,fq2Xvq`{xN|7]gIKGgc$BLgQ' );

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
