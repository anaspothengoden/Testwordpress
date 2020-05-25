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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'cV`U]~L5xj%_&2I|ZLGB m+~|3jtGb-f`oA[q#pxO4KGem{$k5>uQ3AqUf,&#,YY' );
define( 'SECURE_AUTH_KEY',  ')p,XEqr#2~>b=#0BzTY|L[3m(R`@]$z^,B$g#%0iQ8XO8M)nMO4r76LPK2.lw%V^' );
define( 'LOGGED_IN_KEY',    'Ghb0]HGLH>Zaiajzn Gj?s+#,*Ls+nU;E9II^|ObM[S+l8}|VVXAtHSDbklsIR.l' );
define( 'NONCE_KEY',        '@:;&2=8r4dp[.>]@Dg|?SMb(-!#J@&%X?%n<z)r8cND28Yb#kpY0_3P+(5*n`?U8' );
define( 'AUTH_SALT',        '<BE{/BVN1[yK52{*l^|AHkcie6,=VdTgaU_P.C7#`g$R( l~s-$lW3j`V>uE,HP[' );
define( 'SECURE_AUTH_SALT', 'FZ=V1Oi3@Q-FkWuC&YD:K*g_lO3em9JxMY`kLSc?-jJAMNn)&%6&]9AhtC-PB%,#' );
define( 'LOGGED_IN_SALT',   'ym1)Xh-x*Hjdae)!Vj)Ds,.Xi|M|m&3&VYpT[^eXTU0$o6:S^M4H}NFy:0C EDuN' );
define( 'NONCE_SALT',       '~(6o%]$g3637Y6]a--oV.oxbp1*_^2Fttk<>2bXvO&0p:ipndINcqnDT l40Xod[' );

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
