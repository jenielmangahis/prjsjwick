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
define('DB_NAME', 'sjwick');

/** MySQL database username */
define('DB_USER', 'charles_root');

/** MySQL database password */
define('DB_PASSWORD', 'genocide777');

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
define('AUTH_KEY',         '#Wza[ _:+E4XO]rn*k$<319Rm]YT@7:k0aVaw4TDE]Mnu{#(;/G5M*0tP}jJa:%T');
define('SECURE_AUTH_KEY',  'h%y[|i{gG]%y^`/:b]L!<tBfv1F|JaVnk^ar#R[Wv54&E)t<-hOJ:@4#tH=Q+[mr');
define('LOGGED_IN_KEY',    '5MdBMst%?DfuKg9ibcA<(RnPUKZ]y@gmVt?nA&_aAIsLgf*DNC7[q? aWmbyu/.{');
define('NONCE_KEY',        'U1Oh)=l1VHhl5,/%U?FNtFN|i+sUDq#hoH<W]UuxP|=c8#bt4)MR^W#@ajIIH[Cp');
define('AUTH_SALT',        '^E:ZMnKTwta]BK?<:4&?`Y7Rw_zXpW[i(q2+-y+eGWc}r^S+i`nsx>9W<D4f6Oyq');
define('SECURE_AUTH_SALT', '4@&JjGepmXS*^nbg59jOP`M_oF@=sXQ)E(/XO]B7fl]W6Pc4<vPOAt=QS|npENAB');
define('LOGGED_IN_SALT',   'n6f+g_HvU`ug!Ak6ntMb98T /pFA_*1:k(r>r Dvw@PI!7;m85J6+$zyjyblK/4a');
define('NONCE_SALT',       'PU aW>#?JDn@3qvyzv&|<MmO0|VcRS8W|AWU]FZ&p0Kn:j<LvMybO*n/&?W]%]*G');

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
