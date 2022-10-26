<?php
  require("../lib/base-datos.php");

  $id = $_REQUEST['id'];
  realizar_consulta("base grupal", "DELETE FROM tabla WHERE id = $id");
?>

<?php include "../componentes/header.html"; ?>

<link rel="stylesheet" href="../css/global.css">
<link rel="stylesheet" href="../css/respuesta-simple.css">

<div>
  <h2>El usuario se eliminó exitosamente</h2>
</div>

<?php include "../componentes/footer.html";?>