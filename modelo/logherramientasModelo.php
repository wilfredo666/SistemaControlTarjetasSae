<?php
require_once "conexion.php";
class ModeloLogHerramientas
{

    /*========================
    Informacion Log Herramientas todos
    ========================*/
    static public function mdlInfoLogHerramientas()
    {

        $stmt = Conexion::conectar()->prepare("select * from log_herramientas");
        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();
        $stmt->null;
    }

    /*====================
    Registro Log Herramientas
    =====================*/
    static public function mdlRegLogHerramienta($data)
    {

        $codigo = $data["codigo_herramientas"];
        $nomLog = $data["nomLog"];
        $observacionesLog = $data["observacionesLog"];
        date_default_timezone_set("America/La_Paz");
        $fecha = date("Y-m-d");
        $hora = date("H:i:s");
        $fechaHora = $fecha . " " . $hora;

        /*======================================
    comprobar si salio o ingreso o si existe
    =======================================*/
        $herramientas = Conexion::conectar()->prepare("select * from herramientas where  codigo_herramientas='$codigo'");

        $herramientas->execute();
        $estado = $herramientas->fetch();

        if ($estado == false) {
            return "error";
        } else {

            if ($estado["disponible"] == 1) {
                //marcando salida
                $stmt = Conexion::conectar()->prepare("insert into log_herramientas(codigo_herramientas, fecha_hora, tipo, nombre_usuario, observaciones) values('$codigo', '$fechaHora', 'SALIDA', '$nomLog', '$observacionesLog')");

                //actualizando a no disponible
                $herramientas_act = Conexion::conectar()->prepare("update herramientas set disponible=0 where  codigo_herramientas='$codigo'");
                $movimiento = "salida";
            } else {
                //marcando entrada
                $stmt = Conexion::conectar()->prepare("insert into log_herramientas(codigo_herramientas, fecha_hora, tipo, nombre_usuario, observaciones) values('$codigo', '$fechaHora', 'ENTRADA', '$nomLog', '$observacionesLog')");

                //actualizando a disponible
                $herramientas_act = Conexion::conectar()->prepare("update herramientas set disponible=1 where  codigo_herramientas='$codigo'");
                $movimiento = "entrada";
            }


            if ($stmt->execute() && $herramientas_act->execute()) {
                return $movimiento;
            } else {
                return "error";
            }


            $stmt->close();
            $stmt->null;
        }
    }
}
