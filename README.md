# Librería MVC en PHP

Este proyecto es una aplicación web simple para gestionar una librería, desarrollada utilizando el patrón de diseño **Modelo-Vista-Controlador (MVC)** en PHP. Permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre una base de datos de libros.

## Características

- **Gestión de Libros:**
  - Crear nuevos libros.
  - Ver la lista de libros.
  - Editar la información de los libros existentes.
  - Eliminar libros.

- **Interfaz Amigable:**
  - Diseño simple y responsive.
  - Formularios para crear y editar libros.
  - Confirmación antes de eliminar un libro.

- **Patrón MVC:**
  - Separación clara de responsabilidades entre el modelo, la vista y el controlador.
  - Fácil de mantener y escalar.

## Tecnologías Utilizadas

- **PHP:** Lenguaje de programación backend.
- **MySQL:** Base de datos para almacenar la información de los libros.
- **HTML/CSS:** Para la estructura y el diseño de la interfaz de usuario.

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalado lo siguiente:

- **Servidor Web:** Apache, Nginx o cualquier servidor compatible con PHP.
- **PHP:** Versión 7.4 o superior.
- **MySQL:** Base de datos para almacenar la información.

## Instalación

Sigue estos pasos para configurar el proyecto en tu entorno local:

1. **Clona el Repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/libreria-mvc-php.git
   cd libreria-mvc-php.

2. **Configura la Base de Datos:**

Crea una base de datos llamada libreriamvc en MySQL.

Importa el archivo SQL proporcionado en la carpeta database (si lo hay) o crea la tabla manualmente:
   ```bash
   CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    editorial VARCHAR(255) NOT NULL,
    pais VARCHAR(100) NOT NULL
);
```
3.  **Configura las Credenciales de la Base de Datos:**
   
    ```bash
     $host = 'localhost';
     $dbname = 'libreriamvc';
     $username = 'tu-usuario';
     $password = 'tu-contraseña';

4. **Inicia el Servidor:**

Si estás usando XAMPP, coloca la carpeta del proyecto en htdocs y accede a:

     http://localhost/libreria-mvc-php/public/index.php

## Uso
Ver la Lista de Libros:

Accede a la página principal para ver todos los libros registrados.

Crear un Nuevo Libro:

Haz clic en "Crear Nuevo Libro" y completa el formulario.

Editar un Libro:

Haz clic en "Editar" en la tarjeta del libro que deseas modificar.

Eliminar un Libro:

Haz clic en "Eliminar" en la tarjeta del libro que deseas eliminar. Se te pedirá confirmación antes de proceder.

## Estructura del Proyecto

.
├── app
│ ├── controllers
│ │ └── LibreriaController.php
│ ├── models
│ │ └── Libro.php
│ └── views
│ ├── crear_libro.php
│ ├── editar_libro.php
│ └── libros.php
├── config
│ └── database.php
├── public
│ └── index.php
└── README.md

## Autor
Carlos Ivan P

GitHub: vizukrako

Email: vizukrako@gmail.com
