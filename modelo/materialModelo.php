<?php
require_once "conexion.php";

class ModeloMaterial
{

  static public function mdlInfoMateriales()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM materiales");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }


  static public function mdlRegMaterial($data)
  {

    $desMaterial = $data["desMaterial"];
    $pnMaterial = $data["pnMaterial"];
    $pnaltMaterial = $data["pnaltMaterial"];
    $qtyMaterial = $data["qtyMaterial"];
    $unidadMaterial = $data["unidadMaterial"];
    $refmanualMaterial = $data["refmanualMaterial"];
    $reftarjetaMaterial = $data["reftarjetaMaterial"];
    $areaMaterial = $data["areaMaterial"];
    $obMaterial = $data["obMaterial"];
    $prioMaterial = $data["prioMaterial"];
    $obsprioMaterial = $data["obsprioMaterial"];
    $estadodeMaterial = $data["estadodeMaterial"];
    $estadoMaterial = $data["estadoMaterial"];
    $almaMaterial = $data["almaMaterial"];

    date_default_timezone_set("America/La_Paz");
    $fecha = date("Y-m-d");

    $stmt = Conexion::conectar()->prepare("insert into materiales(descripcion_mat, pn_mat, pnalt_mat, qty_mat, unidad_mat, refmanual_mat, codigo_seguimiento_mat, area_mat, observaciones_mat, prioridad_mat, obserprioridad_mat, estadodematerial_mat, estado_mat, almacen_mat, fechadearribo_mat) values('$desMaterial', '$pnMaterial', '$pnaltMaterial', '$qtyMaterial', '$unidadMaterial', '$refmanualMaterial', '$reftarjetaMaterial', '$areaMaterial', '$obMaterial', '$prioMaterial', '$obsprioMaterial', '$estadodeMaterial', '$estadoMaterial', '$almaMaterial', '$fecha')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoMaterial($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM materiales where id_material=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditMaterial($data)
  {

    $idMaterial = $data["idMaterial"];
    $desMaterial = $data["desMaterial"];
    $pnMaterial = $data["pnMaterial"];
    $pnaltMaterial = $data["pnaltMaterial"];
    $qtyMaterial = $data["qtyMaterial"];
    $unidadMaterial = $data["unidadMaterial"];
    $refmanualMaterial = $data["refmanualMaterial"];
    $reftarjetaMaterial = $data["reftarjetaMaterial"];
    $areaMaterial = $data["areaMaterial"];
    $obMaterial = $data["obMaterial"];
    $prioMaterial = $data["prioMaterial"];
    $obsprioMaterial = $data["obsprioMaterial"];
    $estadodeMaterial = $data["estadodeMaterial"];
    $estadoMaterial = $data["estadoMaterial"];
    $almaMaterial = $data["almaMaterial"];
    $fechaMaterial = $data["fechaMaterial"];

    $stmt = Conexion::conectar()->prepare("update materiales set descripcion_mat='$desMaterial', pn_mat='$pnMaterial',pnalt_mat='$pnaltMaterial', qty_mat='$qtyMaterial', unidad_mat='$unidadMaterial', refmanual_mat='$refmanualMaterial', codigo_seguimiento_mat='$reftarjetaMaterial', area_mat='$areaMaterial', observaciones_mat='$obMaterial', prioridad_mat='$prioMaterial', obserprioridad_mat='$obsprioMaterial', estadodematerial_mat='$estadodeMaterial', estado_mat='$estadoMaterial', almacen_mat='$almaMaterial', fechadearribo_mat='$fechaMaterial' where id_material=$idMaterial");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliMaterial($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from materiales where id_material=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlCambEstado($data){

    $estado=$data["estado"];
    $codSegMat=$data["codSegMat"];

    //cambio de estado de la tabla material
    $MatMat = Conexion::conectar()->prepare("update materiales set estado_mat='$estado' where codigo_seguimiento_mat='$codSegMat'");


    //cambio de estado de la tabla seguimiento
    $MatSegui = Conexion::conectar()->prepare("update seguimiento set materiales_seguimiento='$estado' where codigo_seguimiento='$codSegMat'");


    if ($MatMat->execute()) {
        $MatSegui->execute();
        return "ok";
    } else {

        return "error";
    }

    $stmt->close();
    $stmt->null;
}


}
