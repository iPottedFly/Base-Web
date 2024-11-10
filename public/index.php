<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;

$router = new Router();

// AQUÍ AÑADIRÁS TODAS LAS ROUTAS QUE USARÁS PARA TU WEB.
// Ej. $router->[get/post]('URL', [CONTROLADOR::class, 'función']);
// Ej. $router->get('login', [LoginController::class, 'login']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();