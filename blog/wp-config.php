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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/blog/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '1rOiRf9G7J');

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
define('AUTH_KEY',         'UsKOr{/W]*6(UA?B_WMU6>sT7u*/%r~dLIU,{sk4~PVSUVtQ#J^^:KyxC![e<er5');
define('SECURE_AUTH_KEY',  '9WC12k8P5OIp^lN]@OuvIo[73@;VNnLpS_OE$mL}8ql6vX*Qa7%)+z=n~N8JBh@+');
define('LOGGED_IN_KEY',    'sdQpA:M Zk_5e*^h:YjL[>`p)wI1>n@3%5S86&VU2{XC4RviM:FwjJG_@M%?ym9^');
define('NONCE_KEY',        '/L9aLhW%GvHSa`U9 aE@%DI<K|lKUg:=Ay{@W:LQ%[xj[9Bjqf&_5;cD.=e-#[0E');
define('AUTH_SALT',        'FT|nTo3w>x@0[9*IxI0!y&yn%Uv8Gcz)h-Y{Z%_YSa^0?$QO`+Qfw3yC}]wTDuM3');
define('SECURE_AUTH_SALT', 'AH-/q5RdI,v$[Pa}MCum$IalNg;8DcFJ,0wY(d6iq[$D[C~LHnM.tPkPuTp$^#nj');
define('LOGGED_IN_SALT',   '!=9(E8GM!iio=p!Qh77_suwId#Qz[X{slR>rCr$9+KF}i+55?o{Pq*7Bl,q(#4z`');
define('NONCE_SALT',       '/X/.;qOo=G9Y<dsmAy( >1a!0*7m.b?LX,{w2U@.r2+G7#30u;h|/: S#I.[tVrD');

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
