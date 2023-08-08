<?php
$ruta = parse_url($_SERVER['REQUEST_URI']);

if (isset($ruta["query"])) {

  if (
    $ruta["query"] == "ctrRegHerramienta" ||
    $ruta["query"] == "ctrEditHerramienta" ||
    $ruta["query"] == "ctrRegRegistrosHerramientas" ||
    $ruta["query"] == "ctrEliHerramienta"
  ) {
    $metodo = $ruta["query"];
    $herramienta = new ControladorHerramientasSalidas();
    $herramienta->$metodo();
  }
}

class ControladorHerramientasSalidas
{

  static public function ctrInfoHerramientasSalidas()
  {
    $respuesta = ModeloHerramientas::mdlInfoHerramientas();
    return $respuesta;
  }

  static public function ctrRegHerramienta()
  {
    require_once "../modelo/herramientasModelo.php";

    $nHerramientas = $_POST["nHerramientas"];
    $desHerramientas = $_POST["desHerramientas"];
    $pnHerramientas = $_POST["pnHerramientas"];
    $pnaltHerramientas = $_POST["pnaltHerramientas"];
    $numserieHerramientas = $_POST["numserieHerramientas"];
    $codigoHerramientas = $_POST["codigoHerramientas"];
    $marcafabriHerramientas = $_POST["marcafabriHerramientas"];
    $cantidadHerramientas = $_POST["cantidadHerramientas"];
    $unidadHerramientas = $_POST["unidadHerramientas"];
    $ubicacionHerramientas = $_POST["ubicacionHerramientas"];
    $observacionHerramientas = $_POST["observacionHerramientas"];
    $obsrepdocHerramientas = $_POST["obsrepdocHerramientas"];
    $numcarpetaHerramientas = $_POST["numcarpetaHerramientas"];
    $equivalenciatecnicaHerramientas = $_POST["equivalenciatecnicaHerramientas"];
    $hojamanualHerramientas = $_POST["hojamanualHerramientas"];
    $identificacionHerramientas = $_POST["identificacionHerramientas"];
    $ultimoinventarioHerramientas = $_POST["ultimoinventarioHerramientas"];
    $aeronaveHerramientas = $_POST["aeronaveHerramientas"];
    $ataHerramientas = $_POST["ataHerramientas"];
    $rangomedidaHerramientas = $_POST["rangomedidaHerramientas"];
    $inventarioHerramientas = $_POST["inventarioHerramientas"];
    $estanteHerramientas = $_POST["estanteHerramientas"];
    $seccionHerramientas = $_POST["seccionHerramientas"];
    $permantHerramientas = $_POST["permantHerramientas"];
    $percalHerramientas = $_POST["percalHerramientas"];
    $tallerHerramientas = $_POST["tallerHerramientas"];
    $statusHerramientas = $_POST["statusHerramientas"];
    $nomempleadoHerramientas = $_POST["nomempleadoHerramientas"];
    $codempleadoHerramientas = $_POST["codempleadoHerramientas"];
    $fechaprestHerramientas = $_POST["fechaprestHerramientas"];
    $fechadevHerramientas = $_POST["fechadevHerramientas"];
    $encargadoHerramientas = $_POST["encargadoHerramientas"];
    $flotaHerramientas = $_POST["flotaHerramientas"];
    $usoHerramientas = $_POST["usoHerramientas"];
    $docmantHerramientas = $_POST["docmantHerramientas"];
    $docHerramientas = $_POST["docHerramientas"];
    $stickerHerramientas = $_POST["stickerHerramientas"];
    $calibradaespecializadaHerramientas = $_POST["calibradaespecializadaHerramientas"];
    $estadoHerramientas = $_POST["estadoHerramientas"];
    $requiereinspeperiodicaHerramientas = $_POST["requiereinspeperiodicaHerramientas"];
    $ubicacionactualHerramientas = $_POST["ubicacionactualHerramientas"];
    $observacionesdelHerramientas = $_POST["observacionesdelHerramientas"];
    /*capturamos la imagen*/
    $imagen = $_FILES["imgHerramientas"];

    $nomImagen = $imagen["name"];
    $archImagen = $imagen["tmp_name"];

    move_uploaded_file($archImagen, "../assest/dist/img/herramientas/" . $nomImagen);

    $data = array(
      "nHerramientas" => $_POST["nHerramientas"],
      "desHerramientas" => $_POST["desHerramientas"],
      "pnHerramientas" => $_POST["pnHerramientas"],
      "pnaltHerramientas" => $_POST["pnaltHerramientas"],
      "numserieHerramientas" => $_POST["numserieHerramientas"],
      "codigoHerramientas" => $_POST["codigoHerramientas"],
      "marcafabriHerramientas" => $_POST["marcafabriHerramientas"],
      "cantidadHerramientas" => $_POST["cantidadHerramientas"],
      "unidadHerramientas" => $_POST["unidadHerramientas"],
      "ubicacionHerramientas" => $_POST["ubicacionHerramientas"],
      "observacionHerramientas" => $_POST["observacionHerramientas"],
      "obsrepdocHerramientas" => $_POST["obsrepdocHerramientas"],
      "numcarpetaHerramientas" => $_POST["numcarpetaHerramientas"],
      "equivalenciatecnicaHerramientas" => $_POST["equivalenciatecnicaHerramientas"],
      "hojamanualHerramientas" => $_POST["hojamanualHerramientas"],
      "identificacionHerramientas" => $_POST["identificacionHerramientas"],
      "ultimoinventarioHerramientas" => $_POST["ultimoinventarioHerramientas"],
      "aeronaveHerramientas" => $_POST["aeronaveHerramientas"],
      "ataHerramientas" => $_POST["ataHerramientas"],
      "rangomedidaHerramientas" => $_POST["rangomedidaHerramientas"],
      "inventarioHerramientas" => $_POST["inventarioHerramientas"],
      "estanteHerramientas" => $_POST["estanteHerramientas"],
      "seccionHerramientas" => $_POST["seccionHerramientas"],
      "permantHerramientas" => $_POST["permantHerramientas"],
      "percalHerramientas" => $_POST["percalHerramientas"],
      "tallerHerramientas" => $_POST["tallerHerramientas"],
      "statusHerramientas" => $_POST["statusHerramientas"],
      "nomempleadoHerramientas" => $_POST["nomempleadoHerramientas"],
      "codempleadoHerramientas" => $_POST["codempleadoHerramientas"],
      "fechaprestHerramientas" => $_POST["fechaprestHerramientas"],
      "fechadevHerramientas" => $_POST["fechadevHerramientas"],
      "encargadoHerramientas" => $_POST["encargadoHerramientas"],
      "flotaHerramientas" => $_POST["flotaHerramientas"],
      "usoHerramientas" => $_POST["usoHerramientas"],
      "docmantHerramientas" => $_POST["docmantHerramientas"],
      "docHerramientas" => $_POST["docHerramientas"],
      "stickerHerramientas" => $_POST["stickerHerramientas"],
      "calibradaespecializadaHerramientas" => $_POST["calibradaespecializadaHerramientas"],
      "estadoHerramientas" => $_POST["estadoHerramientas"],
      "requiereinspeperiodicaHerramientas" => $_POST["requiereinspeperiodicaHerramientas"],
      "ubicacionactualHerramientas" => $_POST["ubicacionactualHerramientas"],
      "observacionesdelHerramientas" => $_POST["observacionesdelHerramientas"],
      "imgHerramientas" => $nomImagen
    );

    $respuesta = ModeloHerramientas::mdlRegHerramientas($data);
    echo $respuesta;
  }

