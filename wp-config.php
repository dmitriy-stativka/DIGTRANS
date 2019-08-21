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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digtrans' );

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
define( 'AUTH_KEY',         '](L#;~:@GZE!SEv<qdpGdyuny6,Kdw33`$qtDKRi}<eeoR]<p_OtEf0Uk_@rEJ8O' );
define( 'SECURE_AUTH_KEY',  'Lstu{2}Y1&P?hkV.el:FhvkT iPNVkv0Qs38Rcb:RFQq=Tkg>Hi:VgB}Dreg0EqM' );
define( 'LOGGED_IN_KEY',    '!hpCyWSZC&1_>%hLR@Eia]LTRSwtH2LL.2G]w!r*v*@9=jA#%+S!Q}:Hc3`K y>p' );
define( 'NONCE_KEY',        'vcCc~8uBAWuaxh@)fh]VyxgvL9lDbebNBH2rCA}e3Nq04`;Ijxp&r9rH.NjJhFY#' );
define( 'AUTH_SALT',        ')>/%6w-`lAM/8nGIYAas!tE+i=kA]u6lhI+t1/Rm|pn.Ol#nmOTzi-_s>q-We@+}' );
define( 'SECURE_AUTH_SALT', 'Y1`Y,zrj)TR<~zD1CPP!jW2}^TNanhWWQUVFxm~~qSr^iIeVz!CUdRm):B.*M$#H' );
define( 'LOGGED_IN_SALT',   'H&.7%B7hi3.p?4,L86m-:))NAoa:-W`PC+,|zk5nT<}Pez2ZyaH&1w9AHMWDbX!N' );
define( 'NONCE_SALT',       'z(GEss*;Kwi47aIn<{2d]-Ibo>PZ9BB2nzo7l*2u_wm?<I6DVCz=eG]9w~l_(hHQ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
