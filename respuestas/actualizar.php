<?php include "../componentes/head.html"; ?>

<?php
  require("../lib/base-datos.php");

  $id = $_REQUEST["id"];

  $resultados = realizar_consulta("base grupal", "SELECT * FROM tabla WHERE id = $id");
  $estudiante = mysqli_fetch_array($resultados);
?>

<?php include "../componentes/header.html"; ?>

<link rel="stylesheet" href="../css/global.css">

<form action="actualizar-modificar.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id;?>">

  <label for="nombre">Nombre</label>
  <input type="text" id="nombre" name="nombre" value="<?php echo $estudiante['nombre'];?>">

  <label for="apellido">Apellido</label>
  <input type="text" id="apellido" name="apellido" value="<?php echo $estudiante['apellido'];?>">

  <label for="genero">Genero</label>
  <select id="genero" name="genero" value="<?php echo $estudiante['genero'];?>">
    <option value="masculino">Masculino</option>
    <option value="femenino">Femenino</option>
  </select>

  <label for="experiencia">Experiencia laboral</label>
  <input type="range" id="experiencia" name="experiencia" min="0" max="10" value="<?php echo $estudiante['experiencia'];?>">

  <label for="provincia">Provincia</label>
  <select id="provincia" name="provincia">
    <option value="sanjose">San José</option>
    <option value="cartago">Cartago</option>
    <option value="heredia">Heredia</option>
    <option value="alajuela">Alajuela</option>
    <option value="guanacaste">Guanacaste</option>
    <option value="puntarenas">Puntarenas</option>
    <option value="limon">Limón</option>
  </select>

  <span>Especialidades</span>
  <div>
    <label>
      <input type="checkbox" name="especialidades[]" value="javascript">

      Javascript
    </label>

    <label>
      <input type="checkbox" name="especialidades[]" value="php">

      PHP
    </label>

    <label>
      <input type="checkbox" name="especialidades[]" value="java">

      Java
    </label>

    <label>
      <input type="checkbox" name="especialidades[]" value="c++">

      C++
    </label>

    <label>
      <input type="checkbox" name="especialidades[]" value="base-datos">

      Bases de Datos
    </label>
  </div>

  <label for="color">Color favorito</label>
  <input type="color" id="color" name="color">

  <label for="fecha">Fecha de la entrevista</label>
  <input type="datetime-local" id="fecha" name="fecha" value="<?php echo $estudiante['fecha'];?>">

  <label for="foto">Foto de perfil</label>
  <input type="file" id="foto" name="foto" value="<?php echo $estudiante['foto'];?>">

  <button type="submit">Guardar cambios</button>
</form>

<?php include "../componentes/footer.html";?>