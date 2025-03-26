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
define( 'DB_NAME', 'karavaev' );

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
define( 'AUTH_KEY',         '&_2?-wu0LzNeg]I^f4x9OQ89e&w/y`|egL;du+C.I>17?i,pz3`o`c(bO;.D6cOp' );
define( 'SECURE_AUTH_KEY',  '9zO$srmZA~w_l84yd!owjMc%>E8%vBlr[CJSpzn!8^LCjhwD{w1;B&F1mszpoVzS' );
define( 'LOGGED_IN_KEY',    't7^9rQs]:K*{0Utq<&1*3uj=[k MRx.tFp{e;^X^Q7$;or^3|yvKthh}M4?~Uyr`' );
define( 'NONCE_KEY',        'Ahm`DG(;TZA,~y)xU-?raaNqMBN2jQuq/DqeBC8FRW~hI.25LW#9r^eCg!)$G{N9' );
define( 'AUTH_SALT',        'AoP7Q}!tv&/hud~KhmT&qpJ9=;t6#P`<r4kxA;d6&Bi,Z$[[?)d0gl<Ae!zQ,h^B' );
define( 'SECURE_AUTH_SALT', 'tQEV|9R$3Fh*}Fp|*Rga?N3C AUJ[VV:w-~@&)-Xnqhf,+]$EN&_Cs~]d^O{;g>-' );
define( 'LOGGED_IN_SALT',   '4-K%HBw#yc/IEGB#3N:mx$a6|mX`0AHCzqI:9I:O$bn}En}-=jX_Cw7d]Q%UBRDv' );
define( 'NONCE_SALT',       'SOXOh8X9}]-*%.l ):mK@Lds#)pTVQT,cB1A|]]A]36N() &8q$mIjp_Yz8!$OHE' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
