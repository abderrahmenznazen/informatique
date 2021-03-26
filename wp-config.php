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
define( 'DB_NAME', 'informatique' );

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
define( 'AUTH_KEY',         'PiG/Q;`G|XEDWAgrSv780E2Ra(Di{:s );@`j-u3)SdcB59iIq?TckfB>tJVW]eo' );
define( 'SECURE_AUTH_KEY',  'tX&$r1]ypH(jUkN2xDmyqIzT!rR%i7V3ZPd=i!T82PP568fn/P:t$ko(R3^>x_,=' );
define( 'LOGGED_IN_KEY',    'iJ+*Vmu;:aXD}1EAHNu{<n|R$%&!Z /XNr-4C~{uuI491QugJUjxoe, Ke,n*lM}' );
define( 'NONCE_KEY',        'yI#grvUNxwg>Nl=-o<;bER<)qkHtg08C5}^0`}dO{*t,YuA x@SX4(DR)u5A4pVV' );
define( 'AUTH_SALT',        '{E`VfB&h1t)sUoD,svv)wYs&L4]~b^R6vs`gc_3}{omTS^q./(v0k];g?qgh<vcT' );
define( 'SECURE_AUTH_SALT', '+^M|WNMz7o$;5@BqR?ywbY-A~}>1xW[d0n(,5JV;EWv4pO{?V^pk@uCx2+.RS> c' );
define( 'LOGGED_IN_SALT',   '*}P&H Z^psFy:p,q<u^&#Ghw6?gV!|n/SzP_kt[m~qqD=;9ncy?Os7?Y9K0;;IOd' );
define( 'NONCE_SALT',       'qZpK28nY)F;j@<pR:6vEFqjSv,3RF<Re9?~}ggpeIU$zNO5s6+v69j6anOX3>}@3' );

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
define( 'FS_METHOD', 'direct' );
