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
define( 'DB_NAME', 'koipond' );

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
define( 'AUTH_KEY',         '6%ewe)rhed97Kg8Em`>*N#,sy*a4qs@s:i`ibms8Yu@XQ-5w[YO@ml/nd^R>:pcR' );
define( 'SECURE_AUTH_KEY',  'pb/ES<,;K% !2YvYk4NDbotX`5Rw398abu#`Ede!0?pk6o_n]t(j &5orf4fVSB/' );
define( 'LOGGED_IN_KEY',    'O@Oe,t {2.4E.#{^{geau$c`yVRO0#szb^ZOU?g^KJ|1:W&U,`F1Br.!Us:U$Biq' );
define( 'NONCE_KEY',        '! *$v{pNc8[s[e8np,W6JlOvgv[$5/|(`n27vr|sxwH5ZFi![]kcaMtO|<:o~+SD' );
define( 'AUTH_SALT',        'p#WQwtj5H>hn`BO6{7%L>L$K8)+&6Ji}I1j$oZ35QQ[$g|Veq=U)~g tz}fc(C&u' );
define( 'SECURE_AUTH_SALT', 'F!CgA1=q{TI?g,x2{Nm-f,+w2{`IeaXzJL}N`(?NRy40uhw]?!*5b1~}^)M{L?v=' );
define( 'LOGGED_IN_SALT',   ',ip$Y!&xYpe{{B3Qxv$9v8ECU7K7Q$hsO#<UWD|;i 6O-,b?N::U(<I%!N=^l0Bj' );
define( 'NONCE_SALT',       '+|$acTCQzpf#d&0sxgJ_6%w{2H8gxE/w#PyYTAs^YZp:2>Wd}J#JSp.WT#~BD72:' );

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


define( 'WP_MEMORY_LIMIT', '512M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
