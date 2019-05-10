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
define( 'DB_NAME', 'flash' );

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
define( 'AUTH_KEY',         'e +f#>$;XWuS`Wevy=d~w8h[<B!=}_ch{e5%<:a=Hd(JYKvm/,IyY!?9R}Cbw)_-' );
define( 'SECURE_AUTH_KEY',  '[kf%byt^/Ub!BeB/e|%;=)^|5gD8(O<ft$S|03 Dd>jt%vC7y#~?7Oiw8lkkU[Yq' );
define( 'LOGGED_IN_KEY',    '?F$bh5I!=+#J[ZWx6*3OBhEi[[j_+`Y9Z6Z[K:DW]t?<8qo{&!9xyWRF;IRbM8TW' );
define( 'NONCE_KEY',        'EQUEDd<Ryg8CCe0ZumCyGS|VTD^]&5<bkvN*VxrT%nu0cSExP-[>t.ZkeVn}B#VU' );
define( 'AUTH_SALT',        'd7%#qH}J{*U5@2=Yn$L,J>bG[>oknJfA5x@SA6+DX-< oBKzP!x{9h~7e?B(`Ee_' );
define( 'SECURE_AUTH_SALT', '#EgmXGReVCL<UfYu.CIl}SLjoTzw+PG>[w9@#>-XnI1_^:jHI:R,*D*KR/2?39?L' );
define( 'LOGGED_IN_SALT',   '>Em@St6`:)(>n2!2[_`Zh!x!E2Pd::;?cOcfV~JJI(O31O{pFEf#a15}@OC`d{o,' );
define( 'NONCE_SALT',       '[Lb:Wm3La>JZFOa,%$ke6[2fw(U80o9R-~%U<i-1ME^|B|8%jlh! Q-fI>hE!TM|' );

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
