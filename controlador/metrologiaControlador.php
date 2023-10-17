<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegMetrologia" ||
      $ruta["query"] == "ctrEditMetrologia" ||
      $ruta["query"] == "ctrEliMetrologia"
     ){
    $metodo = $ruta["query"];
    $metrologia = new ControladorMetrologias();
    $metrologia->$metodo();
  }
}

class ControladorMetrologias {

  static public function ctrInfoMetrologias() {
    $respuesta = ModeloMetrologias::mdlInfoMetrologias();
    return $respuesta;
  }

  static public function ctrRegMetrologia() {
    require_once "../modelo/metrologiaModelo.php";

    $numcertificadoMetrologia = $_POST["numcertificadoMetrologia"];
    $registroMetrologia = $_POST["registroMetrologia"];
    $clienteMetrologia = $_POST["clienteMetrologia"];
    $magnitudMetrologia = $_POST["magnitudMetrologia"];
    $instrumentoMetrologia = $_POST["instrumentoMetrologia"];
    $alcanceMetrologia = $_POST["alcanceMetrologia"];
    $resolucionMetrologia = $_POST["resolucionMetrologia"];
    $marcaMetrologia = $_POST["marcaMetrologia"];
    $modeloMetrologia = $_POST["modeloMetrologia"];
    $numserieMetrologia = $_POST["numserieMetrologia"];
    $identificacioninternaMetrologia = $_POST["identificacioninternaMetrologia"];
    $fechacalibracionMetrologia = $_POST["fechacalibracionMetrologia"];
    $vigenciaMetrologia = $_POST["vigenciaMetrologia"];
    $fechaproximacalibracionMetrologia = $_POST["fechaproximacalibracionMetrologia"];
    $condicionMetrologia = $_POST["condicionMetrologia"];
    $costoMetrologia = $_POST["costoMetrologia"];
    $fechaingresoMetrologia = $_POST["fechaingresoMetrologia"];
    $fechaconcluidaMetrologia = $_POST["fechaconcluidaMetrologia"];

    $data = array(
      "numcertificadoMetrologia"=>$_POST["numcertificadoMetrologia"],
      "registroMetrologia"=>$_POST["registroMetrologia"],
      "clienteMetrologia"=>$_POST["clienteMetrologia"],
      "magnitudMetrologia"=>$_POST["magnitudMetrologia"],
      "instrumentoMetrologia"=>$_POST["instrumentoMetrologia"],
      "alcanceMetrologia"=>$_POST["alcanceMetrologia"],
      "resolucionMetrologia"=>$_POST["resolucionMetrologia"],
      "marcaMetrologia"=>$_POST["marcaMetrologia"],
      "modeloMetrologia"=>$_POST["modeloMetrologia"],
      "numserieMetrologia"=>$_POST["numserieMetrologia"],
      "identificacioninternaMetrologia"=>$_POST["identificacioninternaMetrologia"],
      "fechacalibracionMetrologia"=>$_POST["fechacalibracionMetrologia"],
      "vigenciaMetrologia"=>$_POST["vigenciaMetrologia"],
      "fechaproximacalibracionMetrologia"=>$_POST["fechaproximacalibracionMetrologia"],
      "condicionMetrologia"=>$_POST["condicionMetrologia"],
      "costoMetrologia"=>$_POST["costoMetrologia"],
      "fechaingresoMetrologia"=>$_POST["fechaingresoMetrologia"],
      "fechaconcluidaMetrologia"=>$_POST["fechaconcluidaMetrologia"]
    );

    $respuesta = ModeloMetrologias::mdlRegMetrologias( $data );
    echo $respuesta;
  }

  static public function ctrInfoMetrologia( $id ) {
    $respuesta = ModeloMetrologias::mdlInfoMetrologia( $id );
    return $respuesta;
  }

  static public function ctrEditMetrologia() {

    require_once "../modelo/metrologiaModelo.php";

    $numcertificadoMetrologia = $_POST["numcertificadoMetrologia"];
    $registroMetrologia = $_POST["registroMetrologia"];
    $clienteMetrologia = $_POST["clienteMetrologia"];
    $magnitudMetrologia = $_POST["magnitudMetrologia"];
    $instrumentoMetrologia = $_POST["instrumentoMetrologia"];
    $alcanceMetrologia = $_POST["alcanceMetrologia"];
    $resolucionMetrologia = $_POST["resolucionMetrologia"];
    $marcaMetrologia = $_POST["marcaMetrologia"];
    $modeloMetrologia = $_POST["modeloMetrologia"];
    $numserieMetrologia = $_POST["numserieMetrologia"];
    $identificacioninternaMetrologia = $_POST["identificacioninternaMetrologia"];
    $fechacalibracionMetrologia = $_POST["fechacalibracionMetrologia"];
    $vigenciaMetrologia = $_POST["vigenciaMetrologia"];
    $fechaproximacalibracionMetrologia = $_POST["fechaproximacalibracionMetrologia"];
    $condicionMetrologia = $_POST["condicionMetrologia"];
    $costoMetrologia = $_POST["costoMetrologia"];
    $fechaingresoMetrologia = $_POST["fechaingresoMetrologia"];
    $fechaconcluidaMetrologia = $_POST["fechaconcluidaMetrologia"];

    $data = array(
      "idMetrologia"=>$_POST["idMetrologia"],
      "numcertificadoMetrologia"=>$_POST["numcertificadoMetrologia"],
      "registroMetrologia"=>$_POST["registroMetrologia"],
      "clienteMetrologia"=>$_POST["clienteMetrologia"],
      "magnitudMetrologia"=>$_POST["magnitudMetrologia"],
      "instrumentoMetrologia"=>$_POST["instrumentoMetrologia"],
      "alcanceMetrologia"=>$_POST["alcanceMetrologia"],
      "resolucionMetrologia"=>$_POST["resolucionMetrologia"],
      "marcaMetrologia"=>$_POST["marcaMetrologia"],
      "modeloMetrologia"=>$_POST["modeloMetrologia"],
      "numserieMetrologia"=>$_POST["numserieMetrologia"],
      "identificacioninternaMetrologia"=>$_POST["identificacioninternaMetrologia"],
      "fechacalibracionMetrologia"=>$_POST["fechacalibracionMetrologia"],
      "vigenciaMetrologia"=>$_POST["vigenciaMetrologia"],
      "fechaproximacalibracionMetrologia"=>$_POST["fechaproximacalibracionMetrologia"],
      "condicionMetrologia"=>$_POST["condicionMetrologia"],
      "costoMetrologia"=>$_POST["costoMetrologia"],
      "fechaingresoMetrologia"=>$_POST["fechaingresoMetrologia"],
      "fechaconcluidaMetrologia"=>$_POST["fechaconcluidaMetrologia"]
    );

    $respuesta = ModeloMetrologias::mdlEditMetrologia($data);
    echo $respuesta;
  }

  static public function ctrEliMetrologia(){
    require "../modelo/metrologiaModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloMetrologias::mdlEliMetrologia($data);

    echo $respuesta;
  }
}