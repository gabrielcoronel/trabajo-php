<?php
  require("../lib/base-datos.php");

  error_reporting(0);

  $id = $_POST["id"];
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $genero = $_POST["genero"];
  $experiencia = $_POST["experiencia"];
  $provincia = $_POST["provincia"];
  $especialidades = array(5);
  $especialidades = $_POST["especialidades"];
  $color = $_POST["color"];
  $fecha = $_POST["fecha"];
  $nombre_foto = $_FILES["foto"]["name"];
  $ubicacion_foto = $_FILES["foto"]["tmp_name"];

  $consulta = "UPDATE tabla SET nombre = '$nombre', apellido = '$apellido', genero = '$genero', experiencia = '$experiencia', provincia = '$provincia', especialidad1 = '$especialidades[0]', especialidad2 = '$especialidades[1]', especialidad3 = '$especialidades[2]', especialidad4 = '$especialidades[3]', especialidad5 = '$especialidades[4]', color = '$color', fecha = '$fecha', foto = '$nombre_foto' WHERE id = $id";

  if (realizar_consulta("base grupal", $consulta)) {
    move_uploaded_file($ubicacion_foto, "../imagenes/$nombre_foto");
  }
?>

<?php include "../componentes/header.html";?>

<link rel="stylesheet" href="../css/global.css">
<link rel="stylesheet" href="../css/respuesta-simple.css">

<div>
  <h2>La información se actualizó exitosamente</h2>
</div>

<?php include "../componentes/footer.html";?>