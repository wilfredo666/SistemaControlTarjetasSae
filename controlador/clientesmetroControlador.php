<?php
//capturamos la url
$ruta = parse_url($_SERVER['REQUEST_URI']);

if (isset($ruta["query"])) {
    if (
        $ruta["query"] == "ctrRegClientesMetro" ||
        $ruta["query"] == "ctrEliClientesMetro" ||
        $ruta["query"] == "ctrEditClientesMetro"
    ) {

        $metodo = $ruta["query"];
        $cliente = new ControladorClientesMetro();
        $cliente->$metodo();
    }
}

class ControladorClientesMetro
{
    /*==========================
    Informacion de clientes todos 
    ============================*/
    static public function ctrInfoClientesMetros()
    {
        $respuesta = ModeloClientesMetro::mdlInfoClientesMetro();
        return $respuesta;
    }

    /*====================
    Registro nuevo clientes
    =====================*/
    static public function ctrRegClientesMetro()
    {
        require_once "../modelo/clientesmetroModelo.php";

        $codigoClienteMetro = trim($_POST["codigoClienteMetro"]);
        $empresaClienteMetro = trim($_POST["empresaClienteMetro"]);
        $contactoClienteMetro = trim($_POST["contactoClienteMetro"]);
        $teleClienteMetro = trim($_POST["teleClienteMetro"]);
        $correoClienteMetro = trim($_POST["correoClienteMetro"]);
        $direccionClienteMetro = trim($_POST["direccionClienteMetro"]);
        $ciudadClienteMetro = trim($_POST["ciudadClienteMetro"]);
        $nitClienteMetro = trim($_POST["nitClienteMetro"]);

        $data = array(
            "codigoClienteMetro" => $codigoClienteMetro,
            "empresaClienteMetro" => $empresaClienteMetro,
            "contactoClienteMetro" => $contactoClienteMetro,
            "teleClienteMetro" => $teleClienteMetro,
            "correoClienteMetro" => $correoClienteMetro,
            "direccionClienteMetro" => $direccionClienteMetro,
            "ciudadClienteMetro" => $ciudadClienteMetro,
            "nitClienteMetro" => $nitClienteMetro
        );

        $respuesta = ModeloClientesMetro::mdlRegClienteMetro($data);

        echo $respuesta;
    }

    /*========================
    Ver Info usuario cliente
    ========================*/
    static public function ctrInfoClienteMetro($idClienteMetro)
    {
        $respuesta = ModeloClientesMetro::mdlInfoClienteMetro($idClienteMetro);
        return $respuesta;
    }

    /*=======================
    Eliminar usuario cliente
    ========================*/
    static public function ctrEliClientesMetro()
    {
        require_once "../modelo/clientesmetroModelo.php";
        $data = $_POST["id"];
        $respuesta = ModeloClientesMetro::mdlEliClienteMetro($data);
        echo $respuesta;
    }

    /*====================
    Editar Personal
    =====================*/
    static public function ctrEditClientesMetro()
    {
        require_once "../modelo/clientesmetroModelo.php";

        $idClienteMetro = trim($_POST["idClienteMetro"]);
        $codigoClienteMetro = trim($_POST["codigoClienteMetro"]);
        $empresaClienteMetro = trim($_POST["empresaClienteMetro"]);
        $contactoClienteMetro = trim($_POST["contactoClienteMetro"]);
        $teleClienteMetro = trim($_POST["teleClienteMetro"]);
        $correoClienteMetro = trim($_POST["correoClienteMetro"]);
        $direccionClienteMetro = trim($_POST["direccionClienteMetro"]);
        $ciudadClienteMetro = trim($_POST["ciudadClienteMetro"]);
        $nitClienteMetro = trim($_POST["nitClienteMetro"]);

        $data = array(
            "idClienteMetro" => $idClienteMetro,
            "codigoClienteMetro" => $codigoClienteMetro,
            "empresaClienteMetro" => $empresaClienteMetro,
            "contactoClienteMetro" => $contactoClienteMetro,
            "teleClienteMetro" => $teleClienteMetro,
            "correoClienteMetro" => $correoClienteMetro,
            "direccionClienteMetro" => $direccionClienteMetro,
            "ciudadClienteMetro" => $ciudadClienteMetro,
            "nitClienteMetro" => $nitClienteMetro
        );

        $respuesta = ModeloClientesMetro::mdlEditClienteMetro($data);

        echo $respuesta;
    }
}
