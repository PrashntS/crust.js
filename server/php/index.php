<?php
namespace Crust\Server;
/**
 * -.-. .-. ..- ... - .-.-.- .--- ... 
 * PHP Server Handler for crust remote parser.
 * @author Prashant Sinha <prashantsinha@outlook.com>
 * @version 0.1 20140925
 */

$URI = preg_split('/[\/\?]/', preg_replace("/[\/]+/", "/", $_SERVER['REQUEST_URI']));

const BASE = 2;

switch(strtolower(isset($URI[BASE]) ? $URI[BASE] : False)) {
	case 'api':
		break;
	default:
		break;
}