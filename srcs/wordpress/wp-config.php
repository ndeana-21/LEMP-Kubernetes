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

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'admin' );
define( 'DB_PASSWORD', 'admin' );
define( 'DB_HOST', 'mysql:3306' );
define( 'WP_HOME', 'http://192.168.99.6:5050/' );
define( 'WP_SITEURL', 'http://192.168.99.6:5050/' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');

define('AUTH_KEY',         ')k520M$$B|=c6S@Vg|+hhQ<G$SrgLIm0_`^B?!<.+kG%Dr|l7)LoCD6]~,YK|@0~');
define('SECURE_AUTH_KEY',  'X>L$Mvh]EeVcE+)he)t*zPh$umj>yBN=Xp2aQsH?ZPp&kA!bndgp9{Q|fdxu-EoU');
define('LOGGED_IN_KEY',    '_qS`6Q&N+b0?bzda;pSCb2?/<cWu2_<qIAkX&Ybk~w4Qldf7,cW09Z`|X*xo%XKQ');
define('NONCE_KEY',        'Kr@k)A|^+_ N1F5`++]HXi#1F lx-8T?5[Z[`.B9!&p^+W/z>Jj%P92O+j|Q3L[R');
define('AUTH_SALT',        'M3jDCFKTqh3{MG}0]uNJ/(54SVG&_:ay}N-+w}SHB TGbW{HHANd8R}jj>y/z$0W');
define('SECURE_AUTH_SALT', 'y1=sKK~q;?WSNXO:=i4vvEx^7fpe7Z;{<v|jHL2Z0VQm!85|Vw,cL-tv _-`/UGj');
define('LOGGED_IN_SALT',   'K9yQ/eS|kN^,<6CYuL^aK^,Yk?k#S|ZrUKbSuUNSpsEusp.{HD;0R8{a-!778GCe');
define('NONCE_SALT',       'S|>9}+qPZ0Wd)+H`Be:hZ3 f9vK?`*(:-w5q?Z;rFmA&? jm:rk/(F, M>fJ|aNE');

$table_prefix = 'wp_';
define( 'WP_DEBUG', true );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';