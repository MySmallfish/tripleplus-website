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
define('DB_NAME', 'newTriple');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '7O+1 iH4qB-w|~.7@-e&8(sTo;i/5+YM6~:gNr=qH8.s_EAQ]iJPaoD`elW-}Zhp');
define('SECURE_AUTH_KEY',  'P|/}{_%f}&uvLKHUg*wW<0THB?M`YbblQz;1Xw|/+e,O/+P`G/;[h1w[RtQEKnsQ');
define('LOGGED_IN_KEY',    'BnAW68 0o%S=s}6)+4uI~Q}p0w3Uwybr-:NT1B%vNR{u%PoJUYTGtsMhqY|j:+Io');
define('NONCE_KEY',        '$^lO<_([y.Xi`gUSL)]+(&_;318P|~*|#P!}b%(s!)H;X`Q9Bl-AH+:ruMzM@Xi-');
define('AUTH_SALT',        'Piu4<wgeLDu<]w[!4$}Db+{?S`tuG$+6Sk/Z`:v8PqZ;Zb79-A>/+W^~:z.++G+D');
define('SECURE_AUTH_SALT', 'fP6<Hp$>GH`.41SeX.d5:8s^<P4mPT<`.$?Nwoc7||2gcd+Z%{Uye>4]`hXaoYKl');
define('LOGGED_IN_SALT',   '3_j~--nH?f=ur#@KEO~-H.->4R/{MrL+Sf3g[L8+<e9Nz>qEZH(cYICd-(#}t<M|');
define('NONCE_SALT',       'NT#K-[#-#71v@_y(w5;8.<1k G_x-tTjFj#0|?|tToxY^zKIq2CT(FH<[-@|r[k|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'whp_';

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
