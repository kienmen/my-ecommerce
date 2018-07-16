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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'k+TG?Yr)j,0>(&`_vJe%jk_stl_U![ eYH^eW{trQG5cy)@`)ryo(Ra`.=~{Qt!N');
define('SECURE_AUTH_KEY',  ',,NsD0o,]chp367d|dr x!k/M=2&ADCik(WMnN#yms5ax9Ee01%5l[M6oT ,,cIM');
define('LOGGED_IN_KEY',    '.jvbDn(5s/(?6,U`z7.pL+4=l6=%u5w6x}u;0*_)]<Q]2pz44~qX)Z@Wvs&)KlF#');
define('NONCE_KEY',        'Ve}fJ Z<b,j<,NGLL- Q/5TSnD5B{UbD. Wv;u2m61w-*|!O zCwW/*pDTg+,>[0');
define('AUTH_SALT',        '`!rDR!fR(b&oHL1)y&9jVb&R[7*<gihy2z<yB,8M,`;uq-2 tuQvqt{ k-VJ(t# ');
define('SECURE_AUTH_SALT', 'DoW{t{_r~rO6o7)l/{MN*cq)TkOi|#;]l)%bj%vs;I2+7`G4bR.mJD(JX1^~]0:N');
define('LOGGED_IN_SALT',   'xA|{61?43%oaxCzEcEL?wJ4HJ)C0n7yYs3/EzW-8>-tqYD2h@LO96sNaxZ(h|_k:');
define('NONCE_SALT',       'c8bqEY2wrm~MP@V/e60N.anxW&e4*>]I3$A2q6ywv8;R55X[jnYUU@~Kw@$!>.Vo');

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
