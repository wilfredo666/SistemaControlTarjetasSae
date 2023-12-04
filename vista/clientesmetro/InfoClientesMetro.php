<?php
require_once "../../controlador/clientesmetroControlador.php";
require_once "../../modelo/clientesmetroModelo.php";

$idClienteMetro = $_GET["idClienteMetro"];

$cliente = ControladorClientesMetro::ctrInfoClienteMetro($idClienteMetro);
?>
<div class="modal-header">
    <h4 class="modal-title">Informacion Clientes Metrologia:</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-12">
            <table class="table table-success table-striped">
                <tr>
                    <th>CODIGO</th>
                    <td class="text-info"><?php echo $cliente["codigo_clientemetro"]; ?></td>
                </tr>
                <tr>
                    <th>EMPRESA</th>
                    <td class="text-info"><?php echo $cliente["empresa_clientemetro"]; ?></td>
                </tr>
                <tr>
                    <th>CONTACTO</th>
                    <td class="text-info"><?php echo $cliente["contacto_clientemetro"]; ?></td>
                </tr>
                <tr>
                    <th>TELEFONO(s)</th>
                    <td class="text-info"><?php echo $cliente["telefono_clientemetro"]; ?></td>
                </tr>
                <tr>
                    <th>CORREO ELECTRONICO</th>
                    <td class="text-info"><?php echo $cliente["correo_clientemetro"]; ?></td>
                </tr>
                <tr>
                    <th>DIRECCION:</th>
                    <td class="text-info"><?php echo $cliente["direccion_clientemetro"]; ?></td>
                </tr>
                <tr>
                    <th>CIUDAD:</th>
                    <td class="text-info"><?php echo $cliente["ciudad_clientemetro"]; ?></td>
                </tr>
                <tr>
                    <th>NIT:</th>
                    <td class="text-info"><?php echo $cliente["nit_clientemetro"]; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
</div>