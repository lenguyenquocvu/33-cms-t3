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
define( 'DB_NAME', 'projectcms' );

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
define( 'SCRIPT_DEBUG', true );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J]wmq N3ijaeKChnAV|+Bm>;YrqsPI0zv60w8hAZi$~s<EZ o>=%6r74^}=)oRO4' );
define( 'SECURE_AUTH_KEY',  '1AeE^I1Ic/$AL6S|3xEO?Q:O}Fqy%|QQv^!7_^Q^P|tN]*[3)a%%X~,:n~5j(lbS' );
define( 'LOGGED_IN_KEY',    'XQcJK?8P0{Ok`Jkxw@&Y{@tdUF$78PLu{WnCPM90`7%:|%4q,>]L3vL;(b(ZomWa' );
define( 'NONCE_KEY',        'Z9qv*ncw+]$;}ocA9e#BpxP[x[I Dcl?t{:YZ)O*9a_B*KtBy5DMuT,)7E]XX&|{' );
define( 'AUTH_SALT',        '`fI=}4<F<gicA&6Ux?sK]`aejSho!u%TS1+>]fq(URs[_cdHk.{P;5{ ;hI*JO1g' );
define( 'SECURE_AUTH_SALT', 'A~#d-SCoeA_j-Dx]R3VoiChQ?i~2[=U9`%0s#AY;0BiYUnfPkd$|B$)&g7(JC>|e' );
define( 'LOGGED_IN_SALT',   '/d*W:fvZ?jUWquBkY8a=713dk#Z WMplz. _Y<acML~ZMjq*[~+S(-wkDOfO:6w|' );
define( 'NONCE_SALT',       '1?(~xcpu=qN[r,cn^dc%tFHGijUFY^sHz42OPF^zy=D-W uY(}Atz1]*FSor>?o]' );

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
