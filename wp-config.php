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
define( 'DB_NAME', 'vivowebsite' );

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
define( 'AUTH_KEY',         'S/ylZE>&&<1)yCLo>9o;9IurS+w=R DDdhA2` !6z9vm-AeB+OnjDg{cV$%fcd!E' );
define( 'SECURE_AUTH_KEY',  '-`&+f!*Gn(=uzE&7J9I5=Df]L,ApN%f=jVmpU={sRH) {%k(nAD;B8gCBDVuM_tT' );
define( 'LOGGED_IN_KEY',    'IX{Wb4P$.kw1#g:Kh/212<[}jP}AuF$kDdtCpgNeYsZ_bj@[~3UF(mB==B5{(0X>' );
define( 'NONCE_KEY',        '5&;mj$pd_9:]lB8OdB$,vc`BkG(>Q:G1 hUxFP-YU}`>b{I7:TA[OA(!KNMOjA]s' );
define( 'AUTH_SALT',        'I5@{xtZEK$-sd(]()KgN8K@C,gkp|_VUP{C?CpBsh)XgM:^It3#ci:N3X@Na&WHS' );
define( 'SECURE_AUTH_SALT', 'd6vmNeZ|Y}UU`#Y:FJh0I&,F wO2b2Wsm@E_+[6<L$Dt98(Kc/&(.6y2aHtx38=V' );
define( 'LOGGED_IN_SALT',   '_*$tP$rA($8ut7a(^!&0ZLYU!%|Zg;O`}jqgUe#R9&Q@`$yP:zsF_YeYP.856J:U' );
define( 'NONCE_SALT',       'T:S+@h= =|Yi[PbgA;8i>5veS;L%v^3G<>PE)2fego^7e]X{&Gk ^dJC FG !P:p' );

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
