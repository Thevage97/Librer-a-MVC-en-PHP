<?php
class Libro {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    // Método para obtener todos los libros
    public function obtenerLibros() {
        $query = "SELECT * FROM libros";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un libro por ID
    public function obtenerLibroPorId($id) {
        $query = "SELECT * FROM libros WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para crear un nuevo libro
    public function crearLibro($titulo, $autor, $editorial, $pais) {
        $query = "INSERT INTO libros (titulo, autor, editorial, pais) VALUES (:titulo, :autor, :editorial, :pais)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':editorial', $editorial);
        $stmt->bindParam(':pais', $pais);
        return $stmt->execute();
    }

    // Método para actualizar un libro
    public function actualizarLibro($id, $titulo, $autor, $editorial, $pais) {
        $query = "UPDATE libros SET titulo = :titulo, autor = :autor, editorial = :editorial, pais = :pais WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':editorial', $editorial);
        $stmt->bindParam(':pais', $pais);
        return $stmt->execute();
    }

    // Método para eliminar un libro
    public function eliminarLibro($id) {
        $query = "DELETE FROM libros WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>