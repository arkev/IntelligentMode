<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', '1ntelligent_Mod3');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost:8889');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B/WpNHEjkF>Nx!-iyHHCN:{b;Bcdp*9BDjg(tD=&c-Q{v1/T4I2JHU=7W&y;-+W(');
define('SECURE_AUTH_KEY',  'M$k-l_9lQb|-Z7HCt;[[|* m;/G->/GsS!,< aQAV+FF^rgB.Q6CZp%IVg8.{rQ2');
define('LOGGED_IN_KEY',    'k]H^1@ubk}vgD WB9:-Uo~)n&u-5bCQ3=kEGB )HiKyiY,/6;rIQ&H-+|3u5AX.T');
define('NONCE_KEY',        'p>-eDiGFc,ggV&-xO2X1mh=Niz;%-%i{]haL|[b:^$8rs+gG>GN=ya}ammxjUmQ@');
define('AUTH_SALT',        'C14<|0{YNz&j-9$+H!>McFmy?6vk?4:KC@r]wds2P5hPnRUa0cz/sxw%DwN@.JV:');
define('SECURE_AUTH_SALT', '7o4$-q<l1+FO4HKo_aWhIHT~%GL-ntu1oBclUxv#(/^yB93DM:JTW-BEr0h^_?X5');
define('LOGGED_IN_SALT',   'Y|v5H5^=:WWjEr]rHD_pNTf2Gj1E:v:8PHLx~55Iw^35izmp,.zgHYd_KJ0r[#!,');
define('NONCE_SALT',       '+m]gDcK`0tBEavZ*}zOX2BPTZe@1 DTU0&O,~HtQq|=>XS5G{ZFQfk;:KROX0Ctq');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'im2015_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

