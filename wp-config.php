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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'U+gY!8%g5qItAC2fr5P+he:F{ZtH&,tV|d5Z$Sg3Hf#`oAqAEFM$^# JJzQ, t>Z' );
define( 'SECURE_AUTH_KEY',  ' ]6x*Q<RD=pf?Z+|nS=KEbjuY6H8_C2hxO+Vc&nT~3qT0YlAh2}@FN6TvRuDnd2%' );
define( 'LOGGED_IN_KEY',    '>6lwwH=S2oRpdFc6Uq34fh8dt9^,?M{0D$>?4irCkj:& lLf@ #BE-bSq6qDo%G<' );
define( 'NONCE_KEY',        '!L(ivWz&uM8sxlQOTaF%0%-u&.Ful+)=y1?:801V3L^WK7PuR3b00%PN/=Iv />A' );
define( 'AUTH_SALT',        '>VmeXdutBBUYB=60s;<jP!.VW[XC3V&4Z^_J*x; ^iVj&K7 cOi^N+5=Req#~6Vr' );
define( 'SECURE_AUTH_SALT', 'fb>v)z7d]QEpi&T//qoH|XIwt#z$zz|]FdHAO&fW(HA6,LNgsQ&y.I5}M=tiRX+y' );
define( 'LOGGED_IN_SALT',   'of_hZ=k+j0cqVxiIhrR5GK&n8EWfQMkUp:g5:}`C.}TAV7RPcy/~sKIJ:o^]KwC?' );
define( 'NONCE_SALT',       'i~zahMM$[|l JHM!G0QIDT9{=bV[OxJNWId?12 53knx;&^jF4SGrmL_ ) YRYRk' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
