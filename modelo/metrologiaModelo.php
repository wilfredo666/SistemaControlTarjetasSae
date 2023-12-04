<?php
require_once "conexion.php";

class ModeloMetrologias
{

  static public function mdlInfoMetrologias()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM  metrologia");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }


  static public function mdlRegMetrologias($data)
  {
    $numcertificadoMetrologia = $data["numcertificadoMetrologia"];
    $registroMetrologia = $data["registroMetrologia"];
    $clienteMetrologia = $data["clienteMetrologia"];
    $magnitudMetrologia = $data["magnitudMetrologia"];
    $instrumentoMetrologia = $data["instrumentoMetrologia"];
    $alcanceMetrologia = $data["alcanceMetrologia"];
    $resolucionMetrologia = $data["resolucionMetrologia"];
    $marcaMetrologia = $data["marcaMetrologia"];
    $modeloMetrologia = $data["modeloMetrologia"];
    $numserieMetrologia = $data["numserieMetrologia"];
    $identificacioninternaMetrologia = $data["identificacioninternaMetrologia"];
    $fechacalibracionMetrologia = $data["fechacalibracionMetrologia"];
    $vigenciaMetrologia = $data["vigenciaMetrologia"];
    $fechaproximacalibracionMetrologia = $data["fechaproximacalibracionMetrologia"];
    $condicionMetrologia = $data["condicionMetrologia"];
    $costoMetrologia = $data["costoMetrologia"];
    $fechaemisionMetrologia = $data["fechaemisionMetrologia"];
    $fechaingresoMetrologia = $data["fechaingresoMetrologia"];
    $fechaconcluidaMetrologia = $data["fechaconcluidaMetrologia"];

    $stmt = Conexion::conectar()->prepare("insert into metrologia(num_certificado_metro, registro_metro, id_cliente, magnitud_metro, instrumento_metro, alcance_metro, resolucion_metro, marca_metro, modelo_metro, num_serie_metro, identificacion_interna_metro, fecha_calibracion_metro, vigencia_metro, fecha_proxima_calibracion_metro, condicion_metro, costo_metro, fechaemision_metro, fecha_ingreso_metro, fecha_concluida_metro) values('$numcertificadoMetrologia', '$registroMetrologia', '$clienteMetrologia', '$magnitudMetrologia', '$instrumentoMetrologia', '$alcanceMetrologia', '$resolucionMetrologia', '$marcaMetrologia', '$modeloMetrologia', '$numserieMetrologia', '$identificacioninternaMetrologia', '$fechacalibracionMetrologia', '$vigenciaMetrologia', '$fechaproximacalibracionMetrologia', '$condicionMetrologia', '$costoMetrologia', '$fechaemisionMetrologia', '$fechaingresoMetrologia', '$fechaconcluidaMetrologia')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoMetrologia($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM metrologia where id_metro=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditMetrologia($data)
  {
    $idMetrologia = $data["idMetrologia"];
    $numcertificadoMetrologia = $data["numcertificadoMetrologia"];
    $registroMetrologia = $data["registroMetrologia"];
    $clienteMetrologia = $data["clienteMetrologia"];
    $magnitudMetrologia = $data["magnitudMetrologia"];
    $instrumentoMetrologia = $data["instrumentoMetrologia"];
    $alcanceMetrologia = $data["alcanceMetrologia"];
    $resolucionMetrologia = $data["resolucionMetrologia"];
    $marcaMetrologia = $data["marcaMetrologia"];
    $modeloMetrologia = $data["modeloMetrologia"];
    $numserieMetrologia = $data["numserieMetrologia"];
    $identificacioninternaMetrologia = $data["identificacioninternaMetrologia"];
    $fechacalibracionMetrologia = $data["fechacalibracionMetrologia"];
    $vigenciaMetrologia = $data["vigenciaMetrologia"];
    $fechaproximacalibracionMetrologia = $data["fechaproximacalibracionMetrologia"];
    $condicionMetrologia = $data["condicionMetrologia"];
    $costoMetrologia = $data["costoMetrologia"];
    $fechaemisionMetrologia = $data["fechaemisionMetrologia"];
    $fechaingresoMetrologia = $data["fechaingresoMetrologia"];
    $fechaconcluidaMetrologia = $data["fechaconcluidaMetrologia"];

    $stmt = Conexion::conectar()->prepare("update metrologia set num_certificado_metro='$numcertificadoMetrologia', registro_metro='$registroMetrologia',id_cliente='$clienteMetrologia',magnitud_metro='$magnitudMetrologia',instrumento_metro='$instrumentoMetrologia', alcance_metro='$alcanceMetrologia', resolucion_metro='$resolucionMetrologia', marca_metro='$marcaMetrologia', modelo_metro='$modeloMetrologia', num_serie_metro='$numserieMetrologia', identificacion_interna_metro='$identificacioninternaMetrologia', fecha_calibracion_metro='$fechacalibracionMetrologia', vigencia_metro='$vigenciaMetrologia', fecha_proxima_calibracion_metro='$fechaproximacalibracionMetrologia', condicion_metro='$condicionMetrologia', costo_metro='$costoMetrologia', fechaemision_metro='$fechaemisionMetrologia', fecha_ingreso_metro='$fechaingresoMetrologia', fecha_concluida_metro='$fechaconcluidaMetrologia' where id_metro=$idMetrologia");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliMetrologia($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from metrologia where id_metro=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegInformeMetrologias($data)
  {
    $condicionInforme = $data["condicionInforme"];
    $procedimientoInforme = $data["procedimientoInforme"];
    $patronesInforme = $data["patronesInforme"];
    $incertidumbreInforme = $data["incertidumbreInforme"];
    $observacionesInforme = $data["observacionesInforme"];
    $resultadosInforme = $data["resultadosInforme"];

    $stmt = Conexion::conectar()->prepare("insert into informes_metrologia(condicion_infometro, procedimiento_infometro, patrones_infometro, incertidumbre_infometro, observaciones_infometro, resultados_infometro) values('$condicionInforme', '$procedimientoInforme', '$patronesInforme', '$incertidumbreInforme', '$observacionesInforme', '$resultadosInforme')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }
}
