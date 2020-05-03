<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'astrofun' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5Ri_4$Su/m;2G;@M#]u*jw`*75um&-S&=N*iRV_S(g|*O:si1*T]@NGWuu?De|c8' );
define( 'SECURE_AUTH_KEY',  'J|>=[x}AoMwP1:yUP @mt6gBmB/ fFr(pLh? `6~8n`#vVkX%+NtSrumxp6N+n,y' );
define( 'LOGGED_IN_KEY',    '/`OF.1n%V 3 ]tCVga!gZ{!F;OhOzMjD;40J2eB#n|JqRzLAN{`a=oadJxJXFmHm' );
define( 'NONCE_KEY',        'R%|4xDkt$`L0rO!L/c?)3BE`IwOZii+y@0Yn&2O8M7I&1.Olv0<{Asgi9?K?a,%q' );
define( 'AUTH_SALT',        '+D~O[wrEHacGY)UO=p7P3w3Ew=2eE:2C([NFkS`4g.6p<j$nmQJLOB-V.y#8e9_r' );
define( 'SECURE_AUTH_SALT', '+ikuV:ko H(m3{zK=.5ZHdb%JpT6a_. 2T8*QI6t$OJ]C2*#R5k~SyIt_aUoE%KM' );
define( 'LOGGED_IN_SALT',   '>={&v:Gq2n)(/j<% rtcLgAx2yAP;9yivY84q U@ ls.Y*zG1=;l((0xDR qC-i*' );
define( 'NONCE_SALT',       '(4NxGwS<) )m%xQ^Fx=}yHp]a)SRuQRibQ>e~/2guZS0s4nkGDkszBpuCn+t%8$R' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
