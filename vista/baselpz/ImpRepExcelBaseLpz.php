<?php
//ejecutando una salida en excel
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = Excel.xls");

require_once "../../controlador/baselpzControlador.php";
require_once "../../modelo/baselpzModelo.php";

// Verificar si llegaron opciones seleccionadas (entrada string)
if (isset($_GET["opciones"])) {
  // Obtener las opciones seleccionadas
  $opcionesSeleccionadas = $_GET["opciones"];
  
} else {
  echo "No se han seleccionado opciones.";
}

//transformamos las opciones a array
$encabezados=explode(",",$opcionesSeleccionadas );

?>



<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>

  <body>
    <table>
      <thead>
        <tr>
          <?php 
          foreach ($encabezados as $columna) {
            echo "<th>$columna</th>";
          }
          ?>
        </tr>
      </thead>
      <tbody>
        <?php
        $resultado=ControladorBaseLaPaz::ctrRepExcelBasesLapaz($opcionesSeleccionadas);
        foreach ($resultado as $fila) {
          echo "<tr>";
          foreach ($fila as $valor) {
            echo "<td>$valor</td>";
          }
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </body>

</html>
