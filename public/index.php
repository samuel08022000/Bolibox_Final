<?php
// Cargar los ayudantes del Paso 3
require_once __DIR__ . '/../app/helpers.php';

// Obtener la ruta de la URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$basePath = str_replace('/public', '', dirname($_SERVER['SCRIPT_NAME']));

if ($basePath !== '/' && strpos($path, $basePath) === 0) {
    $path = substr($path, strlen($basePath));
}
if ($path === '' || $path === false) $path = '/';

// SIMULADOR DE RUTAS: Aquí defines qué archivo de /views se muestra
switch ($path) {
    case '/':
        require __DIR__ . '/../views/home.php'; // Tu antiguo index.php
        break;
    case '/registro':
        require __DIR__ . '/../views/registro.php';
        break;
    case '/admin':
        require __DIR__ . '/../views/admin/admin.php';
        break;
    case '/cliente':
        require __DIR__ . '/../views/cliente/cliente.php';
        break;
    default:
        http_response_code(404);
        echo "404 - Página no encontrada en la simulación";
        break;
}