  static public function ctrInfoHerramienta($id)
  {
    $respuesta = ModeloHerramientas::mdlInfoHerramienta($id);
    return $respuesta;
  }

  static public function ctrEditHerramienta()
  {

    require_once "../modelo/herramientasModelo.php";

    $nHerramientas = $_POST["nHerramientas"];
    $desHerramientas = $_POST["desHerramientas"];
    $pnHerramientas = $_POST["pnHerramientas"];
    $pnaltHerramientas = $_POST["pnaltHerramientas"];
    $numserieHerramientas = $_POST["numserieHerramientas"];
    $codigoHerramientas = $_POST["codigoHerramientas"];
    $marcafabriHerramientas = $_POST["marcafabriHerramientas"];
    $cantidadHerramientas = $_POST["cantidadHerramientas"];
    $unidadHerramientas = $_POST["unidadHerramientas"];
    $ubicacionHerramientas = $_POST["ubicacionHerramientas"];
    $observacionHerramientas = $_POST["observacionHerramientas"];
    $obsrepdocHerramientas = $_POST["obsrepdocHerramientas"];
    $numcarpetaHerramientas = $_POST["numcarpetaHerramientas"];
    $equivalenciatecnicaHerramientas = $_POST["equivalenciatecnicaHerramientas"];
    $hojamanualHerramientas = $_POST["hojamanualHerramientas"];
    $identificacionHerramientas = $_POST["identificacionHerramientas"];
    $ultimoinventarioHerramientas = $_POST["ultimoinventarioHerramientas"];
    $aeronaveHerramientas = $_POST["aeronaveHerramientas"];
    $ataHerramientas = $_POST["ataHerramientas"];
    $rangomedidaHerramientas = $_POST["rangomedidaHerramientas"];
    $inventarioHerramientas = $_POST["inventarioHerramientas"];
    $estanteHerramientas = $_POST["estanteHerramientas"];
    $seccionHerramientas = $_POST["seccionHerramientas"];
    $permantHerramientas = $_POST["permantHerramientas"];
    $percalHerramientas = $_POST["percalHerramientas"];
    $tallerHerramientas = $_POST["tallerHerramientas"];
    $statusHerramientas = $_POST["statusHerramientas"];
    $nomempleadoHerramientas = $_POST["nomempleadoHerramientas"];
    $codempleadoHerramientas = $_POST["codempleadoHerramientas"];
    $fechaprestHerramientas = $_POST["fechaprestHerramientas"];
    $fechadevHerramientas = $_POST["fechadevHerramientas"];
    $encargadoHerramientas = $_POST["encargadoHerramientas"];
    $flotaHerramientas = $_POST["flotaHerramientas"];
    $usoHerramientas = $_POST["usoHerramientas"];
    $docmantHerramientas = $_POST["docmantHerramientas"];
    $docHerramientas = $_POST["docHerramientas"];
    $stickerHerramientas = $_POST["stickerHerramientas"];
    $calibradaespecializadaHerramientas = $_POST["calibradaespecializadaHerramientas"];
    $estadoHerramientas = $_POST["estadoHerramientas"];
    $requiereinspeperiodicaHerramientas = $_POST["requiereinspeperiodicaHerramientas"];
    $ubicacionactualHerramientas = $_POST["ubicacionactualHerramientas"];
    $observacionesdelHerramientas = $_POST["observacionesdelHerramientas"];
    if ($_FILES["imgHerramientas"]["name"] == "") {

      $nomImagen = $_POST["imgHerramientasActual"];
    } else {

      /*capturamos la imagen*/
      $imagen = $_FILES["imgHerramientas"];

      $nomImagen = $imagen["name"];
      $archImagen = $imagen["tmp_name"];

      move_uploaded_file($archImagen, "../assest/dist/img/herramientas/" . $nomImagen);
    }
    $data = array(
      "idHerramientas" => $_POST["idHerramientas"],
      "nHerramientas" => $_POST["nHerramientas"],
      "desHerramientas" => $_POST["desHerramientas"],
      "pnHerramientas" => $_POST["pnHerramientas"],
      "pnaltHerramientas" => $_POST["pnaltHerramientas"],
      "numserieHerramientas" => $_POST["numserieHerramientas"],
      "codigoHerramientas" => $_POST["codigoHerramientas"],
      "marcafabriHerramientas" => $_POST["marcafabriHerramientas"],
      "cantidadHerramientas" => $_POST["cantidadHerramientas"],
      "unidadHerramientas" => $_POST["unidadHerramientas"],
      "ubicacionHerramientas" => $_POST["ubicacionHerramientas"],
      "observacionHerramientas" => $_POST["observacionHerramientas"],
      "obsrepdocHerramientas" => $_POST["obsrepdocHerramientas"],
      "numcarpetaHerramientas" => $_POST["numcarpetaHerramientas"],
      "equivalenciatecnicaHerramientas" => $_POST["equivalenciatecnicaHerramientas"],
      "hojamanualHerramientas" => $_POST["hojamanualHerramientas"],
      "identificacionHerramientas" => $_POST["identificacionHerramientas"],
      "ultimoinventarioHerramientas" => $_POST["ultimoinventarioHerramientas"],
      "aeronaveHerramientas" => $_POST["aeronaveHerramientas"],
      "ataHerramientas" => $_POST["ataHerramientas"],
      "rangomedidaHerramientas" => $_POST["rangomedidaHerramientas"],
      "inventarioHerramientas" => $_POST["inventarioHerramientas"],
      "estanteHerramientas" => $_POST["estanteHerramientas"],
      "seccionHerramientas" => $_POST["seccionHerramientas"],
      "permantHerramientas" => $_POST["permantHerramientas"],
      "percalHerramientas" => $_POST["percalHerramientas"],
      "tallerHerramientas" => $_POST["tallerHerramientas"],
      "statusHerramientas" => $_POST["statusHerramientas"],
      "nomempleadoHerramientas" => $_POST["nomempleadoHerramientas"],
      "codempleadoHerramientas" => $_POST["codempleadoHerramientas"],
      "fechaprestHerramientas" => $_POST["fechaprestHerramientas"],
      "fechadevHerramientas" => $_POST["fechadevHerramientas"],
      "encargadoHerramientas" => $_POST["encargadoHerramientas"],
      "flotaHerramientas" => $_POST["flotaHerramientas"],
      "usoHerramientas" => $_POST["usoHerramientas"],
      "docmantHerramientas" => $_POST["docmantHerramientas"],
      "docHerramientas" => $_POST["docHerramientas"],
      "stickerHerramientas" => $_POST["stickerHerramientas"],
      "calibradaespecializadaHerramientas" => $_POST["calibradaespecializadaHerramientas"],
      "estadoHerramientas" => $_POST["estadoHerramientas"],
      "requiereinspeperiodicaHerramientas" => $_POST["requiereinspeperiodicaHerramientas"],
      "ubicacionactualHerramientas" => $_POST["ubicacionactualHerramientas"],
      "observacionesdelHerramientas" => $_POST["observacionesdelHerramientas"],
      "imgHerramientas" => $nomImagen
    );

    $respuesta = ModeloHerramientas::mdlEditHerramienta($data);
    echo $respuesta;
  }

