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
define( 'DB_NAME', 'topicsite' );

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
define( 'AUTH_KEY',         ' %M;_?k.7G9gynaRa$xqS{ifgf[${n_u*R`m:Z(QlP$BZP*)Eo5~sHi@Au@cmz*?' );
define( 'SECURE_AUTH_KEY',  'K.[Nle<dfZ=&$KeJ *0p4O4fKaS?Dha-hbK`.?q=Q,abIw]~cz<QK#4&?*<HxxLP' );
define( 'LOGGED_IN_KEY',    'QEZA_gPqT%&m,^wK58z``:^{J01`uG%2.]@/H}jCVTb:8!2n&Olv:iDnBz{#/x5I' );
define( 'NONCE_KEY',        '4L<L@XXXDuld9q)Y=$BwJ}kPUnfB@Da=e!2qn+%>7.~@M$zZ_b-?WC[pjJ0,W}uT' );
define( 'AUTH_SALT',        '7va~ErP)m`Jdn5oDezE(%dTY&> kdYb8LMUF<z`UTQTM5U/Yz)xic|F{^60:[sF5' );
define( 'SECURE_AUTH_SALT', '0:^l}``&.tS.9Bnr$X_JtrLslG ^zES0I4!pb-&}To-nz0F4:L:qYC}po|+PmZ/)' );
define( 'LOGGED_IN_SALT',   'm-8$o*L}TkeSC(Xn9B s56+D8g+3;X74teA:4wH|]@B|n]p.Lx;g#uC HQC 71`j' );
define( 'NONCE_SALT',       'k|Uy7V0lL`JyTa)E&Zn-]K=>=blD= fV5i`Dp@3TX%|r_{n7K!/W6-.97$ ]?rR:' );

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
