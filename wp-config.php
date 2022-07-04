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
define( 'DB_NAME', 'blog-domvsit' );

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
define( 'AUTH_KEY',         '$ahyl_g.<A@1kuKhfiH`5* |W*MvGQAy$#S<3+%N- 0y/aZd=[ Dzq+N`tgAW(tV' );
define( 'SECURE_AUTH_KEY',  '<pi&U=*?28L1_&_Thi5XZ.ZDG%YWGyC(%Ta; +fGGTH|8<{0.wx3yd_VMb0fYhUo' );
define( 'LOGGED_IN_KEY',    't3(q[ c9}C%zV^tNU6EIwT^bno]gR(V{i1iYJTfFoZsb>r.n5BXq=#W/4FOmPC-~' );
define( 'NONCE_KEY',        '75mX]aC6#n503aM{<D|<j$F@`Xv?xwCyU#zGph,!zdj:SMB$~D{R8}@U7BqwWspb' );
define( 'AUTH_SALT',        '1*D kQ(.v1*6;2Mf$3EITTf^|}gv:<!K:/MzO>b-6oHQ`198B0lYneGy0eA[PR.X' );
define( 'SECURE_AUTH_SALT', 'EnR8).s(i#D0?7#(kw;-}X]drKXdHQtgGE8KG1-*6G$bId4X9(K/DmDtgW^6.mvI' );
define( 'LOGGED_IN_SALT',   '#/:%953]P?HvVg6I4k{EXpHQ7o>R&exSg_3rtIySsg^L)Gs{C^|cq`d>e*46n(S;' );
define( 'NONCE_SALT',       '2<.n5)rh.cgv3F=1=W}5cn/`NUD!o_F?QYK.V,E;DIZcM%>S[0zl?|KlHl#}Dpsz' );

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
