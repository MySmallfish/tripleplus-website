<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cdb_8510ad3c79');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'b[SNOwc4$rYs;9qgar5u/0`:^pk7w+E4R*xEagEDK Cz^3h2n8bh,yjx&E<^M7XT');
define('SECURE_AUTH_KEY',  'mPydSaSp@DNP.GbgnbkAwFNk<$^<hi8}N`b|` f!83d.`B)Pd;f&@IBE887n(e#]');
define('LOGGED_IN_KEY',    '8|,c|Nnwh6,P>Gsn4_LkTADZAFpS[cfSdXf6w_VV4NzDU8E^}z:{VLlVE*v;tNd}');
define('NONCE_KEY',        '}G07&))^3aKw(|SX(y5c2@!W#[xZkxC-!|8/JDh D%q$P<+A><R*0?L9r~K7=LX6');
define('AUTH_SALT',        '^)Km:y$Yiw/0hy RxFpOuW|WC798>SZkro1XRyyCRNKz4F}S/d]xCn`G|C<WkHi-');
define('SECURE_AUTH_SALT', 'T;O*dY Jj?V>Eb>nLT+DE<.b/,wFu=-1>Id(|Lk-X&<9TpwT`r6?,4Gfq44>p+me');
define('LOGGED_IN_SALT',   'EEbGL<lbfg?v$k) /xJj^Od>+x* )sb<$-)piWi*j}ATHeu2:dy_237b5ro;H+n#');
define('NONCE_SALT',       'Bf6+TRk2$%?-ztqW(L}AO3~|v_Ge4++v;^oINB|TN<5|Ww`<Q2BYCNw-}JB}^0dl');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
//$table_prefix  = 'wp_';

switch ($_SERVER['HTTP_HOST'] ) {
    case "tripleplus.io":
       $table_prefix  = 'wp_';
        break;
    case "es.tripleplus.io":
        $table_prefix  = 'wph_';
        break;
    case "en.tripleplus.io":
        $table_prefix  = 'wp_';

        break;
   
    default:
       $table_prefix  = 'wph_';
}
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
