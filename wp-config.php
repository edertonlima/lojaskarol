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
define( 'DB_NAME', 'edertton_blog-lojaskarol' );

/** MySQL database username */
define( 'DB_USER', 'edertton_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FsoR8e6YHfO9' );

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
define( 'AUTH_KEY',         'lIMBY-@M IX;(Z %|C.W1@U_9K^c:(H Kts#?y%=^.2|=KVRJ]bwrT|!6&XZr=P,' );
define( 'SECURE_AUTH_KEY',  '0}b=&2`>s?6{tVV-_{!cIPq?2n}TL|2T6!2$n_na/;|@-+-LBMUARrJB81Xgr0*c' );
define( 'LOGGED_IN_KEY',    'RPm<q`5ior:RGE_[)yfytAz9*u]unNGgS{+=[LjsyO1 #g<)=O`&`{vz|b<=vCE_' );
define( 'NONCE_KEY',        '{b!JW`6/#;cJ!xP[~n0u=:>A&-DNq8?cnR]`H/r`rx~!Mk7iaZ`R%?]8yBT]ZQ5c' );
define( 'AUTH_SALT',        'mZkAahAB?Vy6LLNokw:p%#d3&SC1Is_(scNWb$54>qNhuf~3(mV|Y!Cx!AF)yhFw' );
define( 'SECURE_AUTH_SALT', '2UqacAy0)lC#K)_+>a7AsQ6QBU>k])&|cJ-fsWyHh;WBvPA?,C0I_s=+Klw9L}uY' );
define( 'LOGGED_IN_SALT',   'DdB}=.#%v`XT9Qya+5dBRJ3vDHU>;v&u?$XqQBo^44!+o0C:JmSE+l^q5Vib{8US' );
define( 'NONCE_SALT',       'Nz!>_yhiYeDV_F9fPtL&/;x^.SA:[8I%HgtWz$:94}?>/Mc`v@q}9Xg>,/$tBMd-' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
