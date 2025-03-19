<?php
require_once __DIR__ . '/../app/controllers/LibreriaController.php';
require_once __DIR__ . '/../config/database.php';

$controller = new LibreriaController($pdo);

$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Manejo de rutas
switch ($request) {
    case '/libreriaMvc/public/index.php/crear':
        if ($method === 'POST') {
            $controller->crearLibro($_POST['titulo'], $_POST['autor'], $_POST['editorial'], $_POST['pais']);
        } else {
            require_once __DIR__ . '/../app/views/crear_libro.php';
        }
        break;
    case strpos($request, '/libreriaMvc/public/index.php/editar/') === 0:
        $id = explode('/', $request)[5];
        if ($method === 'POST') {
            $controller->actualizarLibro($id, $_POST['titulo'], $_POST['autor'], $_POST['editorial'], $_POST['pais']);
        } else {
            $libro = $controller->mostrarLibro($id);
            if ($libro) {
                require_once __DIR__ . '/../app/views/editar_libro.php';
            } else {
                //die("Libro no encontrado.");
            }
        }
        break;
    case strpos($request, '/libreriaMvc/public/index.php/eliminar/') === 0:
        $id = explode('/', $request)[5];
        $controller->eliminarLibro($id);
        break;
    default:
        $controller->mostrarLibros();
        break;
}
?>