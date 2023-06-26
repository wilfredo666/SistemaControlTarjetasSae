<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegControlHerramienta" ||
      $ruta["query"] == "ctrEditControlHerramienta" ||
      $ruta["query"] == "ctrRegRegistrosControlHerramientas" ||
      $ruta["query"] == "ctrEliControlHerramienta"
     ){
    $metodo = $ruta["query"];
    $controlherramienta = new ControladorHerramientas();
    $controlherramienta->$metodo();
  }
}

class ControladorHerramientas {

  static public function ctrInfoControlHerramientas() {
    $respuesta = ModeloControlHerramientas::mdlInfoControlHerramientas();
    return $respuesta;
  }

  static public function ctrRegControlHerramienta() {
    require_once "../modelo/controlherramientasModelo.php";

    $desControlHerramientas = $_POST["desControlHerramientas"];
    $pnControlHerramientas = $_POST["pnControlHerramientas"];
    $pnaltControlHerramientas = $_POST["pnaltControlHerramientas"];
    $numserieControlHerramientas = $_POST["numserieControlHerramientas"];
    $codigoControlHerramientas = $_POST["codigoControlHerramientas"];
    $marcafabriControlHerramientas = $_POST["marcafabriControlHerramientas"];
    $cantidadControlHerramientas = $_POST["cantidadControlHerramientas"];
    $unidadControlHerramientas = $_POST["unidadControlHerramientas"];
    $ubicacionControlHerramientas = $_POST["ubicacionControlHerramientas"];
    $fechacalControlHerramientas = $_POST["fechacalControlHerramientas"];
    $periodocalControlHerramientas = $_POST["periodocalControlHerramientas"];
    $fechavenciControlHerramientas = $_POST["fechavenciControlHerramientas"];
    $estadoControlHerramientas = $_POST["estadoControlHerramientas"];
    $diasalertaControlHerramientas = $_POST["diasalertaControlHerramientas"];
    $origencaliControlHerramientas = $_POST["origencaliControlHerramientas"];
    $propiedaControlHerramientas = $_POST["propiedaControlHerramientas"];
    $numcarpetaControlHerramientas = $_POST["numcarpetaControlHerramientas"];
    $numcertiControlHerramientas = $_POST["numcertiControlHerramientas"];
    $numregistroControlHerramientas = $_POST["numregistroControlHerramientas"];
    $alcaninstrucControlHerramientas = $_POST["alcaninstrucControlHerramientas"];
    $resinstruControlHerramientas = $_POST["resinstruControlHerramientas"];
    $ubicacionautoControlHerramientas = $_POST["ubicacionautoControlHerramientas"];
    $docsalidaControlHerramientas = $_POST["docsalidaControlHerramientas"];

    $data = array(
      "desControlHerramientas"=>$_POST["desControlHerramientas"],
      "pnControlHerramientas"=>$_POST["pnControlHerramientas"],
      "pnaltControlHerramientas"=>$_POST["pnaltControlHerramientas"],
      "numserieControlHerramientas"=>$_POST["numserieControlHerramientas"],
      "codigoControlHerramientas"=>$_POST["codigoControlHerramientas"],
      "marcafabriControlHerramientas"=>$_POST["marcafabriControlHerramientas"],
      "cantidadControlHerramientas"=>$_POST["cantidadControlHerramientas"],
      "unidadControlHerramientas"=>$_POST["unidadControlHerramientas"],
      "ubicacionControlHerramientas"=>$_POST["ubicacionControlHerramientas"],
      "fechacalControlHerramientas"=>$_POST["fechacalControlHerramientas"],
      "periodocalControlHerramientas"=>$_POST["periodocalControlHerramientas"],
      "fechavenciControlHerramientas"=>$_POST["fechavenciControlHerramientas"],
      "estadoControlHerramientas"=>$_POST["estadoControlHerramientas"],
      "diasalertaControlHerramientas"=>$_POST["diasalertaControlHerramientas"],
      "origencaliControlHerramientas"=>$_POST["origencaliControlHerramientas"],
      "propiedaControlHerramientas"=>$_POST["propiedaControlHerramientas"],
      "numcarpetaControlHerramientas"=>$_POST["numcarpetaControlHerramientas"],
      "numcertiControlHerramientas"=>$_POST["numcertiControlHerramientas"],
      "numregistroControlHerramientas"=>$_POST["numregistroControlHerramientas"],
      "alcaninstrucControlHerramientas"=>$_POST["alcaninstrucControlHerramientas"],
      "resinstruControlHerramientas"=>$_POST["resinstruControlHerramientas"],
      "ubicacionautoControlHerramientas"=>$_POST["ubicacionautoControlHerramientas"],
      "docsalidaControlHerramientas"=>$_POST["docsalidaControlHerramientas"]
    );

    $respuesta = ModeloControlHerramientas::mdlRegControlHerramientas( $data );
    echo $respuesta;
  }

