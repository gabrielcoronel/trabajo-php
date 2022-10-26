<?php
  function realizar_consulta($base_datos, $consulta) {
    $conexion = mysqli_connect("localhost", "root", "", $base_datos);

    if (mysqli_connect_errno() != 0)
      echo "<script>console.log('No se pudo conectar a $base_datos');</script>";

    mysqli_set_charset($conexion, "utf8");

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado == false)
      echo "<script>console.log('No se pudo realizar la consulta en $base_datos');</script>";

    mysqli_close($conexion);

    return $resultado;
  }
?>