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
define( 'DB_NAME', 'suporte' );

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
define( 'AUTH_KEY',         'NJE+S2Zm>-vjqy?WiU#$Jh4DD7d3$)jJ>RCJ1yr#mqIMc;[O~mxh4{(;wj<PY`nT' );
define( 'SECURE_AUTH_KEY',  ':G%l,2fRTh3$jK==_,*KRD8nX:3%YmE?$L6)Yf){yAEU_=9hMAcPs(vP.4W_[{0w' );
define( 'LOGGED_IN_KEY',    '{*=r0%uE-$gd%b%o=Fz$VeWU%4lNL/5w9#sKj^o#-5<&#-n@Cy0B<*rR<N>!LBZx' );
define( 'NONCE_KEY',        'fPz_LB7u+,Z3]:XNz7/YjkHl_26R#9tl^QNeue(dW7$kc!x5RJs}6+,llshGK7kq' );
define( 'AUTH_SALT',        '5Uc&<!7<9)<Zsw+]llDW6x^$zWFjvT}u]4Pv{dst%zf}oxh1AjE!*77k*Rx>kWj/' );
define( 'SECURE_AUTH_SALT', 'N8y[NzVxS=AFJ.VgDFf?#E9|o[[70v8l},yH&E$eK6^nV:IFb.=0ke}6V$th!C2P' );
define( 'LOGGED_IN_SALT',   'jPXF#2-v%z1Lk;SpA-xfx(s/AEJmdqu; /W8_L{JE]y?|]pd^[&XK0eV|Ck:z-ol' );
define( 'NONCE_SALT',       ']fM>ap!giL)uv]a)5Bd@%|~@anUB>JjED)n` Ljq#1@/.}/L;H;6hGqKMSEcWe_&' );

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
