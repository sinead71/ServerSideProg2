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
define('DB_NAME', 'SSP2wordpress');

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
define('AUTH_KEY',         '2HAuQXf&IHIcnw jWi)AV:xtr[/Cs3X=O<HRzC9K{P9`%6$yqe>>x]p{S,7Q+STn');
define('SECURE_AUTH_KEY',  '>lDLV>!C-t}uvTB^pfw66do+|HwhX#i:3tQT[;~,L5?l *p=P:<#St#/Cz&gBQra');
define('LOGGED_IN_KEY',    'Y(7C@#po5@<vhxI8P[w`I?rxh%!QC{]N84v;x0ZBXQf!Y%F8u;iXUJ?[=7~XGg]7');
define('NONCE_KEY',        'ox)nYtb:b)-YgmyPJ6b]Js$yTmW?ql,__kWZP4nJeT~2A%@k|<ScueP76@jHq}@|');
define('AUTH_SALT',        '*5p65-;HfY+ilFML!`?:<s!hjKUs&(o{?uIlQJH+IicP:wO#XG0e=1Orj<?L](dH');
define('SECURE_AUTH_SALT', '`Sp#okxQWbsml]aksGtEo?QKW!sZ<8Ve.8fx^<(b_S4rE0d yD03$eDr|%P~eZp*');
define('LOGGED_IN_SALT',   '4UT?oO/%Mzxa?o4]2PD0~Qi2 HQ`d!*;f2y!m*Ks&]Zrt8Ac=8Y 7Clyek3Axia#');
define('NONCE_SALT',       '+/aQ{d$h-MJF+|fqaACR1&!Kfs)&,J)5#/x;QARnIv(rqK6sqSLZBM#kxc>ye/O,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
 
 //if you want to see debugging change false to true
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
