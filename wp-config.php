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
define( 'DB_NAME', 'baznasjayapura_db' );

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
define( 'AUTH_KEY',         '+*MUeO0#}z=izJVou:W&J;2,.5vIT1VI56_D{b^Fa8W9[p(%_L75aZdBKO`P[*jC' );
define( 'SECURE_AUTH_KEY',  '/LE+K=LaX2^e9ovh8z6)SGx&uS1ca!)T*S&!0&X&BRo3%6<CA8oFR:i IROOsbc%' );
define( 'LOGGED_IN_KEY',    'OZ)cY-nqOfg;7N}69iwZ$/qi~$`>X>T.%|5.*W5s:-dotNj`jGDO>`A:hd%ZkHZ0' );
define( 'NONCE_KEY',        '~8DQ|~wyoo=t_O|[Zd?:5.y*ck+hwGIWlK2EXTF:n=c/C8c6QPQFV}G1:*IX3yM2' );
define( 'AUTH_SALT',        ' ,[01Pm|=/~>K5M`rW)us |+g5:lk8 1~)+u]VaE{QrwvDyvdyoyVb2a}rky`bon' );
define( 'SECURE_AUTH_SALT', ':/>wC3L3]9ngg`>T}hn$liWGJKTVL,BV>?=4_z.x~{%X]|Y)^tg~7KkE] -vb7k.' );
define( 'LOGGED_IN_SALT',   '2Ft3p7z;dn`P/>?0T59,EciBI[yE@f;Y;Q+Jx<PEI,RFe;t# `/SqPT*zS-** E:' );
define( 'NONCE_SALT',       'Ubk?^WS8a viIaE#l`ZWFw!.6`N1S^dQ1ZStEAvB`b5gP{,PZe7WPED4!1+K!qL(' );

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
