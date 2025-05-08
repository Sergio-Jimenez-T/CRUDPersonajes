<?php
require_once("conexion.php");

class ModeloFormularios
{
    static public function mdlRegistro($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(personaje, saga, especie)
                                                   VALUES (:personaje, :saga, :especie)");

            $stmt->bindParam(":personaje", $datos["personaje"], PDO::PARAM_STR);
            $stmt->bindParam(":saga", $datos["saga"], PDO::PARAM_STR);
            $stmt->bindParam(":especie", $datos["especie"], PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        } finally {
            $stmt = null;
        }
    }

    static public function obtenerPersonajes()
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM personajes ORDER BY id ASC");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        } finally {
            $stmt = null;
        }
    }

    static public function obtenerPersonajePorId($id)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM personajes WHERE id = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        } finally {
            $stmt = null;
        }
    }

    static public function actualizarPersonaje($datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE personajes SET personaje = :personaje, saga = :saga, especie = :especie WHERE id = :id");

            $stmt->bindParam(":personaje", $datos["personaje"], PDO::PARAM_STR);
            $stmt->bindParam(":saga", $datos["saga"], PDO::PARAM_STR);
            $stmt->bindParam(":especie", $datos["especie"], PDO::PARAM_STR);
            $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        } finally {
            $stmt = null;
        }
    }

    static public function eliminarPersonaje($id)
    {
        try {
            $stmt = Conexion::conectar()->prepare("DELETE FROM personajes WHERE id = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        } finally {
            $stmt = null;
        }
    }
}
?>
