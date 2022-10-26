<?php include "../componentes/header.html" ?>

<link rel="stylesheet" href="../css/global.css">
<link rel="stylesheet" href="../css/formulario-busqueda.css">

<form action="../respuestas/resultado-busqueda-nombre.php" method="get">
  <label for="nombre">Ingrese el nombre a buscar:</label>

  <input type="text" id="nombre" name="nombre">

  <button type="submit">Buscar</button>
</form>

<?php include "../componentes/footer.html" ?>