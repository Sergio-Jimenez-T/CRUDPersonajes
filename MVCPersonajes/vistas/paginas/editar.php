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

// Procesar formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $datos = [
        "id" => $id,
        "personaje" => $_POST["personaje"],
        "saga" => $_POST["saga"],
        "especie" => $_POST["especie"]
    ];

    $respuesta = ModeloFormularios::actualizarPersonaje($datos);

    if ($respuesta === "ok") {
        echo "<script>alert('Personaje actualizado correctamente'); window.location.href='../../index.php';</script>";
        exit;
    } else {
        echo "<p>Error al actualizar el personaje.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Personaje</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: cyan;
            margin-top: 20px;
            font-size: 2rem;
        }

        .form-container {
            width: 100%;
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 12px 20px;
            text-transform: uppercase;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        input[type="submit"]:hover {
            background-color: cyan;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            background-color: #f1f1f1;
            color: #333;
        }

        p {
            color: red;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Editar Personaje</h2>

<div class="form-container">
    <form method="POST">
        <label for="personaje">Nombre del personaje:</label>
        <input type="text" id="personaje" name="personaje" value="<?php echo htmlspecialchars($personaje["personaje"]); ?>" required>

        <label for="saga">Saga:</label>
        <input type="text" id="saga" name="saga" value="<?php echo htmlspecialchars($personaje["saga"]); ?>" required>

        <label for="especie">Especie:</label>
        <input type="text" id="especie" name="especie" value="<?php echo htmlspecialchars($personaje["especie"]); ?>" required>

        <input type="submit" value="Actualizar">
        <a href="../../index.php">Cancelar</a>
    </form>
</div>

</body>
</html>