  static public function ctrEliHerramienta()
  {
    require "../modelo/herramientasModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloHerramientas::mdlEliHerramienta($data);

    echo $respuesta;
  }

  static public function ctrRegRegistrosHerramientas()
  {
    require_once "../modelo/herramientasModelo.php";

    $data = array(
      "registros" => $_FILES['dataHerramientas']
    );

    $respuesta = ModeloHerramientas::mdlRegRegistrosHerramientas($data);
    echo $respuesta;
  }

  static public function ctrRepHerramientas()
  {
    require "../modelo/controlherramientasModelo.php";

    $nomHerramienta = $_POST["nomHerramienta"];
    $data = array(
      "nomHerramienta" => $nomHerramienta
    );
    $respuesta = ModeloControlHerramientas::mdlRepHerramienta($data);
    foreach ($respuesta as $value) {

?>

      <tr>
        <td><?php echo $value["id_controlherramientas"]; ?></td>
        <td><?php echo $value["descripcion_controlherramientas"]; ?></td>
        <td><?php echo $value["pn_controlherramientas"]; ?></td>
        <td><?php echo $value["numserie_controlherramientas"]; ?></td>
        <td><?php echo $value["codigo_controlherramientas"]; ?></td>
        <td><?php echo $value["fechacali_controlherramientas"]; ?></td>
        <td><?php echo $value["fechavenci_controlherramientas"]; ?></td>
        <td><?php echo $value["ubicacion_controlherramientas"]; ?></td>
        <td><?php echo $value["numcarpeta_controlherramientas"]; ?></td>
      </tr>


    <?php

    }
    ?>
    <script>
      $(function() {
        $("#DataTableHerramientas").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
        }).buttons().container().appendTo('#DataTableHerramientas_wrapper .col-md-6:eq(0)');

      });
    </script>
<?php
  }

  static public function ctrHerramientas($herramienta)
  {
    $respuesta = ModeloControlHerramientas::mdlHerramientas($herramienta);
    return $respuesta;
  }

  static public function ctrPorHerramientas($id)
  {
    $respuesta = ModeloControlHerramientas::mdlPorHerramientas($id);
    return $respuesta;
  }

  static public function ctrSelecHerramientas($id)
  {
    $respuesta = ModeloControlHerramientas::mdlSelecHerramientas($id);
    return $respuesta;
  }  
}
