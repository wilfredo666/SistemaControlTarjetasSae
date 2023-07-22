<?php
//capturamos la url
$ruta = parse_url($_SERVER['REQUEST_URI']);

if (isset($ruta["query"])) {
    if ($ruta["query"] == "ctrRegLogHerramientas") {

        $metodo = $ruta["query"];
        $logherramientas = new ControladorLogHerramientas();
        $logherramientas->$metodo();
    }
}

class ControladorLogHerramientas
{
    /*==========================
    Informacion de Log todos 
    ============================*/
    static public function ctrInfoLogHerramientas()
    {
        $respuesta = ModeloLogHerramientas::mdlInfoLogHerramientas();
        return $respuesta;
    }

    /*====================
    Registro nuevo Log
    =====================*/
    static public function ctrRegLogHerramientas()
    {
        require_once "../modelo/logherramientasModelo.php";
        $codigo_herramientas = trim($_POST["codigo_herramientas"]);
        $nomLog = trim($_POST["nomLog"]);
        $observacionesLog = trim($_POST["observacionesLog"]);
        
        $data = array(
            "codigo_herramientas" => $_POST["codigo_herramientas"],
            "nomLog" => $_POST["nomLog"],
            "observacionesLog" => $_POST["observacionesLog"]
        );

        $respuesta = ModeloLogHerramientas::mdlRegLogHerramienta($data);

        echo $respuesta;
    }
}
