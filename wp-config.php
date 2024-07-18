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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'staging_treerem' );

/** Database username */
define( 'DB_USER', 'staging_treerem' );

/** Database password */
define( 'DB_PASSWORD', 'JbTmsRLT4NbM' );

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
define( 'AUTH_KEY',         '1GFJB[</j:(u(Uzxy9})TrqU`J;/4D>+|q4j_ON]y_uvDy1EvHJs{nrb~.Dup];<' );
define( 'SECURE_AUTH_KEY',  '*-+@(l@$W f%rO}k7l}ZH7bE!EwW~X[p:#_$o]|hJ4sY}G|U}`V!L;>%Ui^?(%B ' );
define( 'LOGGED_IN_KEY',    '~v-3uQ`Q.#N&E,^a3Ui@ipc7@p.O>#)0^WNi`P5^Uir-lV4sJ)Xt$mG9:^9x!HaR' );
define( 'NONCE_KEY',        'qa})RGtMy{yMEi%l&9L([rj2?b@lo)%+bUSq` IF?` .qg1d*EbNLpY(f(]mpN46' );
define( 'AUTH_SALT',        'Mfi8HYav/8oW3Cj!YQ?s{]C&)f1lMDg3JBrCZ-.,.srFL~ 1D3na_4aH[`K*F<`w' );
define( 'SECURE_AUTH_SALT', 'd_4C 3s<5Aq5fXdS=V>J~rL,{q^}4#$f=He,~k!9Hb^elOc:iRLbhw-|w))5W0.V' );
define( 'LOGGED_IN_SALT',   'C-mfmC[,7=^}g.:u_<fJW}SA8 O6e%%%):3WXz7|3@Ua(-{#L=7Ev n`16GF[Ie!' );
define( 'NONCE_SALT',       'v?p.1f1;FFcCGg80vhETGKA&:8Pr/pbrj(rJ(`9@%},fujEL6`Rtp3Kz]i)Odc@^' );

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
