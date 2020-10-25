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
//define( 'DB_NAME', 'wp_tbp' );
define( 'DB_NAME', 'ebdb' );

/** MySQL database username */
//define( 'DB_USER', 'sql_tbp' );
define( 'DB_USER', 'boringuser' );

/** MySQL database password */
//define( 'DB_PASSWORD', 'jigJOS#kyXSy' );
define( 'DB_PASSWORD', 'London1207#124' );

/** MySQL hostname */
//define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', 'aa1483rg8vf5gu2.c85gcpu5zzmf.ap-southeast-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>6DIpu-l#4,s(cA6/8p1Gb+*X >+C,/;EwTPN 9IaS2|2@1+p,-W6e:{ya}++wpE');
define('SECURE_AUTH_KEY',  'e$]t^.T-(hzs@UR/A$+^:*=Tir}O8~X.ICp-q:nB77K8Ygr*i6x3{(qd@NlwJ#H[');
define('LOGGED_IN_KEY',    'WX %kq|#,ASq7pRKh8 |&tO8-jNcFc9FOn/uiPo9<09GFj68S6E[fd4HM_!qN3mN');
define('NONCE_KEY',        'AuC45-~31+y&T-uPJ+w[LN+l?/T|z-i8#V7.<w]&)RqB(xmhy55>/@owOPh]+pnZ');
define('AUTH_SALT',        'Z(2UG~3-q=(5wJJPO)pI|W`) JnoM,_1:*_~#aBY^y{VNE4-9%pr5k!u`e4KcT(?');
define('SECURE_AUTH_SALT', ' ItOoZMIG86SX,*j`a>E|,:YjU=Mga][ObF^_+49:0~NIjjN`CC<kt=w6WI&=h*a');
define('LOGGED_IN_SALT',   'au8W=RN[_+n;<:pLa 8Fs9#(!U$eAl3$Kx1i#O=EuK-s:,FwI_0!8jQlWV,m,r%7');
define('NONCE_SALT',       'JStd?o3jOrJA VPUpU/AU#M{W-x79G:)/7A/X+Y/l)QG]MGHMs=3*lw<[|nST*+R');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

define('FS_METHOD','direct');  #For stoping ftp access
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
