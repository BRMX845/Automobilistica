<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'Nkp5OSp5eFhTRU4vX3hDcS1JY3ZXTUIuQl83SmVOPkI3TSAyUjthSHNlKkpdYm48N0kwLSM8ITVtW2pLWUdTQQ==' );

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
define( 'DB_NAME', 'db_autos' );

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
define( 'AUTH_KEY',         '%B;Ibq0j}Ov|(v?k8eMv%<{q6JIjB90ZnsWv9SBsJg3]h#=wJ{%#Ln5kIc4ES=fd' );
define( 'SECURE_AUTH_KEY',  '2=>p!F+}3:nTLw {u,(aJT0,p#7cW((L+<Gb -r#kC.Ye*dK,n_oE$<4X?< ILsg' );
define( 'LOGGED_IN_KEY',    '4-kY]Fv8VVlLVk~2yOmU^QXi h#!ih]`>a v23t2.mVt-O_#4JK;YRTT5gC d K#' );
define( 'NONCE_KEY',        'e_^MKG Qf6&X$|#.}Cn3Y`Rp^kFL#h=tV909f|o7efm&57sRL}MO{0p<USRWXnJu' );
define( 'AUTH_SALT',        '7cSMs:qyD;US#p,y6|>6!_Y;&p{J~iBrHR55<&2.4yyn7j$cn7u+PA&zlxT($:rU' );
define( 'SECURE_AUTH_SALT', '>Ibwp86)X!6#}Zc,r*x*EHr-CX9N~f-SZ%CYd4.%@Ta)__7Qo4F*Fb5k*4HEx`Qd' );
define( 'LOGGED_IN_SALT',   'M<{g$`qr<B{-7=pqy,@PO)8~^f`~8nB7:%wL!kD7IskZPH/ Cpu`BmA*th,6&oR{' );
define( 'NONCE_SALT',       '#,[-Vc#wrFb3wys&yvcXJdBx;4HlECbl~7@zzwsSp30g?TkVO,a&4Ws+}5]WkX*%' );

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
