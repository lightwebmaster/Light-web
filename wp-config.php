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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'dFMd&RuID9cgu*A$IlM7Y#L[Ny_egwC1#V^^w7^6O3!h:4FeU9uy T3u<Usp-F3@' );
define( 'SECURE_AUTH_KEY',  'Z=(>/_}<[H}0DYeE-ppC:mIZ&rds5`mmT7Z3%Crst`ibLEn4wz_5%Zx((&o{i8h1' );
define( 'LOGGED_IN_KEY',    '%aK*xE5~pN,55+-Sd]Z/QRpkFQ<46Yn^*}/4Z7`ld3RcfAie1E&@k~`0-w[Z3{u-' );
define( 'NONCE_KEY',        '/JDG[pU*+)Heh$qm&%4d:C;uEN,Njy}M4{ECglXP{iyNNTt#kbMP-Yq*_C9&/8 &' );
define( 'AUTH_SALT',        ')S)abi|1zEX.w%:>;%y3Z/w%R/k[3kLhqHWSnvB^Vjm7px&{@xJ9n-g%u:QZ:>6*' );
define( 'SECURE_AUTH_SALT', 'v,RfC@^9eeC>>MOM^NvF|oO@=pPy<E8^`]EtbIyZBUFM`EOV 3]{YCxZp&R}g-=8' );
define( 'LOGGED_IN_SALT',   'Fq|35J3FAKry&b%Bk575x6qwY6/>ua#x4n=G,kB_4LcP%hCG k+;R]QZ7|CGOm&P' );
define( 'NONCE_SALT',       'dJ-<;{)?pa1p^Fq1RN]*Sq@f} I!(ck<29O$$y3f0*Wo}G>,8uEgQw?C=!Q0/xKt' );

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
