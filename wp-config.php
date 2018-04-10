<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'elektra-sliedrecht');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '97808Virginia');

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
define('AUTH_KEY',         'l>BxgmgR/f~*`3w|!}_pIl&>BI{/F6IR2j`e(,5Wv;75<DR4/$|daw>:{/P2iPJh');
define('SECURE_AUTH_KEY',  'kq`hoM,6Hg:C?z>JJW!T>{5WOv!Hvb`Lj?MUa/ *uj2pg<zCig&K>U37a.){R/hB');
define('LOGGED_IN_KEY',    'R0%dm1~dnB $#OW5)_x(c@R8DbRFVh&v-Hj3?E/#ch=9%Wv^2nWIS5*lsu!ubzsh');
define('NONCE_KEY',        'u<Sl<,xJQ}#X,5aso{z)]yay?_dF`[F{GZoX#$8I3+Q@D7w~6Ns*=nJQS~J*m/`C');
define('AUTH_SALT',        'Cmi3.BcMB/1Fm{t+]Fwd7R}kocx){zzQ9jkk>OXy1x Isr`@#+U]0},cM{qU,O;u');
define('SECURE_AUTH_SALT', 'M;qBP& N]x}$~#U-Iqhincnq#kEoId( }@[#Dv~lP/6:=]K$*0:=I($@,WrkO;xZ');
define('LOGGED_IN_SALT',   'tKy;aKdOYnoZ/RxW6W*?BK<Fh({;CjVoB7h?$SJPn:,PFjqW{= ku d)#3`0!gu8');
define('NONCE_SALT',       '$R,Uppj`i>YNotxb^lJ|Z={6%k7?%h^C5hqy{Y<b5`$jG3+Cd8n~J$C-,!ARVF_N');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
