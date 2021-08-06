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
define( 'DB_NAME', 'album' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'BkeIXb<UaNP-eI1eh<%&LplE[D[=>yOBrY (Pr^1<$^}t;#Rg4<r0Yj&.p9w>$u,' );
define( 'SECURE_AUTH_KEY',  'XQ%ellS4e_k;P{>$DivC0z5ya4if5#&I0{qluX|5Xk`Xi.W^u@gH)_3w3kr<au:,' );
define( 'LOGGED_IN_KEY',    'lw.{~oP_E*<zauFkZB{!6Dtq=|z:=:[D):!8<4os{4ZOzBUSy|-{>2DgL?&RCu`.' );
define( 'NONCE_KEY',        '^!lS08?n3ARH5w8AUqg PJ5]|X{ RFlLxdaM!m<QmW>n]#IkH<?&~CihjXc9Eb^K' );
define( 'AUTH_SALT',        'J<4/}Fgy1s[:zbLw%$X.ZG,IsiT:|-@U]Pg8X)R>`L6hzm.W8g,RP6jToMa-#Ci8' );
define( 'SECURE_AUTH_SALT', '&XkRYtP&D2Ekn8@hWtwD %GxE*&nuD%E[(D5&+9msfy4{8xQ6O~CB&44ggglj1[J' );
define( 'LOGGED_IN_SALT',   'IwFW=frPGN:!A.jrR15Y&7XX;xrQbqWzao]0Qo&Q|?AO(6 {P]8MEUAwct|_r11H' );
define( 'NONCE_SALT',       '#2k( TsCjP{z5*bCHG&D/qxAK=BjOWwp.6|w:8`8U=J!r6b&r&j+Q+k?zHH<#^3`' );

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
