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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ai-blog_db' );

/** Database username */
define( 'DB_USER', 'admin-ai' );

/** Database password */
define( 'DB_PASSWORD', '1' );

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
define( 'AUTH_KEY',         'B2^iDj{}GfCo;%w~AbQ`>>Yqo}Th?2DkII_^X=eel#xxMKRP|2e>X`I>=~A{v:,~' );
define( 'SECURE_AUTH_KEY',  '{lu[dR1 0/$r83a#F&YzTYdNOq;<,0WdNAOPJe{)dv OgYa^n{9^3!,6+fdO|:8B' );
define( 'LOGGED_IN_KEY',    'j$v4@}7V^v5r<BBfD{byxAr47pM{-+/*y!t=zn8l$)*PsM($+&}) /_ZBdjBu1F~' );
define( 'NONCE_KEY',        '0nWZ_T$@H15uQo6V?=6(oZ:izds.VX.>_7$@!i=FK<4BTL~+QJ(uZeAgIWhAxa5{' );
define( 'AUTH_SALT',        'jPD7Tq~]}YxMk9nRA,ihyC%MC_4vSe6XgG&2v&[Cv6_Mg(&aN(4k$[fz9&m|8b|D' );
define( 'SECURE_AUTH_SALT', 'qb_N|RUC7A-r$@<?n(md7>ztN{/nC^?VLOh9`I >xI>!G=H2-EtyZLi?QailmMnO' );
define( 'LOGGED_IN_SALT',   '8&?,=ybR&kHGimsj+p{DIvu1VnV>co*lf-Y,6,H*HT/7?cPW}#(rO#zncyqbgm{M' );
define( 'NONCE_SALT',       'DLyU4X8<FY:r~/aV4#)fQ2}s()-;,J{<9jC-rybkQO;IoQ8A8*k:z_GJ^AFJl(!H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ai_';

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

/** Para navegar a traves del proxy */
define('WP_PROXY_HOST', '172.16.2.4');
define('WP_PROXY_PORT', '3128');
define('WP_PROXY_USERNAME', 'mendez');
define('WP_PROXY_PASSWORD', 'MaikelMen*2020');
define('WP_PROXY_BYPASS_HOSTS', 'localhost');
