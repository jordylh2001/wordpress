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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '24e6bdb23795372e16b6999de9a8c4889004c83d928ccb32' );

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
define( 'AUTH_KEY',         'l$9 eP>1;xeOW8Hm,jvX{*|QlS%=+RSCwtPHKZYcsy-MQpptM8z(x+#B r`2[WWZ' );
define( 'SECURE_AUTH_KEY',  'U|?Hg&KX;=~@OdX8d_JGop+H$v)=_[.hNy7=$E[=J[[^w1kPgvPn<MC^G[Q.Glr-' );
define( 'LOGGED_IN_KEY',    'LDd^d*e-$pT<.)XD<g^;PB|y{u);OmW{V8MbVd>gE#0Jt7?,?ZlB>4@4F#L [?Ql' );
define( 'NONCE_KEY',        'mwv&A{8UWrqdmgqNTK*smR<^&F_a4QJUs*_=G&@5!i&sHV}7_^${YhcX+Mk8f_AI' );
define( 'AUTH_SALT',        'WYc)O6hR0k#S,II:TM$z(]_jHT/c?$bBy^5+iNfoF7b=rP,K&~%,JOU<f.Q@[0|y' );
define( 'SECURE_AUTH_SALT', 'u@g^-vl9T?4DSGA|p{)0z_C&YHlIXr)fS]-or;[rK_`mH*Z#-a<>jV>H^_4g!#l)' );
define( 'LOGGED_IN_SALT',   ';Yakwhgl/+ERT_`VVrz~ST{k}(?.Mzk~~~HBJga;W/J+k,#LK}!E*]PH5uRIvx$H' );
define( 'NONCE_SALT',       'gB+QJge,%N-r33/scnp?_~:.f:%6hU+zkm4~(a`qj 1Et|^&uZ5WaLJ4DJFfU2F(' );

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

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
