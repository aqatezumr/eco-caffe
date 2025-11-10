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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eco_caffe' );

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
define( 'AUTH_KEY',         '+um{HdNA/,UBG(fH+A;@0WKYM7YIc`zjN4DiMELCq=`uv+)Xnpv0Y,(%A)XKiF%Z' );
define( 'SECURE_AUTH_KEY',  '*tlE<% ;,95?k5Ftgue[ld1M61HNdI%-n;+R dky9}o&##GjEaP)/bl@8Y%>#IK%' );
define( 'LOGGED_IN_KEY',    '=V-^q;2dERb$y[k|ITih{[S^N$]o2D:dl^Fzn8D9&(d4)V0)LO)P(i~hI+][GCv~' );
define( 'NONCE_KEY',        'sXrFHOfOI:-t%nBG$5D4!Hwubk*:H4l:zSQ1T2+Z57k9k0o.CE^EjXnek_+2ip4V' );
define( 'AUTH_SALT',        '22{0Ldi#3j|%=.O:LaJdX*6G`0{dl^^BrmcH~ltqhlX(HL[;5]{dul#6Z;n.x#a&' );
define( 'SECURE_AUTH_SALT', 'bF5Br2{eEtIp.g[2LTc_KG;Ea9m|TVx~Nv4[]>QH~_jmGi:b3Ivs0S%>[e@4_Zr$' );
define( 'LOGGED_IN_SALT',   '60KcfQs=(y~G:7@Q-sy(C8*CKN33=,KClG,lwMJE.T9W~Nko}ih$O7k/&U:Qv5%Q' );
define( 'NONCE_SALT',       'K:6qU.4t|7Wi,U]ilrdWwOKkSsm2.3&/l~>@}ro/{kk*7KO{uw;A_`7Pv^#CiPq ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'aq_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
