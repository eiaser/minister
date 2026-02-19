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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'pKw{*9p@c4!;B&!_MTySUIjrK.$#Doo4`POfg,Ar{?L^!3ZTgF2XLolCB20h0@3J' );
define( 'SECURE_AUTH_KEY',  '>oyFzG%Ay4:P6v=k8oa@c+2a_FJM@hAg/BrB0Ep&dbxnvkmB1p1vD4V:}icq94lk' );
define( 'LOGGED_IN_KEY',    'Wx;E&)wzO,O2tj-  CnAXpb~GOn]rIwqf*SFGOAkF5]>{X0kc-|Fu5aNRa#6SD?8' );
define( 'NONCE_KEY',        'fj1R!ErWi{=41JXxBh#v) N5>wwiFK#l&+fbXlkB|S/GY0YK:cpMLZiB<?x8m,cO' );
define( 'AUTH_SALT',        '.H+E;D m:_[Z&!^~S~yBL{C)|<oU #zn4bf3TpIGQ5=h7@)X>W>q]lED*b4`Ib?s' );
define( 'SECURE_AUTH_SALT', 'TL3j`U.F1[dnKbj_lOn&RKfA%sZK/&dB,Aq.X%]=<yqlqBK7uqUImPz)Q|wvI8-$' );
define( 'LOGGED_IN_SALT',   '}%B<Z:#I=h5qF5FVyT#/@FQ:UBRV#;L5fL/+&=I2Vn[+ME8Z,V3TtXPe~(VfV3MY' );
define( 'NONCE_SALT',       'V0gsanf`B4$CrpLpXQ5<5uK2F]ciRRbLc#|M]z.u&9)Zmh3mLg>yLW5LXTe8qByh' );

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
