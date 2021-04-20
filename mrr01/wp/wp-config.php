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
define('DB_NAME', 'joycaree_wp979');

/** MySQL database username */
define('DB_USER', 'joycaree_wp979');

/** MySQL database password */
define('DB_PASSWORD', '6)6.L8pp2S');

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
define('AUTH_KEY',         'mggznnmhmvvl2udayem2lnetjwqhctpax13oq4tuptagn5zs8v2yzpo4og6ndaep');
define('SECURE_AUTH_KEY',  'jklzklujhfte2qnpnvgenw9sdc2ecoqtumjacpcdx22xuj1iegv2nsyckq4pecwa');
define('LOGGED_IN_KEY',    'jsqgz4son23t2ytejpt8v74mtvf8orepnhlivos0kbs4ltfimdajdpocwllhk3e0');
define('NONCE_KEY',        'gqubjxtthgdnyxdcfrva3gugke7avc45gdrkdeukjl19gb1jgsepe04lqe0cdcsu');
define('AUTH_SALT',        'cro27mjga34jbxxfdhmependyefqn9zkxtxwgqkq5uozeiulq03kx1gazaxyrfjl');
define('SECURE_AUTH_SALT', 'vbdun5wlkip0z2hx5ni1jsfz2wqixtumoz9ak1bjv61otepjk7jlfwlq8od8l7jb');
define('LOGGED_IN_SALT',   '5ih6nop0gcgepksz5sao0vsy6gfitwxo37hk1d73s68m0pjib3orifyxqqgucncd');
define('NONCE_SALT',       'ui9u5lcltknnbdn4mrlzoughd81mrtasiuiobk4hl9q39bczk0i1uylrk446kbwq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpyn_';

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
