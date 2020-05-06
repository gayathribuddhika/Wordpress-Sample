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
define( 'DB_NAME', 'wp-database' );

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
define( 'AUTH_KEY',         'jk;7k?|O{q.k8BDCiC!)q9^ R;8<0|2!wME?XU-NlH~-k3gM/T356pno-@J1EWC5' );
define( 'SECURE_AUTH_KEY',  'M(Q ihHlH,otbjR~)YSHr3;1y~~>S}f<Iy)t%PAP;6(%o2v3<xZkD;|K[|k6u0de' );
define( 'LOGGED_IN_KEY',    'c*CIQsD;SV_]!2/<r|[BRMToBs1t&xb2!;n[Ov]gd_X9kcM};v6B&IdZ5pvHu4GS' );
define( 'NONCE_KEY',        '$Az@H9lA8ps!T;sLR=Qt+<IO}<bD}%yaMSM.13&rOt(W;HP/ /Y:ScqdeZPx~*hw' );
define( 'AUTH_SALT',        '1S> ry`-Ns_Y&39=+):3fa~ tr@.Z$c%9Ws ^H&o$0I4o2]4@B&C>uoU?#:2F`kr' );
define( 'SECURE_AUTH_SALT', '~Fk_I)(!AT+c[HZh|Zx$Se$hDc=9[gLW8-6(R<`O-<V#%J^hz80YP@P[RJ(PPyxr' );
define( 'LOGGED_IN_SALT',   'G}B_}?_5s;X{{*J~GF*lTf2Rp|REPX/[u]}c<$oDThihl@^rVi Gyi1Lbes/Df*m' );
define( 'NONCE_SALT',       '-hD]n%`WG=jwv@Gu!wm%C>v3am9v9J{.^ub8L$gm ?h4Wn=x (Ux,N^pOe+wi<d|' );

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
