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
define('DB_NAME', 'moja_baza');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Haslo123');

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
define('AUTH_KEY',         '^8r!TYZlPa21w&u=<VTZ|xO$Cx]Uj%0P<!JEG?/W]}|A-VY*52.8Cn{Sp]6;![_D');
define('SECURE_AUTH_KEY',  '=f}+vYT{4|]WZnfFP^9F#y+^c`Ddv&uoL9Y-*k),]SnhA++@!KK?6zO.G?p_Nfqp');
define('LOGGED_IN_KEY',    'Z+)4PwVgFRS0rn-;:ZqaIQhh3>zN>l+/M$zUuUnq(C550(KD>L& <)=DGx7@:9Zs');
define('NONCE_KEY',        'cyZTTZaa|<0KEcmghd!BNiS<?@(C>Xw^AF1%_wC#8Tj_Mg|;F4;i0IUZL:=n<b}s');
define('AUTH_SALT',        'XDA}DivcvxJXTb4N=K7-d)g>s9-fn*m(IhF#xDhbNg8`/$lIgc-;m7ZEsGNo}-&3');
define('SECURE_AUTH_SALT', 'ZoFna~v/!C^il9dmj EhUHT8$q]lMEw&V1[Ff#gud;HL?I%%53-v<0Un:$S)R/Uq');
define('LOGGED_IN_SALT',   '8An8w()ew8ByS?xbfB;zk!]-+dQ~I+,-~vB-8S}Uu+~wPhvxz7yI^v ,l,v+ODa*');
define('NONCE_SALT',       ')>wXyw1F*KhG?~(Yqf.UH*pQL$.jq6lT6po7W19HSHvB$6lSmRxidu:&^J;gf$D2');

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
