Perfecto, aquí tienes el contenido del README.md para tu nuevo proyecto “Gestión de Personajes de Videojuegos”, adaptado con base en el ejemplo que compartiste:

```markdown
# Proyecto Personajes de VideoJuegos

## Índice
<a id='contenido'></a>

- [✨ Descripción](#-descripción)
- [🛠️ Tecnologías Utilizadas](#-tecnologías-utilizadas)
- [📝 Instalación](#-instalación)
  - [1. Configurar la base de datos](#1-configurar-la-base-de-datos)
  - [2. Configurar el servidor](#2-configurar-el-servidor)
  - [3. Ejecutar el proyecto](#3-ejecutar-el-proyecto)
- [📂 Estructura del Proyecto](#-estructura-del-proyecto)
- [⚙️ Funcionamiento del programa](#️-funcionamiento-del-programa)
- [🔗 URLs Principales](#-urls-principales)
- [📖 Referencias](#-referencias)
- [👨‍💻 Acerca de mí](#-acerca-de-mí)

---

## ✨ Descripción

Este proyecto consiste en un sistema web que permite **registrar, visualizar, editar y eliminar personajes** de videojuegos. Está construido siguiendo el patrón **MVC (Modelo-Vista-Controlador)** en PHP y permite una gestión clara y organizada de datos a través de formularios dinámicos e interacciones eficientes.

<a href="#contenido">🔝 Volver al índice</a>

---

## 🛠 Tecnologías Utilizadas

- **PHP (MVC)**
- **MySQL**
- **HTML5 y CSS3 (con Bootstrap)**
- **JavaScript (mínimo)**
- **Servidor Apache**
- **[XAMPP](https://www.apachefriends.org/es/index.html)**

<a href="#contenido">🔝 Volver al índice</a>

---

## 📝 Instalación

### 1. Configurar la base de datos

1. Crear una base de datos llamada `personajes_db`.
2. Importar el archivo `database.sql` desde phpMyAdmin o cualquier cliente MySQL.

### 2. Configurar el servidor

1. Usar XAMPP o cualquier entorno con Apache + PHP + MySQL.
2. Verificar que `mod_rewrite` esté activado en Apache.
3. Asegurarse de tener `.htaccess` correctamente configurado si se desea usar URLs limpias.

### 3. Ejecutar el proyecto

1. Clonar o descomprimir el proyecto dentro de la carpeta `htdocs`.
2. Acceder desde el navegador a:  
   `http://localhost/Personajes`  

<a href="#contenido">🔝 Volver al índice</a>

---

## 📂 Estructura del Proyecto

```

Personajes/
│
├── modelos/
│   └── formularios.modelo.php     # Lógica de conexión y operaciones con la BD
│
├── controladores/
│   └── rutas.controlador.php      # Controlador principal de rutas (si aplica)
│
├── vistas/
│   ├── plantilla.php              # Maquetado base
│   ├── paginas/
│   │   ├── inicio.php             # Tabla de todos los personajes
│   │   ├── ingreso.php            # Formulario de registro / edición
│   │   ├── editar.php             # Vista opcional de edición directa
│
├── public/
│   ├── index.php                  # Punto de entrada principal
│
├── config/
│   └── conexion.php               # Archivo de conexión PDO con la base de datos
│
├── .htaccess
└── README.md

````

<a href="#contenido">🔝 Volver al índice</a>

---

## ⚙️ Funcionamiento del Programa

El proyecto sigue una arquitectura **MVC** que organiza el flujo así:

### 1. Inicio del programa

- El archivo `index.php` carga la plantilla base (`vistas/plantilla.php`) y evalúa el valor del parámetro `pagina` para decidir qué vista cargar (por ejemplo: `inicio`, `ingreso`).

### 2. Modelo

`formularios.modelo.php` se encarga de:

- Registrar personajes.
- Obtener todos los registros.
- Obtener un personaje por su ID.
- Actualizar los datos de un personaje.
- Eliminar un personaje.

### 3. Vista

- `inicio.php`: muestra todos los personajes en una tabla con acciones.
- `ingreso.php`: formulario para agregar o editar personajes (si se le pasan datos por GET).
- Las vistas usan Bootstrap para mantener una estética limpia.

### 4. Controlador

En este proyecto, las vistas se cargan según la URL `?pagina=...`.  
No se usa un **Front Controller puro**, sino un manejo de rutas básico mediante `$_GET["pagina"]`.

### 5. Código de conexión

Archivo: `config/conexion.php`

```php
class Conexion {
    static public function conectar() {
        $link = new PDO("mysql:host=localhost;dbname=personajes_db", "root", "");
        $link->exec("set names utf8");
        return $link;
    }
}
````

Este archivo usa PDO para conectarse a la base de datos y establecer el charset a UTF-8.

<a href="#contenido">🔝 Volver al índice</a>

---

## 🔗 URLs Principales

* `http://localhost/Personajes/?pagina=inicio` → Lista de personajes
* `http://localhost/Personajes/?pagina=ingreso` → Formulario de nuevo personaje
* `http://localhost/Personajes/?pagina=ingreso&id=1` → Ver o editar personaje
* `http://localhost/Personajes/?pagina=eliminar&id=1` → Eliminar personaje

<a href="#contenido">🔝 Volver al índice</a>

---

## 📖 Referencias

* [PHP: Manual Oficial](https://www.php.net/manual/es/)
* [PDO: PHP Data Objects](https://www.php.net/manual/es/book.pdo.php)
* [Bootstrap](https://getbootstrap.com/)
* [Apache mod\_rewrite](https://httpd.apache.org/docs/2.4/mod/mod_rewrite.html)
* [XAMPP](https://www.apachefriends.org/es/index.html)

<a href="#contenido">🔝 Volver al índice</a>

---

## 👨‍💻 Acerca de mí

Hola, soy **Sergio Quetzal**, estudiante de Ingeniería en Sistemas Computacionales con especialidad en desarrollo web. Me apasiona la creación de interfaces intuitivas, la gestión de bases de datos relacionales y el desarrollo de soluciones tecnológicas innovadoras. Siempre estoy abierto a nuevos aprendizajes y retos.

<a href="#contenido">🔝 Volver al índice</a>

```

¿Te gustaría que lo divida en un archivo ya listo para copiar y pegar en tu proyecto?
```
