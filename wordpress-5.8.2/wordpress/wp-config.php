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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_582' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'iBvS+&P^HnTPR)&Kzv#~83eVEng=~bMid(_9_L~`k+p~Q~KF0u?VEC3r#FvKZJ{n' );
define( 'SECURE_AUTH_KEY',  '0Hs#OYOl %Q&xMR.J96Dfq33p8u8bOlnJQi_K.=G0j0 B}7!%o+K;8`@+1+E MBr' );
define( 'LOGGED_IN_KEY',    '=<6.3b7PAyjM.A*91A1~(f?cI)L0hwDX@@ma[S$mFpYwN0jglK4`USL<`=j=Ac6v' );
define( 'NONCE_KEY',        'V!.ZYq^E+i:TxLB}xOXAiV&p OoKcFSx,lHE:l_>9}TM|7&b uOYo%MMCeR!I{o9' );
define( 'AUTH_SALT',        'VFu$jbXg4!rsyOab.4) <#nJI9AdK?yY+_YE!%$D(xt.oGXlJy=o9rrLY]jMjE=,' );
define( 'SECURE_AUTH_SALT', '54N+*b}a#H3u7dbxr5oFxGmrJXG9`c.CTjqPc<s*e](U2of=TXv!Y2oGkwAtv $1' );
define( 'LOGGED_IN_SALT',   '5mPwA9E -4wZbw@tzorQZ%-5ky!I%}+7jmN:]L*T%@(7f$g}^OL9p!Kqu`}Q(++0' );
define( 'NONCE_SALT',       '.bb@g+Sl=_[y+>)dzIMZ1ka,}EIMfHlo7(~#A/2g OBy)c&FU?{ObZ})LsSJCU{)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
