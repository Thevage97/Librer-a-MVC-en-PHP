<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #8B4513;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
        }
        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        form input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Editar Libro</h1>
    <?php if (isset($libro) && !empty($libro)): ?>
        <form action="/libreriaMvc/public/index.php/editar/<?php echo $libro['id']; ?>" method="POST">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo htmlspecialchars($libro['titulo']); ?>" required>
            <br>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" value="<?php echo htmlspecialchars($libro['autor']); ?>" required>
            <br>
            <label for="editorial">Editorial:</label>
            <input type="text" id="editorial" name="editorial" value="<?php echo htmlspecialchars($libro['editorial']); ?>" required>
            <br>
            <label for="pais">País:</label>
            <input type="text" id="pais" name="pais" value="<?php echo htmlspecialchars($libro['pais']); ?>" required>
            <br>
            <button type="submit">Actualizar</button>
        </form>
    <?php else: ?>
        <p>No se encontró el libro.</p>
    <?php endif; ?>
</body>
</html>