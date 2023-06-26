<?php
require_once "conexion.php";

class ModeloMarcacion
{

  static public function mdlInfoMarcaciones()
  {
    //$stmt = Conexion::conectar()->prepare("SELECT * FROM marcacion");
    $stmt = Conexion::conectar()->prepare("SELECT * FROM marcacion JOIN usuario ON marcacion.ci_usuario=usuario.ci_usuario");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoMarcacion($cod)
  {
    //$stmt = Conexion::conectar()->prepare("SELECT marcacion.*,time_to_sec(s.horas_maximo)/60 AS minutos, s.horas_maximo FROM marcacion INNER JOIN  seguimiento s on marcacion.codigo_seguimiento = s.codigo_seguimiento where marcacion.codigo_seguimiento='$cod'");
    $stmt = Conexion::conectar()->prepare("SELECT marcacion.*,nombre_usuario,time_to_sec(s.horas_maximo)/60 AS minutos, s.horas_maximo FROM marcacion INNER JOIN  seguimiento s on marcacion.codigo_seguimiento = s.codigo_seguimiento INNER JOIN usuario on marcacion.ci_usuario = usuario.ci_usuario where marcacion.codigo_seguimiento='$cod'");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }
  static public function mdlInfoUsuario()
  {
    //$stmt = Conexion::conectar()->prepare("SELECT marcacion.*,time_to_sec(s.horas_maximo)/60 AS minutos, s.horas_maximo FROM marcacion INNER JOIN  seguimiento s on marcacion.codigo_seguimiento = s.codigo_seguimiento where marcacion.codigo_seguimiento='$cod'");
    $stmt = Conexion::conectar()->prepare("SELECT usuario.ci_usuario FROM usuario");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegMarcacion($data)
  {
    $codigo = $data["codigo_tramite"];
    $ciUsuario = $data["ciUsuario"];
    date_default_timezone_set("America/La_Paz");
    $fecha = date("Y-m-d");
    $hora = date("H:i:s");
    $fechaHora = $fecha . " " . $hora;

    /*======================================
    comprobar si salio o ingreso o si existe
    =======================================*/
    $seguimiento = Conexion::conectar()->prepare("select * from seguimiento where  codigo_seguimiento='$codigo'");

    $seguimiento->execute();
    $estado = $seguimiento->fetch();

    if ($estado == false) {
      return "error";
    } else {

      if ($estado["disponible"] == 1) {
        //marcando salida
        $stmt = Conexion::conectar()->prepare("insert into marcacion(codigo_seguimiento, fecha_hora, tipo, ci_usuario) values('$codigo', '$fechaHora', 'SALIDA', '$ciUsuario')");

        //actualizando a no disponible
        $seguimiento_act = Conexion::conectar()->prepare("update seguimiento set disponible=0 where  codigo_seguimiento='$codigo'");
        $movimiento = "salida";
      } else {
        //marcando entrada
        $stmt = Conexion::conectar()->prepare("insert into marcacion(codigo_seguimiento, fecha_hora, tipo, ci_usuario) values('$codigo', '$fechaHora', 'ENTRADA', '$ciUsuario')");

        //actualizando a disponible
        $seguimiento_act = Conexion::conectar()->prepare("update seguimiento set disponible=1 where  codigo_seguimiento='$codigo'");
        $movimiento = "entrada";
      }


      if ($stmt->execute() && $seguimiento_act->execute()) {
        return $movimiento;
      } else {
        return "error";
      }


      $stmt->close();
      $stmt->null;
    }
  }
}
