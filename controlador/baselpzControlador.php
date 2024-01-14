<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegBaseLaPaz" ||
      $ruta["query"] == "ctrEditBaseLaPaz" ||
      $ruta["query"] == "ctrEliBaseLaPaz"
     ){
    $metodo = $ruta["query"];
    $Baselapaz = new ControladorBaseLaPaz();
    $Baselapaz->$metodo();
  }
}

class ControladorBaseLaPaz {

  static public function ctrInfoBasesLapaz() {
    $respuesta = ModeloBaseLaPaz::mdlInfoBasesLapaz();
    return $respuesta;
  }

  static public function ctrRegBaseLaPaz() {
    require_once "../modelo/baselpzModelo.php";

    $fechvueloBaseLpz = $_POST["fechvueloBaseLpz"];
    $explotadorBaseLpz = $_POST["explotadorBaseLpz"];
    $arriboxitineBaseLpz = $_POST["arriboxitineBaseLpz"];
    $arriborealBaseLpz = $_POST["arriborealBaseLpz"];
    $puenteBaseLpz = $_POST["puenteBaseLpz"];
    $salioaBaseLpz = $_POST["salioaBaseLpz"];
    $salidaxitineBaseLpz = $_POST["salidaxitineBaseLpz"];
    $salidarealBaseLpz = $_POST["salidarealBaseLpz"];
    $serealizoBaseLpz = $_POST["serealizoBaseLpz"];
    $diferidoBaseLpz = $_POST["diferidoBaseLpz"];
    $defectdesBaseLpz = $_POST["defectdesBaseLpz"];
    $actiontakenBaseLpz = $_POST["actiontakenBaseLpz"];
    $logbookBaseLpz = $_POST["logbookBaseLpz"];
    $coddiferidoBaseLpz = $_POST["coddiferidoBaseLpz"];
    $otexploBaseLpz = $_POST["otexploBaseLpz"];
    $otsaeBaseLpz = $_POST["otsaeBaseLpz"];
    $notaBaseLpz = $_POST["notaBaseLpz"];
    $aceitemotBaseLpz = $_POST["aceitemotBaseLpz"];
    $hydBaseLpz = $_POST["hydBaseLpz"];

    $data = array(
      "fechvueloBaseLpz"=>$_POST["fechvueloBaseLpz"],
      "explotadorBaseLpz"=>$_POST["explotadorBaseLpz"],
      "arriboxitineBaseLpz"=>$_POST["arriboxitineBaseLpz"],
      "arriborealBaseLpz"=>$_POST["arriborealBaseLpz"],
      "puenteBaseLpz"=>$_POST["puenteBaseLpz"],
      "salioaBaseLpz"=>$_POST["salioaBaseLpz"],
      "salidaxitineBaseLpz"=>$_POST["salidaxitineBaseLpz"],
      "salidarealBaseLpz"=>$_POST["salidarealBaseLpz"],
      "serealizoBaseLpz"=>$_POST["serealizoBaseLpz"],
      "diferidoBaseLpz"=>$_POST["diferidoBaseLpz"],
      "defectdesBaseLpz"=>$_POST["defectdesBaseLpz"],
      "actiontakenBaseLpz"=>$_POST["actiontakenBaseLpz"],
      "logbookBaseLpz"=>$_POST["logbookBaseLpz"],
      "coddiferidoBaseLpz"=>$_POST["coddiferidoBaseLpz"],
      "otexploBaseLpz"=>$_POST["otexploBaseLpz"],
      "otsaeBaseLpz"=>$_POST["otsaeBaseLpz"],
      "notaBaseLpz"=>$_POST["notaBaseLpz"],
      "aceitemotBaseLpz"=>$_POST["aceitemotBaseLpz"],
      "hydBaseLpz"=>$_POST["hydBaseLpz"]
    );

    $respuesta = ModeloBaseLaPaz::mdlRegBaseLaPaz( $data );
    echo $respuesta;
  }

  static public function ctrInfoBaseLaPaz( $id ) {
    $respuesta = ModeloBaseLaPaz::mdlInfoBaseLaPaz( $id );
    return $respuesta;
  }

