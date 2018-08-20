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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PzQ&i)>z#;;-%jol./dFF6iyNu0z!sLo_>|!j~>0J7VgmKR:&sBm`iTcSP/Qt~rC');
define('SECURE_AUTH_KEY',  '8?w:-NgxYVUfmX63Ep0^0p{ dcXu9w_r.xv^<v},/,j]RL7K9m}^rpNJev{F!=JG');
define('LOGGED_IN_KEY',    '{T}?L/1}s(;bLH0c?xFu-d`LMfa|Nos$|+f/-&~t==I^|)/sIA F}]rIsKdN}8:$');
define('NONCE_KEY',        'L0m3#Vp8s61wC#AlNc5r C]4a?Hyl]zcG<,Rsw0ovxx_d+KGJSr9!z& <!9Pn`:4');
define('AUTH_SALT',        'j,]qH--d=; c1%r{_!fi{] lrjE1V:.Y2!NLMMr} zq[+jGD0 Gmq1|UysC-YgA(');
define('SECURE_AUTH_SALT', '+N1q^.ROpi)I(Du,~B8U1rgROV:baUophoc|xWN?vGT[+H+wX*$E6.xmqi}nD8B~');
define('LOGGED_IN_SALT',   '}i@|qjI7R%x#QxRB2+j%=t) YoZEUwQ_| _ZfCRQElyBYP8E?/E)tWuxc.R:f?x=');
define('NONCE_SALT',       '?RegW.@OgVN>GfPH!f?WH= x^E((;gJ5*Lr(t3z|9V{2N08Ub4>Xq!d6OF{y|#v_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_wordpress';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
