<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
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
        .libro {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: #fff;
        }
        a {
            text-decoration: none;
            color: #4CAF50;
        }
        a:hover {
            text-decoration: underline;
        }
        .acciones {
            margin-top: 10px;
        }
        .acciones a {
            margin-right: 10px;
            color: #fff;
            background-color: #4CAF50;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .acciones a.eliminar {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <h1>Lista de Libros</h1>
    <a href="/libreriaMvc/public/index.php/crear">Crear Nuevo Libro</a>
    <?php if (!empty($libros)): ?>
        <?php foreach ($libros as $libro): ?>
            <div class="libro">
                <h2><?php echo htmlspecialchars($libro['titulo']); ?></h2>
                <p><strong>Autor:</strong> <?php echo htmlspecialchars($libro['autor']); ?></p>
                <p><strong>Editorial:</strong> <?php echo htmlspecialchars($libro['editorial']); ?></p>
                <p><strong>País:</strong> <?php echo htmlspecialchars($libro['pais']); ?></p>
                <div class="acciones">
                    <a href="/libreriaMvc/public/index.php/editar/<?php echo $libro['id']; ?>">Editar</a>
                    <a href="/libreriaMvc/public/index.php/eliminar/<?php echo $libro['id']; ?>" class="eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar este libro?');">Eliminar</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay libros disponibles.</p>
    <?php endif; ?>
</body>
</html>