<?php
require_once('../../modelos/formularios.modelo.php');

$modoLectura = false;
$personaje = [
    "personaje" => "",
    "saga" => "",
    "especie" => ""
];

if (isset($_GET["id"])) {
    $personaje = ModeloFormularios::obtenerPersonajePorId($_GET["id"]);
    if (!$personaje) {
        echo "Personaje no encontrado.";
        exit;
    }
    $modoLectura = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $modoLectura ? 'Detalles del Personaje' : 'Ingresar Personaje'; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            padding: 40px;
            text-align: center;
        }
		
		title {
			font-size: 50px;
		}

        form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin: 35px 0 5px;
            font-weight: bold;
			font-size: 35px;
        }

        input[type="label"] {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
			font-size: 25px;
        }

        input[type="submit"], a.button {
            margin-top: 20px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #0275d8;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover, a.button:hover {
            background-color: #025aa5;
        }

        .readonly {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<h2><?php echo $modoLectura ? 'Detalle del Personaje' : 'Ingresar Personaje'; ?></h2>

<form method="POST" action="crear.php">
    <label>Nombre del personaje:</label>
    <input type="label" name="personaje" value="<?php echo htmlspecialchars($personaje["personaje"]); ?>" <?php echo $modoLectura ? 'readonly class="readonly"' : ''; ?> required>

    <label>Saga:</label>
    <input type="label" name="saga" value="<?php echo htmlspecialchars($personaje["saga"]); ?>" <?php echo $modoLectura ? 'readonly class="readonly"' : ''; ?> required>

    <label>Especie:</label>
    <input type="label" name="especie" value="<?php echo htmlspecialchars($personaje["especie"]); ?>" <?php echo $modoLectura ? 'readonly class="readonly"' : ''; ?> required>

    <?php if (!$modoLectura): ?>
        <input type="submit" value="Guardar">
    <?php endif; ?>
	<br>
	<br>
    <a class="button" href="../../index.php">Volver</a>
</form>

</body>
</html>
