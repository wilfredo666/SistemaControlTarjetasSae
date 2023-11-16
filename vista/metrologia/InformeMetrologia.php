<div class="modal-header">
    <h4 class="modal-title">Datos Impresion Informe Certificado</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormDatosInformeMetro" method="POST" onsubmit="return validarFormulario()">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">CONDICIONES AMBIENTALES</label>
                    <textarea class="form-control" name="condicionInforme" id="condicionInforme" cols="30" rows="3"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">PROCEDIMIENTO DE MEDICIÓN</label>
                    <textarea class="form-control" name="procedimientoInforme" id="procedimientoInforme" cols="30" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">PATRONES DE MEDICIÓN</label>
                    <textarea class="form-control" name="patronesInforme" id="patronesInforme" cols="30" rows="3"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">INCERTIDUNBRE DE LA MEDICIÓN</label>
                    <textarea class="form-control" name="incertidumbreInforme" id="incertidumbreInforme" cols="30" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">OBSERVACIONES</label>
                    <textarea class="form-control" name="observacionesInforme" id="observacionesInforme" cols="30" rows="3"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">RESULTADOS DE LA MEDICIÓN</label>
                    <textarea class="form-control" name="resultadosInforme" id="resultadosInforme" cols="30" rows="3"></textarea>
                </div>
            </div>
        </div>
    
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="RegDatosInformeMetro()">Guardar</button>
        </div>
    </form>
</div>