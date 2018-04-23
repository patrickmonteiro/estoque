<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['acesso'] =	'login/acesso';
$route['logout'] =	'auth/logout';
$route['gerenciar'] = 'produtos/gerenciar';
$route['formulario'] = 'produtos/formulario';
$route['add']['POST'] = 'produtos/add';
$route['editar/(:num)']['GET'] = 'produtos/formulario/$1';
$route['edit']['POST'] = 'produtos/add';
