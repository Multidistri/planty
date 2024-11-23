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
define( 'DB_NAME', 'planty' );

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

/** Eric - Ajout pour supprimer demande de mot de passe */
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'O3Yj{NK`zmj[;<]tKtYP?&>zgxvz5=DB[snJ-U$[)P7(QE,M><Rb?>;Vh|?|@`U/' );
define( 'SECURE_AUTH_KEY',  '_S^v:CVinCK_5m{K{WKYbr=C=afF>J}3&_-/$S~DLbF>uP)xmGc8OB{zsQ|Nj{ G' );
define( 'LOGGED_IN_KEY',    'fmyGO;4SiOjaJKb$!B3{]O6C`Zg,pX?&X8;s-RG5oj^6d!P?(iH#^ko +k~Ta2gs' );
define( 'NONCE_KEY',        'V}+e,64 ey<0`6Z5UMm|)eVUJ0rJ%]Gl<eO#%722x@&gx#~%Mp^Q|S ;@}v{U}[o' );
define( 'AUTH_SALT',        'UsB).rC|#K70D)QlY^-|=3>)Le%A<FW%!8rGmwr|ZE,R#CU?XN~e|dAtC&ze?{j ' );
define( 'SECURE_AUTH_SALT', 'R|J_vXifdfR_a E!m$p13If%>9^@%`DS;byliZixBr5(mq7uUxflShj|}-E#f}:2' );
define( 'LOGGED_IN_SALT',   '|9P4J7T|19&>SVSMi{:N$XHc_vpkAu);.m-US1A1A5@%0r_7/Vs_*dzJRHs)Cv4:' );
define( 'NONCE_SALT',       '!Yh.Rn%=r-Q:sGIhLm#IZl3PMle|=XP[XlXM|nJceK<Zise{0W#12D6YYI,|M7d!' );

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
