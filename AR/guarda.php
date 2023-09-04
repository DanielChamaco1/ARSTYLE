<?php
require 'database.php';

$db = new Database();
$conn = $db->conectar();
$estado = 1;
// Obtener los datos del formulario de estudiante y padre
$nombres = $_POST['nombres'];
$nombres = $_POST['nombres'];
$nombres = $_POST['nombres'];
$nombres = $_POST['nombres'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$carnet = $_POST['carnet'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];
$nacimiento = $_POST['nacimiento'];
$alergias = $_POST['alergias'];
$estado = 1;
$id_sexo = $_POST['sexo'];
$id_extension = $_POST['extension'];
$id_sangre = $_POST['sangre'];
$id_curso = $_POST['curso'];

// Insertar el estudiante en la tabla estudiante
$query_estudiante = $conn->prepare("INSERT INTO estudiante (nombres, ap_paterno, ap_materno, carnet, edad, direccion, nacimiento, alergias, estado, id_sexo, id_extension, id_sangre, id_curso) VALUES (:nombres, :ap_paterno, :ap_materno, :carnet, :edad, :direccion, :nacimiento, :alergias, :estado, :id_sexo, :id_extension, :id_sangre, :id_curso)");
$query_estudiante->bindParam(':nombres', $nombres);
$query_estudiante->bindParam(':ap_paterno', $ap_paterno);
$query_estudiante->bindParam(':ap_materno', $ap_materno);
$query_estudiante->bindParam(':carnet', $carnet);
$query_estudiante->bindParam(':edad', $edad);
$query_estudiante->bindParam(':direccion', $direccion);
$query_estudiante->bindParam(':nacimiento', $nacimiento);
$query_estudiante->bindParam(':alergias', $alergias);
$query_estudiante->bindParam(':estado', $estado);
$query_estudiante->bindParam(':id_sexo', $id_sexo);
$query_estudiante->bindParam(':id_extension', $id_extension);
$query_estudiante->bindParam(':id_sangre', $id_sangre);
$query_estudiante->bindParam(':id_curso', $id_curso);
$query_estudiante->execute();

// Mostrar mensaje de éxito o redireccionar a otra página
echo "Registro exitoso. El estudiante y los padres se han guardado correctamente.";