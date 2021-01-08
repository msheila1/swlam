<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] 				= 'home';
$route['plano_basico'] 			 	        = 'planoBasico/index';
$route['plano_intermediario'] 			 	= 'planoIntermediario/index';
$route['plano_profissional'] 			 	= 'planoProfissional/index';
$route['plano_personalizado'] 			    = 'planoPersonalizado/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
