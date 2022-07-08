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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ') &n ff+?d<>I)~P<dgSz%4,vAAm%,v;.sr<6;TV*]vujJyG)u6*QknA O$i@Z)J' );
define( 'SECURE_AUTH_KEY',  'mNe)H8woiDtg<(2LkoAr)Xd<#LnJPFz17Z}3cA`:+Ccy!-i,C-w){+mzRmf]f>>p' );
define( 'LOGGED_IN_KEY',    '_|-[h_g<GINF8tsIy~#v{ET=PLAY@Wzu X_rv-=69+/Vl8#Jp!,d<)V@T9;/+q ,' );
define( 'NONCE_KEY',        '2eCXy<Jr8MB&TWFq1E`Z5k;E.#`ybo2V9fh3mCm6wB;c.|}l@]ZIFvu09L}mimj2' );
define( 'AUTH_SALT',        '7PYrP6XWD,1h}[|@(v59M~jCVKf{O[JJL`gI{iNaFYX7:+nSSE>L3MTj;`Eb%Itp' );
define( 'SECURE_AUTH_SALT', 'Iih><v7[1pbqI2G~o]f7=l4ahNK,Y*l58G~R?4u$y GQgDRHMNWF:Y9{BQ0|RV8A' );
define( 'LOGGED_IN_SALT',   '=G{~d~i1PZw`mq8;R%qti)_SVrh 2V*w{RHlU+FW+o%TQoFJ,M*$apqQJ#<xVI)/' );
define( 'NONCE_SALT',       'n}b+gY[wjo/KgB5u[<84AYiS&LSnRMrLeQ<<?{qwDhQ>68|QaK*HFc`{;%X0OD#H' );

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
