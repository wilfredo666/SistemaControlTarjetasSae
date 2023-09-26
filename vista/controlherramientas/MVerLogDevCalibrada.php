<?php
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

$id = $_GET["id"];

$herramientas = ControladorHerramientas::ctrInfoLogDevCalibrada($id);

$herra = json_decode($herramientas["detalle_dev"]);

?>

<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información Total o Parcial de las devoluciones</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <tr>
                    <th>FECHA - HORA:</th>
                    <td><?php echo $herramientas["fecha_hora_dev"]; ?></td>
                </tr>
                <tr>
                    <th>USUARIO ENCARGADO</th>
                    <td><?php echo $herramientas["usuario_dev"]; ?></td>
                </tr>
                <tr>
                    <th>TECNICO | ENTREGA</th>
                    <td><?php echo $herramientas["nombre_usuario"]; ?></td>
                </tr>
                <tr>
                    <th>OBSERVACIONES</th>
                    <td><?php echo $herramientas["observacion_dev"]; ?></td>
                </tr>
            </table>
            <table class="table" style="width: 80%; margin: auto;">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="bg-primary text-white">UBICACION HERRA.</th>
                        <th class="bg-primary text-white">DESCRIPCION & CODIGO HERRAMIENTA</th>
                        <th class="bg-primary text-white">CANTIDAD DEVUELTA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($herra as $value) {
                        $herraDesc = ControladorHerramientas::ctrInfoLogCalibrada($value->ids);
                    ?>
                        <tr>
                            <td><?php echo $herraDesc['ubicacion_controlherramientas'] ?></td>
                            <td><?php echo $herraDesc['descripcion_controlherramientas'] . " - " . $herraDesc["codigo_controlherramientas"] ?></td>
                            <td class="text-center"><?php echo $value->cant ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table">


            </table>

        </div>
    </div>
</div>