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
define( 'DB_NAME', 'db_wordpress2' );

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
define( 'AUTH_KEY',         '$7J9/~ez[5Rt{3T2+>aq<.7S}eIuCy-FD=sA`^p=eM7:|6/dHB4-)]a2,Vz[z9C4' );
define( 'SECURE_AUTH_KEY',  '|+*wW^DIpWFjv897euEgez;5>Q>ftum_j+]nlZ:t[Ak$`7+oK/GQ(1GdK5d#4=fW' );
define( 'LOGGED_IN_KEY',    'jR$UVzshR08+dLw#a#wE F{VTakK|4r!Pw!D,>/`2!Qv!saqVIZG7`^?%;]e6[-4' );
define( 'NONCE_KEY',        'h6f.T0X|d*;)Yx:_2(q[/Cit6Sk;neI6`{WItE0G@|;F#W%j{@?oO@sp1=5UQgL.' );
define( 'AUTH_SALT',        '(hva5M{orGm@yj`k3{r&82%pV@*@y~ 8OGTtQFz+cb$y==V@JNk/$#v]Yqvx1Ei(' );
define( 'SECURE_AUTH_SALT', 'S;c<)eTa5(GI 4Hrc)a^o7^(!u:1DCqU&:b$*Djjb7`XEmzTm[U;-,$C~]d^zX,{' );
define( 'LOGGED_IN_SALT',   'bbuY*+dQQyoJf4pND7qzov0]OsY=/]eNYKWv,E_lIQ;+oL@$;d1W>.V;^xhiJwLT' );
define( 'NONCE_SALT',       'd5#bVHW@J,i1@G ;`(cX<%6=+k>#D~<_yqS$nOj,m?K#46O3t97]4&{e)Z9b?91%' );

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
