<?php
require_once "../../controlador/clientesmetroControlador.php";
require_once "../../modelo/clientesmetroModelo.php";

$idClienteMetro = $_GET["idClienteMetro"];

$cliente = ControladorClientesMetro::ctrInfoClienteMetro($idClienteMetro);
?>

<form action="" id="EditClienteMetro" enctype="multipart/form-data">
    <div class="modal-header">
        <h4 class="modal-title">Editar Cliente Metrologia</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">CODIGO</label>
                    <input type="text" class="form-control" name="codigoClienteMetro" id="codigoClienteMetro" value="<?php echo $cliente["codigo_clientemetro"]; ?>">
                    <input type="hidden" name="idClienteMetro" id="idClienteMetro" value="<?php echo $idClienteMetro; ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">EMPRESA</label>
                    <input type="text" class="form-control" name="empresaClienteMetro" id="empresaClienteMetro" value="<?php echo $cliente["empresa_clientemetro"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">CONTACTO</label>
                    <input type="text" class="form-control" name="contactoClienteMetro" id="contactoClienteMetro" value="<?php echo $cliente["contacto_clientemetro"]; ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">TELEFONO(s)</label>
                    <input type="text" class="form-control" name="teleClienteMetro" id="teleClienteMetro" value="<?php echo $cliente["telefono_clientemetro"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">CORREO ELECTRONICO</label>
                    <input type="email" class="form-control" name="correoClienteMetro" id="correoClienteMetro" value="<?php echo $cliente["correo_clientemetro"]; ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">DIRECCION</label>
                    <input type="text" class="form-control" name="direccionClienteMetro" id="direccionClienteMetro" value="<?php echo $cliente["direccion_clientemetro"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">CIUDAD</label>
                    <select name="ciudadClienteMetro" id="ciudadClienteMetro" class="form-control">
                        <option value="LA PAZ" <?php if ($cliente["ciudad_clientemetro"] == "LA PAZ") : ?> selected <?php endif; ?>>LA PAZ</option>
                        <option value="ORURO" <?php if ($cliente["ciudad_clientemetro"] == "ORURO") : ?> selected <?php endif; ?>>ORURO</option>
                        <option value="POTOSI" <?php if ($cliente["ciudad_clientemetro"] == "POTOSI") : ?> selected <?php endif; ?>>POTOSI</option>
                        <option value="COCHABAMBA" <?php if ($cliente["ciudad_clientemetro"] == "COCHABAMBA") : ?> selected <?php endif; ?>>COCHABAMBA</option>
                        <option value="SUCRE" <?php if ($cliente["ciudad_clientemetro"] == "SUCRE") : ?> selected <?php endif; ?>>SUCRE</option>
                        <option value="TARIJA" <?php if ($cliente["ciudad_clientemetro"] == "TARIJA") : ?> selected <?php endif; ?>>TARIJA</option>
                        <option value="PANDO" <?php if ($cliente["ciudad_clientemetro"] == "PANDO") : ?> selected <?php endif; ?>>PANDO</option>
                        <option value="BENI" <?php if ($cliente["ciudad_clientemetro"] == "BENI") : ?> selected <?php endif; ?>>BENI</option>
                        <option value="SANTA CRUZ" <?php if ($cliente["ciudad_clientemetro"] == "SANTA CRUZ") : ?> selected <?php endif; ?>>SANTA CRUZ</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">NIT</label>
                    <input type="text" class="form-control" name="nitClienteMetro" id="nitClienteMetro" value="<?php echo $cliente["nit_clientemetro"]; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="EditarClienteMetro()">Actualizar</button>
    </div>
</form>