<?php include "../componentes/header.html" ?>

<link rel="stylesheet" href="../css/global.css">
<link rel="stylesheet" href="../css/formulario-busqueda.css">

<form action="../respuestas/resultado-busqueda-provincia.php" method="get">
  <label for="provincia">Ingrese la provincia a buscar:</label>

  <input list="provincia-list" id="provincia" name="provincia">

  <datalist id="provincia-list">
    <option value="sanjose">San Jose</option>
    <option value="cartago">Cartago</option>
    <option value="alajuela">Alajuela</option>
    <option value="heredia">Heredia</option>
    <option value="guanacaste">Guanacaste</option>
    <option value="puntarenas">Puntarenas</option>
    <option value="limon">Limon</option>
  </datalist>

  <button type="submit">Buscar</button>
</form>

<?php include "../componentes/footer.html" ?>