<?php
require_once "conexion.php";
class ModeloClientesMetro{

    static public function mdlInfoClientesMetro(){

        $stmt = Conexion::conectar()->prepare("select * from clientes_metro");
        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();
        $stmt->null;
    }

    /*====================
    Registro Cliente
    =====================*/
    static public function mdlRegClienteMetro($data){

        $codigoClienteMetro = $data["codigoClienteMetro"];
        $empresaClienteMetro = $data["empresaClienteMetro"];
        $contactoClienteMetro = $data["contactoClienteMetro"];
        $teleClienteMetro = $data["teleClienteMetro"];
        $correoClienteMetro = $data["correoClienteMetro"];
        $direccionClienteMetro = $data["direccionClienteMetro"];
        $ciudadClienteMetro = $data["ciudadClienteMetro"];
        $nitClienteMetro = $data["nitClienteMetro"];

        $stmt = Conexion::conectar()->prepare("insert into clientes_metro (codigo_clientemetro, empresa_clientemetro, contacto_clientemetro, telefono_clientemetro, correo_clientemetro, direccion_clientemetro, ciudad_clientemetro, nit_clientemetro) values('$codigoClienteMetro', '$empresaClienteMetro', '$contactoClienteMetro', '$teleClienteMetro', '$correoClienteMetro', '$direccionClienteMetro', '$ciudadClienteMetro', '$nitClienteMetro')");

        if($stmt->execute()){
            return "correcto";
        }else{
            return "error";
        }
        $stmt->close();
        $stmt->null;

    }

    /*========================
     Ver Info usuario cliente
    ========================*/
    static public function mdlInfoClienteMetro($idClienteMetro){

        $stmt = Conexion::conectar()->prepare("select * from clientes_metro where id_clientemetro = $idClienteMetro");

        $stmt->execute();
        return $stmt->fetch();

        $stmt->close();
        $stmt->null;

    }

    /*==================
     Elimnar  cliente
    ===================*/
    static public function mdlEliClienteMetro($data){

        $stmt = Conexion::conectar()->prepare("delete from clientes_metro where id_clientemetro = $data");

        if($stmt->execute()){

            return "eliminado";
        }else{
            return "error";
        } 

        $stmt->close();
        $stmt->null;

    }

    /*========================
     Editar usuario cliente
    ========================*/
    static public function mdlEditClienteMetro($data){

        $idClienteMetro = $data["idClienteMetro"];
        $codigoClienteMetro = $data["codigoClienteMetro"];
        $empresaClienteMetro = $data["empresaClienteMetro"];
        $contactoClienteMetro = $data["contactoClienteMetro"];
        $teleClienteMetro = $data["teleClienteMetro"];
        $correoClienteMetro = $data["correoClienteMetro"];
        $direccionClienteMetro = $data["direccionClienteMetro"];
        $ciudadClienteMetro = $data["ciudadClienteMetro"];
        $nitClienteMetro = $data["nitClienteMetro"];

        $stmt = Conexion::conectar()->prepare("update clientes_metro set codigo_clientemetro = '$codigoClienteMetro', empresa_clientemetro = '$empresaClienteMetro', contacto_clientemetro = '$contactoClienteMetro', telefono_clientemetro = '$teleClienteMetro', correo_clientemetro = '$correoClienteMetro', direccion_clientemetro = '$direccionClienteMetro', ciudad_clientemetro = '$ciudadClienteMetro', nit_clientemetro = '$nitClienteMetro' where id_clientemetro =$idClienteMetro");

        if($stmt->execute()){
            return "correcto";
        }else{
            return "error";
        }
        $stmt->close();
        $stmt->null;
    }
}
