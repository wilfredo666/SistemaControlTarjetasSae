<?php
require_once "../../controlador/metrologiaControlador.php";
require_once "../../modelo/metrologiaModelo.php";

$id = $_GET["id"];

$metrologias = ControladorMetrologias::ctrInfoMetrologia($id);

?>

<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información Metrologia</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-6">
            <table class="table">

                <tr>
                    <th>N° CERTIFICADO</th>
                    <td><?php echo $metrologias["num_certificado_metro"]; ?></td>
                </tr>

                <tr>
                    <th>REGISTRO</th>
                    <td><?php echo $metrologias["registro_metro"]; ?></td>
                </tr>

                <tr>
                    <th>CLIENTE</th>
                    <td><?php echo $metrologias["id_cliente"]; ?></td>
                </tr>

                <tr>
                    <th>MAGNITUD</th>
                    <td><?php echo $metrologias["magnitud_metro"]; ?></td>
                </tr>

                <tr>
                    <th>INSTRUMENTO</th>
                    <td><?php echo $metrologias["instrumento_metro"]; ?></td>
                </tr>

                <tr>
                    <th>ALCANCE</th>
                    <td><?php echo $metrologias["alcance_metro"]; ?></td>
                </tr>

                <tr>
                    <th>RESOLUCION</th>
                    <td><?php echo $metrologias["resolucion_metro"]; ?></td>
                </tr>

                <tr>
                    <th>MARCA</th>
                    <td><?php echo $metrologias["marca_metro"]; ?></td>
                </tr>

                <tr>
                    <th>MODELO</th>
                    <td><?php echo $metrologias["modelo_metro"]; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6">
            <table class="table">
                <tr>
                    <th>N° SERIE</th>
                    <td><?php echo $metrologias["num_serie_metro"]; ?></td>
                </tr>

                <tr>
                    <th>IDENTIFICACION INTERNA</th>
                    <td><?php echo $metrologias["identificacion_interna_metro"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA CALIBRACION</th>
                    <td><?php echo $metrologias["fecha_calibracion_metro"]; ?></td>
                </tr>

                <tr>
                    <th>VIGENCIA</th>
                    <td><?php echo $metrologias["vigencia_metro"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA PROXIMA CALIBRACION</th>
                    <td><?php echo $metrologias["fecha_proxima_calibracion_metro"]; ?></td>
                </tr>

                <tr>
                    <th>CONDICION</th>
                    <td><?php echo $metrologias["condicion_metro"]; ?></td>
                </tr>

                <tr>
                    <th>COSTO (bs)</th>
                    <td><?php echo $metrologias["costo_metro"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA INGRESO</th>
                    <td><?php echo $metrologias["fecha_ingreso_metro"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA CONCLUIDA</th>
                    <td><?php echo $metrologias["fecha_concluida_metro"]; ?></td>
                </tr>

            </table>

        </div>
    </div>
</div>

