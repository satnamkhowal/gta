<?php

//Begin Really Simple Security session cookie settings
@ini_set( 'upload_max_size', '2560M' );
@ini_set( 'post_max_size', '2560M');
@ini_set( 'max_execution_time', '300' );
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'LR5kIrAG9cxXe7X3XIzG6ERHh1umCyfUPyq9dIah1zJ5k3Drk42hObzAitg3dW61');
//END Really Simple Security key
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
define( 'DB_NAME', 'u950309299_groot_academy' );
/** Database username */
define( 'DB_USER', 'u950309299_groot_academy' );
/** Database password */
define( 'DB_PASSWORD', 'HareRam@987#45' );
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
define( 'AUTH_KEY',          'q!{cDmn(Bs*(LE<8!L][V?2/eF:vR~;KA&2o1o_9c$Fv4ESRH%dwhb[=^dEVv|x/' );
define( 'SECURE_AUTH_KEY',   '~ATX^[<_;]lF/zipg(qfrJw`~z>X~v jZfpfO{_`zQDQoP)PP34{9Cwz]Lw5[2i|' );
define( 'LOGGED_IN_KEY',     '`B-hJ_$BDNqsNVF0l0-.ypL?[je e>[@@oK>x?~aM`eV0DZ~NX0!flk`0)>*hBko' );
define( 'NONCE_KEY',         'S7E,0mO=F1S]T>4}oZ?>;_:J?eI}SG~Q&l0CG%RviK YcbfKp7`F_~*-~:M+8RLP' );
define( 'AUTH_SALT',         'cz$}LQsWg9F[Pu_GZg@zX0Sn^4bB90fpZOgoHgO*DhjAnP8Yn=rINu:ZbPp& T_~' );
define( 'SECURE_AUTH_SALT',  '_1r42{%C<X/~y)j(Kc#|M=5bS[ZPxICTD:N%PnfJ[-+TMX^?}o[8iz,99mKNDEI;' );
define( 'LOGGED_IN_SALT',    'Q-UqD<o3MIx#.H^:G;G@5an+^1^JE(7y=.*uqm/}AJ{4q1V9@qO8>#YY,2:VNN7q' );
define( 'NONCE_SALT',        'lZgBe (g NGb`pn0@@~dbcm_|z Lf01K}*[&m4<[ZbPHDLWdSHcyolzS[k/BvMUM' );
define( 'WP_CACHE_KEY_SALT', 'n&%y|j.q<YoN+L#|D[i@YSd3Woy<o54zMIA~D[L7s>L4]; )u6$ =gDJQ%D{q2BT' );
/**#@-*/
/**
* WordPress database table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'wp_';
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
define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'ca037e143087efbcb493a99b0ac633ad' );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DUPLICATOR_AUTH_KEY', 'V%PBaY$#@~,}zRlzEa7=$}8gl=fb,DD20[~K^&&a#)0;WV^$P$CCdrWt1Sz;{Dpv' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';