  static public function ctrEditBaseLaPaz() {

    require_once "../modelo/baselpzModelo.php";

    $fechvueloBaseLpz = $_POST["fechvueloBaseLpz"];
    $explotadorBaseLpz = $_POST["explotadorBaseLpz"];
    $arriboxitineBaseLpz = $_POST["arriboxitineBaseLpz"];
    $arriborealBaseLpz = $_POST["arriborealBaseLpz"];
    $puenteBaseLpz = $_POST["puenteBaseLpz"];
    $salioaBaseLpz = $_POST["salioaBaseLpz"];
    $salidaxitineBaseLpz = $_POST["salidaxitineBaseLpz"];
    $salidarealBaseLpz = $_POST["salidarealBaseLpz"];
    $serealizoBaseLpz = $_POST["serealizoBaseLpz"];
    $diferidoBaseLpz = $_POST["diferidoBaseLpz"];
    $defectdesBaseLpz = $_POST["defectdesBaseLpz"];
    $actiontakenBaseLpz = $_POST["actiontakenBaseLpz"];
    $logbookBaseLpz = $_POST["logbookBaseLpz"];
    $coddiferidoBaseLpz = $_POST["coddiferidoBaseLpz"];
    $otexploBaseLpz = $_POST["otexploBaseLpz"];
    $otsaeBaseLpz = $_POST["otsaeBaseLpz"];
    $notaBaseLpz = $_POST["notaBaseLpz"];
    $aceitemotBaseLpz = $_POST["aceitemotBaseLpz"];
    $hydBaseLpz = $_POST["hydBaseLpz"];
    $data = array(
      "idBaseLpz"=>$_POST["idBaseLpz"],
      "fechvueloBaseLpz"=>$_POST["fechvueloBaseLpz"],
      "explotadorBaseLpz"=>$_POST["explotadorBaseLpz"],
      "arriboxitineBaseLpz"=>$_POST["arriboxitineBaseLpz"],
      "arriborealBaseLpz"=>$_POST["arriborealBaseLpz"],
      "puenteBaseLpz"=>$_POST["puenteBaseLpz"],
      "salioaBaseLpz"=>$_POST["salioaBaseLpz"],
      "salidaxitineBaseLpz"=>$_POST["salidaxitineBaseLpz"],
      "salidarealBaseLpz"=>$_POST["salidarealBaseLpz"],
      "serealizoBaseLpz"=>$_POST["serealizoBaseLpz"],
      "diferidoBaseLpz"=>$_POST["diferidoBaseLpz"],
      "defectdesBaseLpz"=>$_POST["defectdesBaseLpz"],
      "actiontakenBaseLpz"=>$_POST["actiontakenBaseLpz"],
      "logbookBaseLpz"=>$_POST["logbookBaseLpz"],
      "coddiferidoBaseLpz"=>$_POST["coddiferidoBaseLpz"],
      "otexploBaseLpz"=>$_POST["otexploBaseLpz"],
      "otsaeBaseLpz"=>$_POST["otsaeBaseLpz"],
      "notaBaseLpz"=>$_POST["notaBaseLpz"],
      "aceitemotBaseLpz"=>$_POST["aceitemotBaseLpz"],
      "hydBaseLpz"=>$_POST["hydBaseLpz"]
    );

    $respuesta = ModeloBaseLaPaz::mdlEditBaseLaPaz( $data );
    echo $respuesta;
  }

  static public function ctrEliBaseLaPaz(){
    require "../modelo/baselpzModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloBaseLaPaz::mdlEliBaseLaPaz($data);

    echo $respuesta;
  }

  // Descargar Excel
  static public function ctrDescargarReporte(){
    if (isset($_GET["reporte"])) {
      $tabla = "baselpz";
      $tabla = ModeloBaseLaPaz::mdlInfoBasesLapaz();

      $Name = $_GET["reporte"].'.xls';
      header('Expires: 0');
      header('Cache-control: private');
      header('Content-type: application/vnd.ms-excel');
      header('Cache-Control: cache, must-revalidate');
      header('Content-Description: File Transfer');
      header('Last-Modified: '.date('D, d M Y H:i:s'));
      header("Pragma: public");
      header('Content-Disposition:; filename="'.$Name.'"');
      header("Content-Transfer-Encoding: binary");

      echo utf8_decode("<table border='0'> 
          <tr>
              <td style='font-weight:bold; border:1px solid #eee;'>FECHA DEL VUELO</th>
              <td style='font-weight:bold; border:1px solid #eee;'>EXPLOTADOR</th>
              <td style='font-weight:bold; border:1px solid #eee;'>ARRIBÓ REAL</th>
              <td style='font-weight:bold; border:1px solid #eee;'>SALIDA REAL</th>
              <td style='font-weight:bold; border:1px solid #eee;'>SE REALIZÓ</th>
              <td style='font-weight:bold; border:1px solid #eee;'>OT SAE</th>
              <td style='font-weight:bold; border:1px solid #eee;'>NOTA</th>
              <td style='font-weight:bold; border:1px solid #eee;'>ACCIONES</th>
          </tr>   
      </table>");
    }
  }

  static public function ctrRepExcelBasesLapaz($columnas){
    $respuesta = ModeloBaseLaPaz::mdlRepExcelBasesLapaz($columnas);
    return $respuesta;
  }

}