<?php
require_once "conexion.php";

class ModeloHerramientas
{

  static public function mdlInfoHerramientas()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM herramientas");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }


  static public function mdlRegHerramientas($data)
  {

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
    $imgHerramientas = $data["imgHerramientas"];

    $stmt = Conexion::conectar()->prepare("insert into herramientas(num_herramientas, descripcion_herramientas, 	pn_herramientas, pnalt_herramientas, sn_herramientas, codigo_herramientas, marcaofabri_herramientas, cantidad_herramientas, unidad_herramientas, ubicacion_herramientas, observacion_herramientas, obsrepdoc_herramientas,numcarpeta_herramientas, equivatecnica_herramientas, hojamanual_herramientas, identificacion_herramientas, ultimoinven_herramientas, aeronaves_herramientas, ata_herramientas, rangomedida_herramientas, inventario, estante_herramientas, seccion_herramientas, permant_herramientas, percal_herramientas,taller_herramientas, status_herramientas, nombreemple_herramientas, codigoemple_herramientas, fechaprest_herramientas, fechadev_herramientas, encargado_herramientas, flota_herramientas, uso_herramientas, docmant_herramientas, doc_herramientas, sticker_herramientas, calibradaespecia_herramientas, estadoherramienta_herramientas, requiereinspecperiodica_herramientas, ubicacionactual_herramientas, observacionesdel_herramientas, imagen_herramientas, disponible) values('$nHerramientas', '$desHerramientas', '$pnHerramientas', '$pnaltHerramientas', '$numserieHerramientas', '$codigoHerramientas', '$marcafabriHerramientas', '$cantidadHerramientas', '$unidadHerramientas', '$ubicacionHerramientas', '$observacionHerramientas', '$obsrepdocHerramientas', '$numcarpetaHerramientas', '$equivalenciatecnicaHerramientas', '$hojamanualHerramientas', '$identificacionHerramientas', '$ultimoinventarioHerramientas', '$aeronaveHerramientas', '$ataHerramientas', '$rangomedidaHerramientas', '$inventarioHerramientas', '$estanteHerramientas', '$seccionHerramientas', '$permantHerramientas', '$percalHerramientas', '$tallerHerramientas', '$statusHerramientas', '$nomempleadoHerramientas', '$codempleadoHerramientas', '$fechaprestHerramientas', '$fechadevHerramientas', '$encargadoHerramientas', '$flotaHerramientas', '$usoHerramientas', '$docmantHerramientas', '$docHerramientas', '$stickerHerramientas', '$calibradaespecializadaHerramientas', '$estadoHerramientas', '$requiereinspeperiodicaHerramientas', '$ubicacionactualHerramientas', '$observacionesdelHerramientas', '$imgHerramientas', 1)");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoHerramienta($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM herramientas where id_herramientas=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditHerramienta($data)
  {

    $idHerramientas = $data["idHerramientas"];
    $nHerramientas = $data["nHerramientas"];
    $desHerramientas = $data["desHerramientas"];
    $pnHerramientas = $data["pnHerramientas"];
    $pnaltHerramientas = $data["pnaltHerramientas"];
    $numserieHerramientas = $data["numserieHerramientas"];
    $codigoHerramientas = $data["codigoHerramientas"];
    $marcafabriHerramientas = $data["marcafabriHerramientas"];
    $cantidadHerramientas = $data["cantidadHerramientas"];
    $unidadHerramientas = $data["unidadHerramientas"];
    $ubicacionHerramientas = $data["ubicacionHerramientas"];
    $observacionHerramientas = $data["observacionHerramientas"];
    $obsrepdocHerramientas = $data["obsrepdocHerramientas"];
    $numcarpetaHerramientas = $data["numcarpetaHerramientas"];
    $equivalenciatecnicaHerramientas = $data["equivalenciatecnicaHerramientas"];
    $hojamanualHerramientas = $data["hojamanualHerramientas"];
    $identificacionHerramientas = $data["identificacionHerramientas"];
    $ultimoinventarioHerramientas = $data["ultimoinventarioHerramientas"];
    $aeronaveHerramientas = $data["aeronaveHerramientas"];
    $ataHerramientas = $data["ataHerramientas"];
    $rangomedidaHerramientas = $data["rangomedidaHerramientas"];
    $inventarioHerramientas = $data["inventarioHerramientas"];
    $estanteHerramientas = $data["estanteHerramientas"];
    $seccionHerramientas = $data["seccionHerramientas"];
    $permantHerramientas = $data["permantHerramientas"];
    $percalHerramientas = $data["percalHerramientas"];
    $tallerHerramientas = $data["tallerHerramientas"];
    $statusHerramientas = $data["statusHerramientas"];
    $nomempleadoHerramientas = $data["nomempleadoHerramientas"];
    $codempleadoHerramientas = $data["codempleadoHerramientas"];
    $fechaprestHerramientas = $data["fechaprestHerramientas"];
    $fechadevHerramientas = $data["fechadevHerramientas"];
    $encargadoHerramientas = $data["encargadoHerramientas"];
    $flotaHerramientas = $data["flotaHerramientas"];
    $usoHerramientas = $data["usoHerramientas"];
    $docmantHerramientas = $data["docmantHerramientas"];
    $docHerramientas = $data["docHerramientas"];
    $stickerHerramientas = $data["stickerHerramientas"];
    $ultimoinventarioHerramientas = $data["ultimoinventarioHerramientas"];
    $calibradaespecializadaHerramientas = $data["calibradaespecializadaHerramientas"];
    $estadoHerramientas = $data["estadoHerramientas"];
    $requiereinspeperiodicaHerramientas = $data["requiereinspeperiodicaHerramientas"];
    $ubicacionactualHerramientas = $data["ubicacionactualHerramientas"];
    $observacionesdelHerramientas = $data["observacionesdelHerramientas"];
    $imgHerramientas = $data["imgHerramientas"];

    $stmt = Conexion::conectar()->prepare("update herramientas set num_herramientas='$nHerramientas', descripcion_herramientas='$desHerramientas', pn_herramientas='$pnHerramientas', pnalt_herramientas='$pnaltHerramientas', sn_herramientas='$numserieHerramientas', codigo_herramientas='$codigoHerramientas', marcaofabri_herramientas='$marcafabriHerramientas', cantidad_herramientas='$cantidadHerramientas', unidad_herramientas='$unidadHerramientas', ubicacion_herramientas='$ubicacionHerramientas', observacion_herramientas='$observacionHerramientas', obsrepdoc_herramientas='$obsrepdocHerramientas',numcarpeta_herramientas='$numcarpetaHerramientas', equivatecnica_herramientas='$equivalenciatecnicaHerramientas',hojamanual_herramientas='$hojamanualHerramientas', identificacion_herramientas='$identificacionHerramientas',ultimoinven_herramientas='$ultimoinventarioHerramientas', aeronaves_herramientas='$aeronaveHerramientas', ata_herramientas='$ataHerramientas', rangomedida_herramientas='$rangomedidaHerramientas', inventario='$inventarioHerramientas', estante_herramientas='$estanteHerramientas', seccion_herramientas='$seccionHerramientas', permant_herramientas='$permantHerramientas', percal_herramientas='$percalHerramientas', taller_herramientas='$tallerHerramientas', status_herramientas='$statusHerramientas', nombreemple_herramientas='$nomempleadoHerramientas', codigoemple_herramientas='$codempleadoHerramientas', fechaprest_herramientas='$fechaprestHerramientas', fechadev_herramientas='$fechadevHerramientas', encargado_herramientas='$encargadoHerramientas', flota_herramientas='$flotaHerramientas', uso_herramientas='$usoHerramientas', docmant_herramientas='$docmantHerramientas', doc_herramientas='$docHerramientas', sticker_herramientas='$stickerHerramientas', calibradaespecia_herramientas='$calibradaespecializadaHerramientas', estadoherramienta_herramientas='$estadoHerramientas', requiereinspecperiodica_herramientas='$requiereinspeperiodicaHerramientas', ubicacionactual_herramientas='$ubicacionactualHerramientas', observacionesdel_herramientas='$observacionesdelHerramientas', imagen_herramientas='$imgHerramientas' where id_herramientas=$idHerramientas");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliHerramienta($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from herramientas where id_herramientas=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegRegistrosHerramientas($data)
  {
    $tipo = $data['registros']['type'];
    $tamanio = $data['registros']['size'];
    $archivotmp = $data['registros']['tmp_name'];
    $lineas = file($archivotmp);
    $i = 0;
    foreach ($lineas as $linea) {
      //$cantidad_registros = count($lineas);
      //$cantidad_regist_agregados = ($cantidad_registros - 1);

      //usamos el contador i para que no registre la primera fila
      if ($i != 0) {

        $datos = explode(";", $linea);

        $num_herramientas = !empty($datos[0]) ? ($datos[0]) : '';
        $descripcion_herramientas = !empty($datos[1]) ? ($datos[1]) : '';
        $pn_herramientas = !empty($datos[2]) ? ($datos[2]) : '';
        $pnalt_herramientas = !empty($datos[3]) ? ($datos[3]) : '';
        $sn_herramientas = !empty($datos[4]) ? ($datos[4]) : '';
        $codigo_herramientas = !empty($datos[5]) ? ($datos[5]) : '';
        $marcaofabri_herramientas = !empty($datos[6]) ? ($datos[6]) : '';
        $cantidad_herramientas = !empty($datos[7]) ? ($datos[7]) : '';
        $unidad_herramientas = !empty($datos[8]) ? ($datos[8]) : '';
        $ubicacion_herramientas = !empty($datos[9]) ? ($datos[9]) : '';
        $observacion_herramientas = !empty($datos[10]) ? ($datos[10]) : '';
        $aeronaves_herramientas = !empty($datos[11]) ? ($datos[11]) : '';
        $ata_herramientas = !empty($datos[12]) ? ($datos[12]) : '';
        $doc_herramientas = !empty($datos[13]) ? ($datos[13]) : '';
        $numcarpeta_herramientas = !empty($datos[14]) ? ($datos[14]) : '';
        $equivatecnica_herramientas = !empty($datos[15]) ? ($datos[15]) : '';
        $hojamanual_herramientas = !empty($datos[16]) ? ($datos[16]) : '';
        $sticker_herramientas = !empty($datos[17]) ? ($datos[17]) : '';
        $ultimoinven_herramientas = !empty($datos[18]) ? ($datos[18]) : '';
        $calibradaespecia_herramientas = !empty($datos[19]) ? ($datos[19]) : '';
        $estadoherramienta_herramientas = !empty($datos[20]) ? ($datos[20]) : '';
        $requiereinspecperiodica_herramientas = !empty($datos[21]) ? ($datos[21]) : '';
        $rangomedida_herramientas = !empty($datos[22]) ? ($datos[22]) : '';
        $ubicacionactual_herramientas = !empty($datos[23]) ? ($datos[23]) : '';
        $observacionesdel_herramientas = !empty($datos[24]) ? ($datos[24]) : '';
        $imagen_herramientas = !empty($datos[25]) ? ($datos[25]) : '';
        $disponible = !empty($datos[26]) ? ($datos[26]) : '';

        if (!empty($codigo_herramientas)) {
          $mtr_duplicada = Conexion::conectar()->prepare("select codigo_herramientas from herramientas where codigo_herramientas='$codigo_herramientas'");
          $mtr_duplicada->execute();
          $regDuplicado = $mtr_duplicada->rowCount();
        }

        if ($regDuplicado > 0) {

          $stmt = Conexion::conectar()->prepare("update herramientas set num_herramientas, descripcion_herramientas, pn_herramientas,pnalt_herramientas, sn_herramientas, codigo_herramientas, marcaofabri_herramientas, cantidad_herramientas, unidad_herramientas, ubicacion_herramientas, observacion_herramientas, aeronaves_herramientas, ata_herramientas, doc_herramientas, numcarpeta_herramientas, equivatecnica_herramientas, hojamanual_herramientas, sticker_herramientas, ultimoinven_herramientas, calibradaespecia_herramientas, estadoherramienta_herramientas, requiereinspecperiodica_herramientas, rangomedida_herramientas, ubicacionactual_herramientas, observacionesdel_herramientas, imagen_herramientas, disponible where codigo_herramientas='$codigo_herramientas'");
          $stmt->execute();
        } else {
          $stmt = Conexion::conectar()->prepare("insert into herramientas (num_herramientas, descripcion_herramientas, pn_herramientas,pnalt_herramientas, sn_herramientas, codigo_herramientas, marcaofabri_herramientas, cantidad_herramientas, unidad_herramientas, ubicacion_herramientas, observacion_herramientas, aeronaves_herramientas, ata_herramientas, doc_herramientas, numcarpeta_herramientas, equivatecnica_herramientas, hojamanual_herramientas, sticker_herramientas, ultimoinven_herramientas, calibradaespecia_herramientas, estadoherramienta_herramientas, requiereinspecperiodica_herramientas, rangomedida_herramientas, ubicacionactual_herramientas, observacionesdel_herramientas, imagen_herramientas, disponible) values('$num_herramientas','$descripcion_herramientas', '$pn_herramientas', '$pnalt_herramientas', '$sn_herramientas', '$codigo_herramientas', '$marcaofabri_herramientas', '$cantidad_herramientas', '$unidad_herramientas', '$ubicacion_herramientas', '$observacion_herramientas', '$aeronaves_herramientas', '$ata_herramientas', '$doc_herramientas', '$numcarpeta_herramientas', '$equivatecnica_herramientas', '$hojamanual_herramientas', '$sticker_herramientas', '$ultimoinven_herramientas', '$calibradaespecia_herramientas', '$estadoherramienta_herramientas', '$requiereinspecperiodica_herramientas', '$rangomedida_herramientas', '$ubicacionactual_herramientas', '$observacionesdel_herramientas', '$imagen_herramientas', '$disponible')");
          $stmt->execute();
        }
      }
      $i++;
    }

    return "ok";
  }
}
