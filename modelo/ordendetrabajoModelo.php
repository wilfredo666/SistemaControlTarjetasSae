<?php
require_once "conexion.php";

class ModeloOrdenDeTrabajo
{
  static public function mdlInfoOrdenesDeTrabajos()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM orden_de_trabajo");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegOrdenDeTrabajo($data)
  {
    $ordendetrabajonumeroOrdenes = $data["ordendetrabajonumeroOrdenes"];
    $nombrematriculaOrdenes = $data["nombrematriculaOrdenes"];
    $thOrdenes = $data["thOrdenes"];
    $tcOrdenes = $data["tcOrdenes"];
    $modelopnOrdenes = $data["modelopnOrdenes"];
    $snOrdenes = $data["snOrdenes"];
    $solicitadaporOrdenes = $data["solicitadaporOrdenes"];
    $nombreautorizadaorOrdenes = $data["nombreautorizadaorOrdenes"];
    $documentosadjuntosrecibidosOrdenes = $data["documentosadjuntosrecibidosOrdenes"];
    $descripciontrabajosOrdenes = $_POST["descripciontrabajosOrdenes"];
    $ordenesdetrabajosrelacionadasOrdenes = $data["ordenesdetrabajosrelacionadasOrdenes"];
    $documentosadjuntosentregadosOrdenes = $data["documentosadjuntosentregadosOrdenes"];
    $observacionesOrdenes = $data["observacionesOrdenes"];
    $caratulaOrdenes = $data["caratulaOrdenes"];

    $stmt = Conexion::conectar()->prepare("insert into orden_de_trabajo(numero_ordendetrabajo, nombrematricula_ordendetrabajo, th_ordendetrabajo, tc_ordendetrabajo, modelo_pn_ordendetrabajo, sn_ordendetrabajo, solicitadapor_ordendetrabajo, nombreautorizado_ordendetrabajo, documentosadjuntosrecibidos_ordendetrabajo, descripciondetrabajosefectuados_ordendetrabajo, ordenesdetrabajosrelacionadas_ordendetrabajo, documentosadjuntosentregados_ordendetrabajo, observaciones_ordendetrabajo, titulocaratula_ordendetrabajo) values('$ordendetrabajonumeroOrdenes', '$nombrematriculaOrdenes', '$thOrdenes', '$tcOrdenes', '$modelopnOrdenes', '$snOrdenes', '$solicitadaporOrdenes', '$nombreautorizadaorOrdenes', '$documentosadjuntosrecibidosOrdenes', '$descripciontrabajosOrdenes', '$ordenesdetrabajosrelacionadasOrdenes', '$documentosadjuntosentregadosOrdenes', '$observacionesOrdenes', '$caratulaOrdenes')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoOrdenDeTrabajo($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM orden_de_trabajo where id_ordendetrabajo=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditOrdenDeTrabajo($data)
  {

    $idOrdenTrabajo = $data["idOrdenTrabajo"];
    $ordendetrabajonumeroOrdenes = $data["ordendetrabajonumeroOrdenes"];
    $nombrematriculaOrdenes = $data["nombrematriculaOrdenes"];
    $thOrdenes = $data["thOrdenes"];
    $tcOrdenes = $data["tcOrdenes"];
    $modelopnOrdenes = $data["modelopnOrdenes"];
    $snOrdenes = $data["snOrdenes"];
    $solicitadaporOrdenes = $data["solicitadaporOrdenes"];
    $nombreautorizadaorOrdenes = $data["nombreautorizadaorOrdenes"];
    $documentosadjuntosrecibidosOrdenes = $data["documentosadjuntosrecibidosOrdenes"];
    $descripciontrabajosOrdenes = $_POST["descripciontrabajosOrdenes"];
    $ordenesdetrabajosrelacionadasOrdenes = $data["ordenesdetrabajosrelacionadasOrdenes"];
    $documentosadjuntosentregadosOrdenes = $data["documentosadjuntosentregadosOrdenes"];
    $observacionesOrdenes = $data["observacionesOrdenes"];
    $caratulaOrdenes = $data["caratulaOrdenes"];

    $stmt = Conexion::conectar()->prepare("update orden_de_trabajo set numero_ordendetrabajo='$ordendetrabajonumeroOrdenes', nombrematricula_ordendetrabajo='$nombrematriculaOrdenes',th_ordendetrabajo='$thOrdenes', tc_ordendetrabajo='$tcOrdenes', modelo_pn_ordendetrabajo='$modelopnOrdenes', sn_ordendetrabajo='$snOrdenes', solicitadapor_ordendetrabajo='$solicitadaporOrdenes', nombreautorizado_ordendetrabajo='$nombreautorizadaorOrdenes', documentosadjuntosrecibidos_ordendetrabajo='$documentosadjuntosrecibidosOrdenes', descripciondetrabajosefectuados_ordendetrabajo='$descripciontrabajosOrdenes', ordenesdetrabajosrelacionadas_ordendetrabajo='$ordenesdetrabajosrelacionadasOrdenes', documentosadjuntosentregados_ordendetrabajo='$documentosadjuntosentregadosOrdenes', observaciones_ordendetrabajo='$observacionesOrdenes', titulocaratula_ordendetrabajo='$caratulaOrdenes' where id_ordendetrabajo=$idOrdenTrabajo");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliOrdenDeTrabajo($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from orden_de_trabajo where id_ordendetrabajo=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlRepOrdenTrabajo($id){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM orden_de_trabajo where id_ordendetrabajo=$id");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }

}
