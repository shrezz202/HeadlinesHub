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
define( 'DB_NAME', 'project1' );

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
define( 'AUTH_KEY',         'wqUfs/7p=Fw48XBVT&XZBq]*5Z|&D/H9?m #3aH~9KW3)Z)e!myzu;arZEpE% ?J' );
define( 'SECURE_AUTH_KEY',  'A|IT8=<KuvIB}{D]X]9X>Q(]i!#>^Zc[],`+m_qd[)$P&&7N;5D6v^2ZJ]F58H@F' );
define( 'LOGGED_IN_KEY',    '?.DVSO6g/66F[CD*gYqk_sQQ}2E&_hZ6.F`n4:XS(/9NJYDcWa@B@Y&[ry0aSrn8' );
define( 'NONCE_KEY',        'Duz&(OF=hv!a4:la pT-.Rfj?!C%V?>wnfa_XR+TWp^c}}ySaU@uIDI;bn%cBf6:' );
define( 'AUTH_SALT',        '+|uynzL>MY?4%-{M_FAYG4[]UuS3jJc4N36Lf1ci?#`hQwZfWCI~jcg2lWV#&guj' );
define( 'SECURE_AUTH_SALT', 'QcL&y4F ;pei;7WcRjca[76?sz  Cg#uwmojc_IpjJ.c7^1Y9Lc,jtJs.#J}5EY5' );
define( 'LOGGED_IN_SALT',   'ETGlcHnkOXT{&y=|J ^8R7u~%l4M{N}J%1smPeEuV8O3Y`8A9/f,`/2) 3:|3s Z' );
define( 'NONCE_SALT',       'bB,GlF6WvnaK~ v^)]a`x:/XO+lDcX7HI|SKVtOB?($|IDDQl;wq`1I(QS?:a^gs' );

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
