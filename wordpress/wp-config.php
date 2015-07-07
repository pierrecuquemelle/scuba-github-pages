<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scuba');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{s4V-mj;,pF7a]WP[Kl7050gQ/;5>]An:)(R--au/dM,-oHgcz!M)Y[.|1TB?Qlx');
define('SECURE_AUTH_KEY',  'xq+-u,JH50<`0K-gZ]x`o1T`T4IEBtjX,1QFL~)q+{VNO1kKsUWA@DpB[vw-j@0K');
define('LOGGED_IN_KEY',    'uv%SmFIYH/}[Q6|Q?,ZZaa-pTm;u)v+J^vjz?ovKCvc-BM}Q|=X|)Ov+;B=%1EyI');
define('NONCE_KEY',        '.1.]zBuV>/ELV.V17N:|j4TF}[7oHzN|sv]T8DH^#]P<#f~]~lpc]2sx8:6a-aKA');
define('AUTH_SALT',        'N~vwp.=0Yx/AkP=Ji Xhs0[rS9-4ZO x2v+ICs2{0-+|$+yOc/^3c#eY[gmkokIJ');
define('SECURE_AUTH_SALT', 'V.P-_ZA`r3@F4WIpz-+}0;g*R?u9y;qRQ?CvEECi] 1>Up>3AK)R^wYDRDt rE=r');
define('LOGGED_IN_SALT',   '+V-w,)igzWrV5ttWT^-ARTz$fCXo*&hyXy;1Uod+Ne~aMp1BoMgpo&[pvxO=nhNA');
define('NONCE_SALT',       '-e(&#[*Ux*s5KH+zWA|Md&$/F/fcX9I}5X7Z^bNsK!{|kB(|]Z4+^|-|Wf]pt4nq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
