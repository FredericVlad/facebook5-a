<?php
// Modelo Canton
class Canton {
    private $conexion;
    private $nombre_tabla = "canton";

    // Propiedades de la tabla canton
    public $id_canton;
    public $nombre_canton;
    public $descripcion_canton;
    // Puedes agregar más campos relacionados con el cantón

    // Constructor para la conexión a la base de datos
    public function __construct($db) {
        $this->conexion = $db;
    }

    // Crear un nuevo cantón
    public function crear() {
        try {
            $consulta = "INSERT INTO " . $this->nombre_tabla . " (nombre_canton, descripcion_canton)
                      VALUES (:nombre_canton, :descripcion_canton)";

            $sentencia = $this->conexion->prepare($consulta);

            // Vinculación de los valores
            $sentencia->bindParam(":nombre_canton", $this->nombre_canton, PDO::PARAM_STR);
            $sentencia->bindParam(":descripcion_canton", $this->descripcion_canton, PDO::PARAM_STR);

            return $sentencia->execute();

        } catch (PDOException $e) {
            error_log("Error en crear() para cantón: " . $e->getMessage());
            return false;
        }
    }

    // Leer todos los cantones
    public function leer_todos() {
        try {
            $consulta = "SELECT * FROM " . $this->nombre_tabla;
            $sentencia = $this->conexion->prepare($consulta);
            $sentencia->execute();

            return $sentencia->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            error_log("Error en leer_todos() para cantón: " . $e->getMessage());
            return [];
        }
    }

    // Leer un solo cantón por ID
    public function leer_uno() {
        try {
            $consulta = "SELECT * FROM " . $this->nombre_tabla . " WHERE id_canton = :id_canton LIMIT 1";
            $sentencia = $this->conexion->prepare($consulta);
            $sentencia->bindParam(":id_canton", $this->id_canton, PDO::PARAM_INT);
            $sentencia->execute();

            return $sentencia->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            error_log("Error en leer_uno() para cantón: " . $e->getMessage());
            return null;
        }
    }

    // Actualizar un cantón
    public function actualizar() {
        try {
            $consulta = "UPDATE " . $this->nombre_tabla . " SET
                        nombre_canton = :nombre_canton,
                        descripcion_canton = :descripcion_canton
                      WHERE id_canton = :id_canton";

            $sentencia = $this->conexion->prepare($consulta);

            // Vinculación de los valores
            $sentencia->bindParam(":nombre_canton", $this->nombre_canton, PDO::PARAM_STR);
            $sentencia->bindParam(":descripcion_canton", $this->descripcion_canton, PDO::PARAM_STR);
            $sentencia->bindParam(":id_canton", $this->id_canton, PDO::PARAM_INT);

            return $sentencia->execute();

        } catch (PDOException $e) {
            error_log("Error en actualizar() para cantón: " . $e->getMessage());
            return false;
        }
    }

    // Eliminar un cantón
    public function eliminar() {
        try {
            if (empty($this->id_canton)) {
                return false;
            }
            error_log("Intentando eliminar el cantón con ID: " . $this->id_canton);

            $consulta = "DELETE FROM " . $this->nombre_tabla . " WHERE id_canton = :id_canton";
            $sentencia = $this->conexion->prepare($consulta);
            $sentencia->bindParam(":id_canton", $this->id_canton, PDO::PARAM_INT);

            if ($sentencia->execute()) {
                error_log("Cantón con ID " . $this->id_canton . " eliminado correctamente.");
                return true;
            } else {
                error_log("Error en eliminar() para cantón: La consulta no se ejecutó correctamente.");
                return false;
            }

        } catch (PDOException $e) {
            error_log("Error en eliminar() para cantón: " . $e->getMessage());
            return false;
        }
    }
}
?>