<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'untvportal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'jeth14');

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
define('AUTH_KEY',         '7Z%*~F&}tvF.qm%-[Yl]tpIg_SyHKb$Gt]iC3Y@^uy]sHDJ4b<fTNUC}4ASc/m$O');
define('SECURE_AUTH_KEY',  ';lv-xdPLu{i1RPog=xD9Bs]4E}6_w(t3LvuC9:k|@-SQ[|,|Me-_4ww /S{a]TwX');
define('LOGGED_IN_KEY',    '}<fj|%?EOe&Fg$V>lO3#BK-Dc`s`k<+slrj[+<n;BOwK^0U^Ni02(;g: 9%{U?|?');
define('NONCE_KEY',        'u$n_zu>PdJLyuOkiQ>%;b`# YKY H@#pGY|RJuJ`iRL>GrEFbT?DLcohb-C>j(BN');
define('AUTH_SALT',        'J@:)J=5f[TX[5^uGZ7|Xl|8O_vphbcOCnBB|TpV#-^x1vZZTa-AcG(V_bBZ|o_e+');
define('SECURE_AUTH_SALT', ':?o$~SS+DQT)jf<b@d#q49K{}/hp@e;42DY)uBf)z_ACZD/Y|[T,tSZGTPny*KDP');
define('LOGGED_IN_SALT',   '|`F[w-(Nzw-biTPH-3CG,eBO4=:M$}M]EOKnL][G>`}oX.)%{TH1b~K*)lpo<{xD');
define('NONCE_SALT',       ',A2oG/t_ESz(ye5[n6$nXLa;RBfN.* (9 /vs yyBW|_ ;MzzJDY2}Z~R@gcWHxt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
