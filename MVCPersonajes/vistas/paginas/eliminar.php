<?php
require_once('../../modelos/formularios.modelo.php');

if (!isset($_GET["id"])) {
    echo "ID no proporcionado.";
    exit;
}

$id = $_GET["id"];
$personaje = ModeloFormularios::obtenerPersonajePorId($id);

if (!$personaje) {
    echo "Personaje no encontrado.";
    exit;
}

// Confirmación y eliminación
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $respuesta = ModeloFormularios::eliminarPersonaje($id);

    if ($respuesta === "ok") {
        echo "<script>alert('Personaje eliminado correctamente'); window.location.href='../index.php';</script>";
        exit;
    } else {
        echo "<p>Error al eliminar el personaje.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Personaje</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding: 40px;
        }

        .confirm-box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        h2 {
            color: #d9534f;
        }

        button, a {
            margin: 10px;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1rem;
        }

        button {
            background-color: #d9534f;
            color: white;
        }

        button:hover {
            background-color: #c9302c;
        }

        a {
            background-color: #ccc;
            color: #333;
        }

        a:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>

<div class="confirm-box">
    <h2>¿Estás seguro que deseas eliminar a <br>"<?php echo htmlspecialchars($personaje["personaje"]); ?>"?</h2>
    <form method="POST">
        <button type="submit">Sí, eliminar</button>
        <a href="../../index.php">Cancelar</a>
    </form>
</div>

</body>
</html>
