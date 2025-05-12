<?php
require_once "modelos/formularios.modelo.php";
$personajes = ModeloFormularios::obtenerPersonajes();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Personajes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 30px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
        }
        th {
            background-color: #eee;
        }
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>

    <h1>Lista de Personajes</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Personaje</th>
                <th>Saga</th>
                <th>Especie</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personajes as $personaje): ?>
                <tr>
                    <td><?php echo htmlspecialchars($personaje["id"]); ?></td>
                    <td><?php echo htmlspecialchars($personaje["personaje"]); ?></td>
                    <td><?php echo htmlspecialchars($personaje["saga"]); ?></td>
                    <td><?php echo htmlspecialchars($personaje["especie"]); ?></td>
                    <td>
                        <a href="index.php?pagina=ingreso&id=<?php echo $personaje['id']; ?>" class="btn btn-info">Editar</a> \|-3-|/
                        <a href="vistas/paginas/eliminar.php?id=<?php echo $personaje["id"]; ?>" class="btn btn-info" onclick="return confirm('¿Estás seguro de eliminar este personaje?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br><br>
    <a href="index.php">Volver al inicio</a>

</body>
</html>
