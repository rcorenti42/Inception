<?php

/** 
* The base configuration for WordPress
*
* @package WordPress
* @generator yourblogcoach.com
*/

/* Database connection */
define( 'DB_NAME',      'SQL_DB' );
define( 'DB_USER',      'SQL_ROOT' );
define( 'DB_PASSWORD',  'SQL_PWD' );
define( 'DB_HOST',      'mariadb' );
define( 'DB_CHARSET',   'utf8mb4' );
define( 'DB_COLLATE',   'utf8mb4_general_ci' );

/* Database Tables */
$table_prefix = 'wp_';


/* Authentication Keys and Salts */
define( 'AUTH_KEY',         '[*R2^KrGi!&IBUM=d1X{^pcOycN=c5,U80x|V?zsR8=fB(}hlt(tKI!SVWzcrovh' );
define( 'SECURE_AUTH_KEY',  ';EWoaLS!HGluV8uRWwB03UO3N+=f.98/8A&26fBh_,vb%gA)^+WH(FUk}PLfKLzJ' );
define( 'LOGGED_IN_KEY',    'oN/_IFdma4OF.2%n[P1v.WuCYE3n1kZR1[GkI`c)W.Is`|js))(pad+SuCe3sRaz' );
define( 'NONCE_KEY',        'AFnw]z_!-2TL$;U!Xa;tW~s,FkO|IRw`Ftl)$`1b_}qR~7{B_:}&OZ4yn#zCWy:y' );
define( 'AUTH_SALT',        'B(7x0Jbj=P:m+DBTx,eHdvxBvDMGipS9;-`.1EK/MJ=JYftG3c]ilu#Bn2L%ukz,' );
define( 'SECURE_AUTH_SALT', 'T!x:3BD+Ez{KSYZcKc~|%NXNxQ}:#2V=H3b{A%+$s]61/nUtsJVuCve^VO%*fWW}' );
define( 'LOGGED_IN_SALT',   '^A=z?Djak::3xFApVQIxxrJDj42du[^B]._Y8/!Ug|);wm)MpOWYJ?BJjG3qEMyl' );
define( 'NONCE_SALT',       '6.XNr/hb*-LF1nXbO#%fEePH|kwsx?vqy(hjb3cETgc26%~)]Z8%2|/?yRJ?k{[K' );


/* SSL */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );


/* Absolute path to the WordPress directory */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


/* Sets up WordPress vars and included files */
require_once( ABSPATH . 'wp-settings.php' );

?>