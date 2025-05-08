<?php
require_once("modelos/formularios.modelo.php");

// Verifica si hay datos para editar
$personaje = [
    "id" => "",
    "personaje" => "",
    "saga" => "",
    "especie" => ""
];

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $personaje = ModeloFormularios::obtenerPersonajePorId($id);
    if (!$personaje) {
        echo "<p>Personaje no encontrado.</p>";
        exit;
    }
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $datos = [
        "personaje" => $_POST["personaje"],
        "saga" => $_POST["saga"],
        "especie" => $_POST["especie"]
    ];

    if (!empty($_POST["id"])) {
        $datos["id"] = $_POST["id"];
        $respuesta = ModeloFormularios::actualizarPersonaje($datos);
    } else {
        $respuesta = ModeloFormularios::mdlRegistro("personajes", $datos);
    }

    if ($respuesta === "ok") {
        echo "<script>alert('Guardado correctamente'); window.location.href='index.php';</script>";
        exit;
    } else {
        echo "<p>Error al guardar.</p>";
    }
}
?>

<h1>Edicion de personaje</h1>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($personaje["id"]); ?>">

    <div class="form-group">
        <label for="personaje">Nombre del personaje:</label>
        <input type="text" class="form-control" id="personaje" name="personaje"
               value="<?php echo htmlspecialchars($personaje["personaje"]); ?>" required>
    </div>

    <div class="form-group">
        <label for="saga">Saga:</label>
        <input type="text" class="form-control" id="saga" name="saga"
               value="<?php echo htmlspecialchars($personaje["saga"]); ?>" required>
    </div>

    <div class="form-group">
        <label for="especie">Especie:</label>
        <input type="text" class="form-control" id="especie" name="especie"
               value="<?php echo htmlspecialchars($personaje["especie"]); ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">
        <?php echo empty($personaje["id"]) ? "Registrar" : "Actualizar"; ?>
    </button>
</form>
