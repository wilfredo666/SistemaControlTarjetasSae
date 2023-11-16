<?php
require_once "../../controlador/metrologiaControlador.php";
require_once "../../modelo/metrologiaModelo.php";

$id = $_GET["id"];

$metrologias = ControladorMetrologias::ctrInfoMetrologia($id);

?>
<div class="modal-header">
    <h4 class="modal-title">Actualizar Trabajos Metrologia</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditMetrologia" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">N° CERTIFICADO</label>
                    <input type="text" class="form-control" id="numcertificadoMetrologia" name="numcertificadoMetrologia" value="<?php echo $metrologias["num_certificado_metro"]; ?>">
                    <input type="hidden" name="idMetrologia" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">REGISTRO</label>
                    <input type="text" class="form-control" id="registroMetrologia" name="registroMetrologia" value="<?php echo $metrologias["registro_metro"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">CLIENTE</label>
                    <input type="text" class="form-control" id="clienteMetrologia" name="clienteMetrologia" value="<?php echo $metrologias["id_cliente"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">MAGNITUD</label>
                    <input type="text" class="form-control" id="magnitudMetrologia" name="magnitudMetrologia" value="<?php echo $metrologias["magnitud_metro"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">INSTRUMENTO</label>
                    <input type="text" class="form-control" id="instrumentoMetrologia" name="instrumentoMetrologia" value="<?php echo $metrologias["instrumento_metro"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">ALCANCE</label>
                    <input type="text" class="form-control" id="alcanceMetrologia" name="alcanceMetrologia" value="<?php echo $metrologias["alcance_metro"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">RESOLUCION</label>
                    <input type="text" class="form-control" id="resolucionMetrologia" name="resolucionMetrologia" value="<?php echo $metrologias["resolucion_metro"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">FABRICANTE</label>
                    <input type="text" class="form-control" id="marcaMetrologia" name="marcaMetrologia" value="<?php echo $metrologias["marca_metro"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">MODELO</label>
                    <input type="text" class="form-control" id="modeloMetrologia" name="modeloMetrologia" value="<?php echo $metrologias["modelo_metro"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">N° SERIE</label>
                    <input type="text" class="form-control" id="numserieMetrologia" name="numserieMetrologia" value="<?php echo $metrologias["num_serie_metro"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">IDENTIFICACION INTERNA</label>
                    <input type="text" class="form-control" id="identificacioninternaMetrologia" name="identificacioninternaMetrologia" value="<?php echo $metrologias["identificacion_interna_metro"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">FECHA CALIBRACION</label>
                    <input type="date" class="form-control" id="fechacalibracionMetrologia" name="fechacalibracionMetrologia" value="<?php echo $metrologias["fecha_calibracion_metro"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">VIGENCIA</label>
                    <select name="vigenciaMetrologia" id="vigenciaMetrologia" class="form-control">
                        <option>Seleccione</option>
                        <option value="06 MESES" <?php if ($metrologias["vigencia_metro"] == "06 MESES") : ?> selected <?php endif; ?>>06 MESES</option>
                        <option value="12 MESES" <?php if ($metrologias["vigencia_metro"] == "12 MESES") : ?> selected <?php endif; ?>>12 MESES</option>
                        <option value="18 MESES" <?php if ($metrologias["vigencia_metro"] == "18 MESES") : ?> selected <?php endif; ?>>18 MESES</option>
                        <option value="24 MESES" <?php if ($metrologias["vigencia_metro"] == "24 MESES") : ?> selected <?php endif; ?>>24 MESES</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">FECHA PROXIMA CALIBRACION</label>
                    <input type="date" class="form-control" id="fechaproximacalibracionMetrologia" name="fechaproximacalibracionMetrologia" value="<?php echo $metrologias["fecha_proxima_calibracion_metro"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">CONDICION</label>
                    <select name="condicionMetrologia" id="condicionMetrologia" class="form-control">
                        <option>Seleccione</option>
                        <option value="VENCIDO" <?php if ($metrologias["condicion_metro"] == "VENCIDO") : ?> selected <?php endif; ?>>VENCIDO</option>
                        <option value="VIGENTE" <?php if ($metrologias["condicion_metro"] == "VIGENTE") : ?> selected <?php endif; ?>>VIGENTE</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">COSTO (bs)</label>
                    <input type="text" class="form-control" id="costoMetrologia" name="costoMetrologia" value="<?php echo $metrologias["costo_metro"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">FECHA DE EMISIÓN</label>
                    <input type="date" class="form-control" id="fechaemisionMetrologia" name="fechaemisionMetrologia" value="<?php echo $metrologias["fechaemision_metro"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">FECHA INGRESO</label>
                    <input type="date" class="form-control" id="fechaingresoMetrologia" name="fechaingresoMetrologia" value="<?php echo $metrologias["fecha_ingreso_metro"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">FECHA CONCLUIDA</label>
                    <input type="date" class="form-control" id="fechaconcluidaMetrologia" name="fechaconcluidaMetrologia" value="<?php echo $metrologias["fecha_concluida_metro"]; ?>">
                </div>
            </div>
        </div>
    </form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditMetrologias()">Guardar</button>
</div>