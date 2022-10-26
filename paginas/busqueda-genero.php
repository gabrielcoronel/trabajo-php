<?php include "../componentes/header.html" ?>

<link rel="stylesheet" href="../css/global.css">
<link rel="stylesheet" href="../css/formulario-busqueda.css">

<form action="../respuestas/resultado-busqueda-genero.php" method="get">
  <label for="genero">Ingrese el genero a buscar:</label>

  <input list="genero-list" id="genero" name="genero">

  <datalist id="genero-list">
    <option value="masculino">Masculino</option>
    <option value="femenino">Femenino</option>
  </datalist>

  <button type="submit">Buscar</button>
</form>

<?php include "../componentes/footer.html" ?>