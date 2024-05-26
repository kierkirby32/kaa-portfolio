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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** The  Starter Templates type. Don't change this if in doubt. */
define( 'FS_METHOD', 'direct' );

define( 'DB_NAME', 'kaa-portfolio' );

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
define( 'AUTH_KEY',         '[5m5=+TZ8w8zXbKbZy)UR,hQUW.?K!uo+2wX-W?Wb$if*QYh7+O;2j*cku>N).5B' );
define( 'SECURE_AUTH_KEY',  'Y*r3Hjt`JXRv-O|Qf.Un2].NGDAP>zSG+-S~2=OxlCa:)8ih${Eoh)tK19,urS?=' );
define( 'LOGGED_IN_KEY',    '%XInm%u~DME/_[,*6 xvc<Irom{DxvlF&$>NSV(m9xIXJf5ojmj rNhG}dG.VJYl' );
define( 'NONCE_KEY',        'Y{z<Z:C-j]iXu!*S8)FYJtC)yJiIu.TAHIo12$jj#!mty@%TZ:#$GZ7y@vI[;)eV' );
define( 'AUTH_SALT',        'XSd;ZA`}:DPK~Z^g7(>@=h)OV #Yfp~O_dVYauBS+~),B$ 9Wz48?Q1.k>zDj?l|' );
define( 'SECURE_AUTH_SALT', '1Ytf0=*g:?*_ybWKZxQ&Y^E^C-iWt|E6i]PRp5R.:u`~eP%z@]Sw,$h;K2N037KS' );
define( 'LOGGED_IN_SALT',   ':Z6.4-!`6E!RO2lygPbdIrxV-w@B7Y3=#O}zo*79]i}[OL#uBj,2L9{#LXKdUfpF' );
define( 'NONCE_SALT',       'cn?EpRs`sZe)e&Q/>_A@Fc?BSx0]G?9!:7M:D:MVhcD&urwCY36]X(`A((P)C&su' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