  static public function ctrInfoControlHerramienta( $id ) {
    $respuesta = ModeloControlHerramientas::mdlInfoControlHerramienta( $id );
    return $respuesta;
  }

  static public function ctrEditControlHerramienta() {

    require_once "../modelo/controlherramientasModelo.php";

    $desControlHerramientas = $_POST["desControlHerramientas"];
    $pnControlHerramientas = $_POST["pnControlHerramientas"];
    $pnaltControlHerramientas = $_POST["pnaltControlHerramientas"];
    $numserieControlHerramientas = $_POST["numserieControlHerramientas"];
    $codigoControlHerramientas = $_POST["codigoControlHerramientas"];
    $marcafabriControlHerramientas = $_POST["marcafabriControlHerramientas"];
    $cantidadControlHerramientas = $_POST["cantidadControlHerramientas"];
    $unidadControlHerramientas = $_POST["unidadControlHerramientas"];
    $ubicacionControlHerramientas = $_POST["ubicacionControlHerramientas"];
    $fechacalControlHerramientas = $_POST["fechacalControlHerramientas"];
    $periodocalControlHerramientas = $_POST["periodocalControlHerramientas"];
    $fechavenciControlHerramientas = $_POST["fechavenciControlHerramientas"];
    $estadoControlHerramientas = $_POST["estadoControlHerramientas"];
    $diasalertaControlHerramientas = $_POST["diasalertaControlHerramientas"];
    $origencaliControlHerramientas = $_POST["origencaliControlHerramientas"];
    $propiedaControlHerramientas = $_POST["propiedaControlHerramientas"];
    $numcarpetaControlHerramientas = $_POST["numcarpetaControlHerramientas"];
    $numcertiControlHerramientas = $_POST["numcertiControlHerramientas"];
    $numregistroControlHerramientas = $_POST["numregistroControlHerramientas"];
    $alcaninstrucControlHerramientas = $_POST["alcaninstrucControlHerramientas"];
    $resinstruControlHerramientas = $_POST["resinstruControlHerramientas"];
    $ubicacionautoControlHerramientas = $_POST["ubicacionautoControlHerramientas"];
    $docsalidaControlHerramientas = $_POST["docsalidaControlHerramientas"];
    $data = array(
      "idControlHerramientas"=>$_POST["idControlHerramientas"],
      "desControlHerramientas"=>$_POST["desControlHerramientas"],
      "pnControlHerramientas"=>$_POST["pnControlHerramientas"],
      "pnaltControlHerramientas"=>$_POST["pnaltControlHerramientas"],
      "numserieControlHerramientas"=>$_POST["numserieControlHerramientas"],
      "codigoControlHerramientas"=>$_POST["codigoControlHerramientas"],
      "marcafabriControlHerramientas"=>$_POST["marcafabriControlHerramientas"],
      "cantidadControlHerramientas"=>$_POST["cantidadControlHerramientas"],
      "unidadControlHerramientas"=>$_POST["unidadControlHerramientas"],
      "ubicacionControlHerramientas"=>$_POST["ubicacionControlHerramientas"],
      "fechacalControlHerramientas"=>$_POST["fechacalControlHerramientas"],
      "periodocalControlHerramientas"=>$_POST["periodocalControlHerramientas"],
      "fechavenciControlHerramientas"=>$_POST["fechavenciControlHerramientas"],
      "estadoControlHerramientas"=>$_POST["estadoControlHerramientas"],
      "diasalertaControlHerramientas"=>$_POST["diasalertaControlHerramientas"],
      "origencaliControlHerramientas"=>$_POST["origencaliControlHerramientas"],
      "propiedaControlHerramientas"=>$_POST["propiedaControlHerramientas"],
      "numcarpetaControlHerramientas"=>$_POST["numcarpetaControlHerramientas"],
      "numcertiControlHerramientas"=>$_POST["numcertiControlHerramientas"],
      "numregistroControlHerramientas"=>$_POST["numregistroControlHerramientas"],
      "alcaninstrucControlHerramientas"=>$_POST["alcaninstrucControlHerramientas"],
      "resinstruControlHerramientas"=>$_POST["resinstruControlHerramientas"],
      "ubicacionautoControlHerramientas"=>$_POST["ubicacionautoControlHerramientas"],
      "docsalidaControlHerramientas"=>$_POST["docsalidaControlHerramientas"]
    );

    $respuesta = ModeloControlHerramientas::mdlEditControlHerramienta( $data );
    echo $respuesta;
  }

  static public function ctrEliControlHerramienta(){
    require "../modelo/controlherramientasModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloControlHerramientas::mdlEliControlHerramienta($data);

    echo $respuesta;
  }

  static public function ctrRegRegistrosControlHerramientas()
{
  require_once "../modelo/controlherramientasModelo.php";

  $data = array(
    "registros" => $_FILES['dataControlHerra']
  );

  $respuesta = ModeloControlHerramientas::mdlRegRegistrosControlHerramientas($data);
  echo $respuesta;
}

}