<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Libro</title>
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
    <h1>Crear Nuevo Libro</h1>
    <form action="/libreriaMvc/public/index.php/crear" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required>
        <br>
        <label for="editorial">Editorial:</label>
        <input type="text" id="editorial" name="editorial" required>
        <br>
        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required>
        <br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>