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
define( 'DB_NAME', 'content' );

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
define( 'AUTH_KEY',         'xHUYN>y^ g]&*{tLbQQl3fX TabP9xznJSN=x)*y9$i<t>u !H5^IsnK6i]SwoYn' );
define( 'SECURE_AUTH_KEY',  'kZgv!xKudIwa{+C?Rg[L-R%$!a:#uR`0$`^P+3@lQcx?$p+x@f~2D-q&cOPBqNRO' );
define( 'LOGGED_IN_KEY',    '1Z.6ozW .[<D<6T>1kw5`k&^XuE6!B`V&M-GxWjYfnCSb&D%5g6?2QtlxOkAX4@+' );
define( 'NONCE_KEY',        'iGPZ(<n8}X5G0TrsrW+jh/ULa_n=:.Zcc@;c6 mVlN6.lFR>yP,)lK{DF0>;Y@(t' );
define( 'AUTH_SALT',        'l4/[fP-QPOhF$xr#VXr9^:]cJQ^f7I{aG77hq7+Pp;=^fOk{H)5=J)UMC-fiHEj1' );
define( 'SECURE_AUTH_SALT', 'A7fuI-k|j]mW<u{4C%Q~LtUZcyEH|~PSnLbh<-NmVs/AC~%wO(+AuUuVB^dQAP-s' );
define( 'LOGGED_IN_SALT',   '&q(8hng;?daBG/Jp(7RlMHE+3fvBY}aQ|Djb0H)j0#v@w(,<+vYzo79@G]Ga?U!Q' );
define( 'NONCE_SALT',       'D-(h-r N@z>]L~p`WJMFrnc]3s1k:wqy,P?[tsA5vqD<ewphb]-)X)36p;B41PP/' );

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
