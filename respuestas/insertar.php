<?php
  require("../lib/base-datos.php");

  error_reporting(0);

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

  $consulta = "INSERT INTO tabla (nombre, apellido, genero, experiencia, provincia, especialidad1, especialidad2, especialidad3, especialidad4, especialidad5, color, fecha, foto) VALUES ('$nombre', '$apellido', '$genero', '$experiencia', '$provincia', '$especialidades[0]', '$especialidades[1]', '$especialidades[2]', '$especialidades[3]', '$especialidades[4]', '$color', '$fecha', '$nombre_foto')";

  if (realizar_consulta("base grupal", $consulta)) {
    move_uploaded_file($ubicacion_foto, "../imagenes/$nombre_foto");
  }
?>

<?php include "../componentes/header.html"; ?>

<link rel="stylesheet" href="../css/global.css">
<link rel="stylesheet" href="../css/respuesta-simple.css">

<div>
  <h2>El usuario se registró exitosamente</h2>
</div>

<?php include "../componentes/footer.html"; ?>