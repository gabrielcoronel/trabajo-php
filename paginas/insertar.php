<?php include "../componentes/header.html"; ?>

<link rel="stylesheet" href="css/global.css">

<form action="../respuestas/insertar.php" method="post" enctype="multipart/form-data">
  <label for="nombre">Nombre</label>
  <input type="text" id="nombre" name="nombre">

  <label for="apellido">Apellido</label>
  <input type="text" id="apellido" name="apellido">

  <span>Genero</span>
  <div>
    <label>
      Masculino
      <input type="radio" name="genero" value="masculino">
    </label>

    <label>
      Femenino
      <input type="radio" name="genero" value="femenino">
    </label>
  </div>

  <label for="experiencia">Experiencia laboral</label>
  <input type="range" id="experiencia" name="experiencia" min="0" max="10">

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
  <input type="datetime-local" id="fecha" name="fecha">

  <label for="foto">Foto de perfil</label>
  <input type="file" id="foto" name="foto">

  <button type="submit">Registrarse</button>
</form>

<style>
  form {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
  }
</style>

<?php include "../componentes/footer.html"; ?>