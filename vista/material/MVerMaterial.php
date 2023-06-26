<?php
require_once "../../controlador/materialControlador.php";
require_once "../../modelo/materialModelo.php";

$id = $_GET["id"];

$material = ControladorMaterial::ctrInfoMaterial($id);

?>

<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información del Material</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-6">
            <table class="table">
                <tr>
                    <th>Item</th>
                    <td><?php echo $material["id_material"]; ?></td>
                </tr>

                <tr>
                    <th>Descripcion</th>
                    <td><?php echo $material["descripcion_mat"]; ?></td>
                </tr>

                <tr>
                    <th>Descripcion</th>
                    <td><?php echo $material["pn_mat"]; ?></td>
                </tr>

                <tr>
                    <th>P/N</th>
                    <td><?php echo $material["pnalt_mat"]; ?></td>
                </tr>

                <tr>
                    <th>P/N ALT.</th>
                    <td></td>
                </tr>

                <tr>
                    <th>QTY</th>
                    <td><?php echo $material["qty_mat"]; ?></td>
                </tr>

                <tr>
                    <th>Unidad</th>
                    <td><?php echo $material["unidad_mat"]; ?></td>
                </tr>

                <tr>
                    <th>Ref. Manual</th>
                    <td><?php echo $material["refmanual_mat"]; ?></td>
                </tr>

                <tr>
                    <th>Area</th>
                    <td><?php echo $material["area_mat"]; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6">
            <table class="table">
                <tr>
                    <th>Ref. Tarjet</th>
                    <td><?php echo $material["codigo_seguimiento_mat"]; ?></td>
                </tr>

                <tr>
                    <th>Observaciones</th>
                    <td><?php echo $material["observaciones_mat"]; ?></td>
                </tr>

                <tr>
                    <th>Prioridad</th>
                    <td><?php echo $material["prioridad_mat"]; ?></td>
                </tr>

                <tr>
                    <th>Obse. Prioridad</th>
                    <td><?php echo $material["obserprioridad_mat"]; ?></td>
                </tr>

                <tr>
                    <th>Estado de Material</th>
                    <td><?php echo $material["estadodematerial_mat"]; ?></td>
                </tr>

                <tr>
                    <th>Estado</th>
                    <td><?php echo $material["estado_mat"]; ?></td>
                </tr>

                <tr>
                    <th>Almacen SAE</th>
                    <td><?php echo $material["almacen_mat"]; ?></td>
                </tr>

                <tr>
                    <th>Fecha Arribo</th>
                    <td><?php echo $material["fechadearribo_mat"]; ?></td>
                </tr>

            </table>

        </div>
    </div>

</div>

