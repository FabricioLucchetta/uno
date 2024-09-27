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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',         'P (.HYA_e9Af:A0fp];hS=~(YjlWlTi=U6F20A:B7w7IOcq}{xG,Dbz[Z@F*gSeM' );
define( 'SECURE_AUTH_KEY',  'Rrf+~$S6QDVn&zH.r0@,2W9| qe.jCKh36Yzy57}A~Bu=OBnKN)uTN)+#jA_S)2L' );
define( 'LOGGED_IN_KEY',    'a2[H-jcy0?DJkJ=E,8A]>kAR#5rX1rE!^%L9iBg,oU|en2<H/+{@`@y>$DenF;0*' );
define( 'NONCE_KEY',        'b:o{.80fu<QO~lB_c0${%rn1Kl5RLr.VJ+,uqJ`v8m(~E)dcpp3)g:9x9>c4iaPA' );
define( 'AUTH_SALT',        'NNk9=.c:s bv`KJouPp!b~(9!9U83)NOH)zz3!OW/.}Fd}}e7u*L#vluOH0W|X1F' );
define( 'SECURE_AUTH_SALT', '}+7XzyMN]y@aoT-BT(?s5?HES0k-(*IcI<!`a]wLAV!a^UBu^Roi~:zUl[S#GMRi' );
define( 'LOGGED_IN_SALT',   'T7G=63YL.jPr^sD3_#+,({Gr8?BLU!%_Qj~4}lRwqW{KV;r5&wI]lp`a9kqz M?4' );
define( 'NONCE_SALT',       ']wefiR)4Ns<ggKs<`?:cpH%>:Cer@Fnr<+o0fay)gU]oCc]tn-|->Ho-F{?59~X^' );

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
