<?php
require_once "../../controlador/ordendetrabajoControlador.php";
require_once "../../modelo/ordendetrabajoModelo.php";

$id = $_GET["id"];

$ordendetrabajo = ControladorOrdenDeTrabajo::ctrInfoOrdenDeTrabajo($id);

?>
<div class="modal-header">
    <h4 class="modal-title">Actualizar Orden de Trabajo</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditOrdenDeTrabajo" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">ORDEN DE TRABAJO Nº</label>
                    <input type="text" class="form-control" id="ordendetrabajonumeroOrdenes" name="ordendetrabajonumeroOrdenes" value="<?php echo $ordendetrabajo["numero_ordendetrabajo"]; ?>">
                    <input type="hidden" name="idOrdenTrabajo" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">NOMBRE MATRICULA</label>
                    <input type="text" class="form-control" id="nombrematriculaOrdenes" name="nombrematriculaOrdenes" value="<?php echo $ordendetrabajo["nombrematricula_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">TH</label>
                    <input type="text" class="form-control" id="thOrdenes" name="thOrdenes" value="<?php echo $ordendetrabajo["th_ordendetrabajo"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">TC</label>
                    <input type="text" class="form-control" id="tcOrdenes" name="tcOrdenes" value="<?php echo $ordendetrabajo["tc_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">MODELO P/N</label>
                    <input type="text" class="form-control" id="modelopnOrdenes" name="modelopnOrdenes" value="<?php echo $ordendetrabajo["modelo_pn_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">S/N</label>
                    <input type="text" class="form-control" id="snOrdenes" name="snOrdenes" value="<?php echo $ordendetrabajo["sn_ordendetrabajo"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">SOLICITADA POR</label>
                    <input type="text" class="form-control" id="solicitadaporOrdenes" name="solicitadaporOrdenes" value="<?php echo $ordendetrabajo["solicitadapor_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">NOMBRE AUTORIZADA</label>
                    <input type="text" class="form-control" id="nombreautorizadaorOrdenes" name="nombreautorizadaorOrdenes" value="<?php echo $ordendetrabajo["nombreautorizado_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">DOCUMENTOS ADJUNTOS RECIBIDOS</label>
                    <input type="text" class="form-control" id="documentosadjuntosrecibidosOrdenes" name="documentosadjuntosrecibidosOrdenes" value="<?php echo $ordendetrabajo["documentosadjuntosrecibidos_ordendetrabajo"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">DESCRIPCION DE TRABAJOS EFECTUADOS</label>
                    <input type="text" class="form-control" id="descripciontrabajosOrdenes" name="descripciontrabajosOrdenes" value="<?php echo $ordendetrabajo["descripciondetrabajosefectuados_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">ÓRDENES DE TRABAJO RELACIONADAS</label>
                    <input type="text" class="form-control" id="ordenesdetrabajosrelacionadasOrdenes" name="ordenesdetrabajosrelacionadasOrdenes" value="<?php echo $ordendetrabajo["ordenesdetrabajosrelacionadas_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">DOCUMENTOS ADJUNTOS ENTREGADOS</label>
                    <input type="text" class="form-control" id="documentosadjuntosentregadosOrdenes" name="documentosadjuntosentregadosOrdenes" value="<?php echo $ordendetrabajo["documentosadjuntosentregados_ordendetrabajo"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">OBSERVACIONES</label>
                    <input type="text" class="form-control" id="observacionesOrdenes" name="observacionesOrdenes" value="<?php echo $ordendetrabajo["observaciones_ordendetrabajo"]; ?>">
                </div>
            </div>
        </div>
        <div class="modal-header">
            <h4 class="modal-title">Caratula Orden De Trabajo</h4>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">CARATULA ORDEN DE TRABAJO</label>
                    <input type="text" class="form-control" id="caratulaOrdenes" name="caratulaOrdenes" value="<?php echo $ordendetrabajo["titulocaratula_ordendetrabajo"]; ?>">
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditOrdenTrabajo()">Guardar</button>
</div>