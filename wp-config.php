<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zaigee' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8b@eMBfDYu:16Q|e*hJu0$0$7Ym/:.jQ?d<SI?fy&?fMSR-@q%K(j:2]=GkW|/Q8' );
define( 'SECURE_AUTH_KEY',  'tDd,`%q]Om25<%[9-XTw0S,q]`$$ 9(i)N,xnUw{lYT4JXR=<$|?}=smkoxtj^4M' );
define( 'LOGGED_IN_KEY',    '(#-:Wmz-}}l^98Od@S10`=;H0=#{l-VX*Ac<w<434?)GAF_j2ue}py%)+[ax]Ew+' );
define( 'NONCE_KEY',        '5*=gT9TtnT tDg.E5*RIumHh+Ieb]v}TqGY9m51|`3hHh_)KJ08TA}X<xDQ&,,u!' );
define( 'AUTH_SALT',        'od1f/Qp0M}IXIl*zES87>r|luQN`$4zC:hM;XJlv+Pl4g`uRJv/`5erzpMuKrHJ;' );
define( 'SECURE_AUTH_SALT', '/Bv9v%M|j.vL.+|W/$<Fe|,EtsVHqSQ-Mb]!<}.Ksl{8Tf/ ZMO0!8QlD4FWbr6h' );
define( 'LOGGED_IN_SALT',   'Co_d@SQODY*Kk`[)5o]z/?jZnUZ#1|@Rl|WQR:%Bvu8>S;if==k^Dgb46$892gfD' );
define( 'NONCE_SALT',       '^ftX>ELDqGZh:msBNwwQ0Su<t8Ow{5TzPV4j$8S8 vCN(`$&P5(A4SBVquehtS`E' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
