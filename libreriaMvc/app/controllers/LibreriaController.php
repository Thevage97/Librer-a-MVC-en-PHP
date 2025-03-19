<?php
require_once __DIR__ . '/../models/Libro.php';

class LibreriaController {
    private $libro;

    public function __construct($pdo) {
        $this->libro = new Libro($pdo);
    }

    // Método para mostrar todos los libros
    public function mostrarLibros() {
        $libros = $this->libro->obtenerLibros();
        if ($libros) {
            require_once __DIR__ . '/../views/libros.php';
        } else {
            die("No se encontraron libros.");
        }
    }

    // Método para mostrar un libro por ID
    public function mostrarLibro($id) {
        $libro = $this->libro->obtenerLibroPorId($id);
        if ($libro) {
            require_once __DIR__ . '/../views/editar_libro.php';
        } else {
            die("Libro no encontrado.");
        }
    }

    // Método para crear un libro
    public function crearLibro($titulo, $autor, $editorial, $pais) {
        if ($this->libro->crearLibro($titulo, $autor, $editorial, $pais)) {
            header("Location: /libreriaMvc/public/index.php");
            exit; // Asegura que el script se detenga después de la redirección
        } else {
            die("Error al crear el libro.");
        }
    }

    // Método para actualizar un libro
    public function actualizarLibro($id, $titulo, $autor, $editorial, $pais) {
        if ($this->libro->actualizarLibro($id, $titulo, $autor, $editorial, $pais)) {
            header("Location: /libreriaMvc/public/index.php");
            exit; // Asegura que el script se detenga después de la redirección
        } else {
            die("Error al actualizar el libro.");
        }
    }

    // Método para eliminar un libro
    public function eliminarLibro($id) {
        if ($this->libro->eliminarLibro($id)) {
            header("Location: /libreriaMvc/public/index.php");
            exit; // Asegura que el script se detenga después de la redirección
        } else {
            die("Error al eliminar el libro.");
        }
    }
}
?>