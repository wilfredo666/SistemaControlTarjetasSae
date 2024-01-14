<?php
require_once "conexion.php";

class ModeloBaseLaPaz
{
  static public function mdlInfoBasesLapaz()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM baselpz");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegBaseLaPaz($data)
  {
    $fechvueloBaseLpz = $data["fechvueloBaseLpz"];
    $explotadorBaseLpz = $data["explotadorBaseLpz"];
    $arriboxitineBaseLpz = $data["arriboxitineBaseLpz"];
    $arriborealBaseLpz = $data["arriborealBaseLpz"];
    $puenteBaseLpz = $data["puenteBaseLpz"];
    $salioaBaseLpz = $data["salioaBaseLpz"];
    $salidaxitineBaseLpz = $data["salidaxitineBaseLpz"];
    $salidarealBaseLpz = $data["salidarealBaseLpz"];
    $serealizoBaseLpz = $data["serealizoBaseLpz"];
    $diferidoBaseLpz = $data["diferidoBaseLpz"];
    $defectdesBaseLpz = $data["defectdesBaseLpz"];
    $actiontakenBaseLpz = $data["actiontakenBaseLpz"];
    $logbookBaseLpz = $data["logbookBaseLpz"];
    $coddiferidoBaseLpz = $_POST["coddiferidoBaseLpz"];
    $otexploBaseLpz = $data["otexploBaseLpz"];
    $otsaeBaseLpz = $data["otsaeBaseLpz"];
    $notaBaseLpz = $data["notaBaseLpz"];
    $aceitemotBaseLpz = $data["aceitemotBaseLpz"];
    $hydBaseLpz = $data["hydBaseLpz"];

    $stmt = Conexion::conectar()->prepare("insert into baselpz(fech_vuelo_baselpz, explotador_baselpz, arribo_x_itine_baselpz, arriba_real_baselpz, puente_baselpz, salio_a_baselpz, salida_x_itine_baselpz, salida_real_baselpz, se_realizo_baselpz, diferido_baselpz, defect_description_baselpz, action_taken_baselpz, log_book_page_baselpz, codigo_de_diferi_baselpz, ot_explotador_baselpz, ot_sae_baselpz, nota_baselpz, aceite_a_los_motores_baselpz, hyd_baselpz) values('$fechvueloBaseLpz', '$explotadorBaseLpz', '$arriboxitineBaseLpz', '$arriborealBaseLpz', '$puenteBaseLpz', '$salioaBaseLpz', '$salidaxitineBaseLpz', '$salidarealBaseLpz', '$serealizoBaseLpz', '$diferidoBaseLpz', '$defectdesBaseLpz', '$actiontakenBaseLpz', '$logbookBaseLpz', '$coddiferidoBaseLpz', '$otexploBaseLpz', '$otsaeBaseLpz', '$notaBaseLpz', '$aceitemotBaseLpz', '$hydBaseLpz')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoBaseLaPaz($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM baselpz where id_baselpz=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditBaseLaPaz($data)
  {

    $idBaseLpz = $data["idBaseLpz"];
    $fechvueloBaseLpz = $data["fechvueloBaseLpz"];
    $explotadorBaseLpz = $data["explotadorBaseLpz"];
    $arriboxitineBaseLpz = $data["arriboxitineBaseLpz"];
    $arriborealBaseLpz = $data["arriborealBaseLpz"];
    $puenteBaseLpz = $data["puenteBaseLpz"];
    $salioaBaseLpz = $data["salioaBaseLpz"];
    $salidaxitineBaseLpz = $data["salidaxitineBaseLpz"];
    $salidarealBaseLpz = $data["salidarealBaseLpz"];
    $serealizoBaseLpz = $data["serealizoBaseLpz"];
    $diferidoBaseLpz = $data["diferidoBaseLpz"];
    $defectdesBaseLpz = $data["defectdesBaseLpz"];
    $actiontakenBaseLpz = $data["actiontakenBaseLpz"];
    $logbookBaseLpz = $data["logbookBaseLpz"];
    $coddiferidoBaseLpz = $_POST["coddiferidoBaseLpz"];
    $otexploBaseLpz = $data["otexploBaseLpz"];
    $otsaeBaseLpz = $data["otsaeBaseLpz"];
    $notaBaseLpz = $data["notaBaseLpz"];
    $aceitemotBaseLpz = $data["aceitemotBaseLpz"];
    $hydBaseLpz = $data["hydBaseLpz"];

    $stmt = Conexion::conectar()->prepare("update baselpz set fech_vuelo_baselpz='$fechvueloBaseLpz', explotador_baselpz='$explotadorBaseLpz',arribo_x_itine_baselpz='$arriboxitineBaseLpz', arriba_real_baselpz='$arriborealBaseLpz', puente_baselpz='$puenteBaseLpz', salio_a_baselpz='$salioaBaseLpz', salida_x_itine_baselpz='$salidaxitineBaseLpz', salida_real_baselpz='$salidarealBaseLpz', se_realizo_baselpz='$serealizoBaseLpz', diferido_baselpz='$diferidoBaseLpz', defect_description_baselpz='$defectdesBaseLpz', action_taken_baselpz='$actiontakenBaseLpz', log_book_page_baselpz='$logbookBaseLpz', codigo_de_diferi_baselpz='$coddiferidoBaseLpz', ot_explotador_baselpz='$otexploBaseLpz', ot_sae_baselpz='$otsaeBaseLpz', nota_baselpz='$notaBaseLpz', aceite_a_los_motores_baselpz='$aceitemotBaseLpz', hyd_baselpz='$hydBaseLpz' where id_baselpz=$idBaseLpz");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliBaseLaPaz($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from baselpz where id_baselpz=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlRepExcelBasesLapaz($columnas)
  {
    $stmt = Conexion::conectar()->prepare("SELECT $columnas FROM baselpz");
    $stmt->execute();


    // Obtener los resultados
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultados;

    // Cerrar la conexión
    $stmt->closeCursor();
    $stmt->null;

  }


}
