<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'Proyecto_controller';
$route['index'] = 'Proyecto_controller';
$route['perros'] = 'Proyecto_controller/perros';
$route['gatos/(:num)'] = 'Proyecto_controller/gatos/$1';
$route['roedores'] = 'Proyecto_controller/roedores';
$route['aves'] = 'Proyecto_controller/aves';
$route['registrarse'] = 'Usuarios_controller/registrarse';
$route['registrar'] = 'Usuarios_controller/registrar_usuario';
$route['ingresar'] = 'Usuarios_controller/iniciar_sesion';


$route['nosotros'] = 'Proyecto_controller/nosotros';
$route['ofertas'] = 'Proyecto_controller/ofertas';
$route['terminos_y_condiciones'] = 'Proyecto_controller/tyc';
$route['entregas'] = 'Proyecto_controller/entregas';
$route['blog'] = 'Proyecto_controller/blog';
$route['consultas'] = 'Proyecto_controller/contacto';
$route['login'] = 'Usuarios_controller/login';
$route['iniciar_sesion'] = 'Usuarios_controller/iniciar_sesion';
$route['cerrar_sesion'] = 'Usuarios_controller/cerrar_sesion';
//$route['catalogo/(:num)'] = 'Balanceado_controller/catalogo_bal/$1';
$route['catalogo_cat/(:any)'] = 'Balanceado_controller/catalogo_cat/$1';
$route['el_catalogo'] = 'Balanceado_controller/el_catalogo';
$route['el_catalogo_x_cat/(:num)'] = 'Balanceado_controller/el_catalogo_x_cat/$1';
$route['catalogo_x_id'] = 'Balanceado_controller/catalogo_id';
$route['carrito'] = 'Carrito_controller/ver_carrito';

$route['registrar_consulta'] = 'Consultas_controller/registrar_consulta';

$route['adm_productos/(:num)'] = 'Balanceado_controller/catalogo_bal/$1';
$route['adm_agregar'] = 'Balanceado_controller/form_agregar_bal';
$route['adm_gestion'] = 'Balanceado_controller/gestionar_bal';
$route['adm_ventas'] = 'Adm_controller/ver_ventas';
$route['adm_mensajes'] = 'Adm_controller/ver_mensajes';
$route['adm_clientes'] = 'Adm_controller/ver_clientes';
$route['index_admin'] = 'Adm_controller/index_admin';
$route['agregar_bal'] = 'Balanceado_controller/registrar_bal';
$route['eliminar_bal1/(:num)'] = 'Balanceado_controller/eliminar_bal/$1';
$route['activar_bal/(:num)'] = 'Balanceado_controller/activar_bal/$1';
$route['editar_bal/(:num)'] = 'Balanceado_controller/editar_bal/$1';
$route['actualizar_bal/(:num)'] = 'Balanceado_controller/actualizar_bal/$1';
$route['gestionar_balanceado'] = 'Balanceado_controller/gestionar_bal';
$route['detalle_venta/(:num)'] = 'Adm_controller/ver_detalle_venta/$1';

$route['fue_noLeido/(:num)'] = 'Consultas_controller/fue_noLeido/$1';
$route['fue_leido/(:num)'] = 'Consultas_controller/fue_leido/$1';

//editar estado usuario
$route['activar_usuario/(:num)'] = 'Usuarios_controller/activar_cliente/$1';
$route['eliminar_usuario/(:num)'] = 'Usuarios_controller/eliminar_cliente/$1';

//probando control de stock
$route['guardar_venta'] = 'Ventas_controller/guardar_la_venta';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;