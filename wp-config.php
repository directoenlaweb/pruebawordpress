<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'prueba_wordpress');

/** MySQL database username */
define('DB_USER', 'prueba');

/** MySQL database password */
define('DB_PASSWORD', 'Hola123.');

/** MySQL hostname */
define('DB_HOST', 'ryziyt3t1o.database.windows.net');

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
define('AUTH_KEY',         'Qs#G)]e-I/a`5K<@$`Esmud`7HwAv+d2o0/gs+&a$m qu,{*+,(ycN25-kysMG/e');
define('SECURE_AUTH_KEY',  'tnEwG#P<-WZ8r|X_G`:OjQ rk5ea6JN|warzxV_LC2{+-I&6&Zxk%loj92}u__rP');
define('LOGGED_IN_KEY',    '0BNsE/jT5;YpNQ<5I3($|x{(+d6VmZg B(#}Hs(|fcd+D?jGqSq+cFx8j7q>Tvt`');
define('NONCE_KEY',        '2i !-jN%QcBabz,+m2X/PhAt?/O_eB0a,g,kyGqBFL6Bl;|L|H->eQYemE{{R|)M');
define('AUTH_SALT',        'Rb,?96kC`skT?>MIL{mk#:$u5DvCAXV`nM4wHZNaHjxg(DT=ap1Vy Du+F%k$`^X');
define('SECURE_AUTH_SALT', '}gOdU,Yatk|H_egBtz$(nt[6b1+QYt$D]#:$]>X-*l)ZIL1@NxfOQ/3V1cS7wjW,');
define('LOGGED_IN_SALT',   '{]Mya3[>J/H#9)[7):gnK6v:)|DxP(>Ea,UM .iu&2_nU/1=$t%a0`}^e6CCLAxP');
define('NONCE_SALT',       ',-lOJp1o_V_Rh?*dw|$+Q+n}+FIHa+,2*?7y8FRUI^;[byKB-#7Yo7K(gYhj<Jzg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pruebawordpress_';

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
