<?php
  require("../lib/base-datos.php");

  $provincia = $_GET["provincia"];

  $resultados = realizar_consulta("base grupal", "SELECT * FROM tabla WHERE provincia = '$provincia'");
?>

<?php include "../componentes/header.html"; ?>

<link rel="stylesheet" href="../css/global.css">
<link rel="stylesheet" href="../css/tabla.css">

<div>
  <h2>Resultados de la búsqueda</h2>

  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Genero</th>
        <th>Experiencia</th>
        <th>Provincia</th>
        <th>Experiencia</th>
        <th>Especialidad1</th>
        <th>Especialidad2</th>
        <th>Especialidad3</th>
        <th>Especialidad4</th>
        <th>Especialidad5</th>
        <th>Color</th>
        <th>Fecha</th>
        <th>Foto</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($resultados as $fila){?>
      <tr>
        <td>
          <?php echo $fila["nombre"];?>
        </td>
        <td>
          <?php echo $fila["apellido"];?>
        </td>
        <td>
          <?php echo $fila["genero"];?>
        </td>
        <td>
          <?php echo $fila["experiencia"];?>
        </td>
        <td>
          <?php echo $fila["especialidad1"];?>
        </td>
        <td>
          <?php echo $fila["especialidad2"];?>
        </td>
        <td>
          <?php echo $fila["especialidad3"];?>
        </td>
        <td>
          <?php echo $fila["especialidad4"];?>
        </td>
        <td>
          <?php echo $fila["especialidad5"];?>
        </td>
        <td>
          <?php echo $fila["fecha"];?>
        </td>
        <td><img src="imagenes/<?php echo $fila['foto'];?>" width="50px" height="50px" alt=""></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<?php include "../componentes/footer.html"; ?>