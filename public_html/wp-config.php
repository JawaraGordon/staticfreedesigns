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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbxgwrozyzyrou' );

/** Database username */
define( 'DB_USER', 'unwtkiswdlpai' );

/** Database password */
define( 'DB_PASSWORD', 'dyu6oqygyebh' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$r+U-R6ZW]8:4x}Yi91.?%UC!]jlv->{`%bx Rm?Q2KKGQgTM=%nPB %7gBE~|(I' );
define( 'SECURE_AUTH_KEY',   '57FnYWFNkh;a3v$ 4)WV1x`]e,6I63b$+Ym^f#~hF%xWT-orM]7FtWadx`#ZtJ9]' );
define( 'LOGGED_IN_KEY',     '7.>8.$({P4@:5e/?+<|kf}uejO]2U$D<)HgX[[jGm.F4{$ .ngc9]^*9)<{qk=F6' );
define( 'NONCE_KEY',         'l ypst$e?WlYJMR8inJKFbhk)=,svXc@}sg7~/Rs8D*re(.2MFZNr@j6GC7&)^tD' );
define( 'AUTH_SALT',         'CjMi9p+5-t]nKO]lN(c_wh]m|?9JWMeRBIY*XS KUTc>`v#(.M}z?evdw` q/xD ' );
define( 'SECURE_AUTH_SALT',  'T7Q[/0+q+,FkDKpl;6y]T4.81o1tsWCBxwZn[pFSM}#Bo1nxL6xd{%32Bx9,m~i5' );
define( 'LOGGED_IN_SALT',    'w@46(:@e7D%V**JvC5T]N[*B<l],g0! sNtfo5GMdL)<(>aP,<=#1yY:+*Kv*D(x' );
define( 'NONCE_SALT',        'C(MxwR.N3*uGonM?PbK-s`v^=;s-jKR&|,fNcT97lxbIAyvzY=?9`m*<-CfQY]][' );
define( 'WP_CACHE_KEY_SALT', 'iELO:ig*Q NEMhZ&}XA~9Gkf@;]w$A@]?sT ]5g8)cA63Ow/r]+<ZNOvL1qtK!,s' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wil_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
