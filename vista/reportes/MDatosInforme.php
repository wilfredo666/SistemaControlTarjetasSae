<div class="modal-header">
    <h4 class="modal-title">Datos Adicionales del Informe</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormDatosInforme" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">FECHA DE INFORME</label>
                    <input type="date" class="form-control" id="fechaInforme" name="fechaInforme" placeholder="Fecha del Informe">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">NUMERO DE INFORME</label>
                    <input type="text" class="form-control" id="numInforme" name="numInforme" placeholder="Número de Informe">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">RESPONSABLE DE ALMACÉN</label>
                    <input type="text" class="form-control" id="respAlmacen" name="respAlmacen" placeholder="Responsable de Almacén">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">REPRESENTANTE TÉCNICO BoA</label>
                    <input type="text" class="form-control" id="repTecnico" name="repTecnico" placeholder="Representante Técnico BoA">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">ECARGADO DEL INFORME</label>
                    <input type="text" class="form-control" id="encargadoInforme" name="encargadoInforme" placeholder="Encargado de elabpración del informe">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">ASUNTO DE INFORME</label>
                    <input type="text" class="form-control" id="asuntoInforme" name="asuntoInforme" placeholder="Asunto del Informe">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="">DESCRIPCIÓN DEL INFORME</label>
                    <textarea class="form-control"  name="descInforme" id="descInforme" cols="30" rows="5"></textarea>
                </div>
            </div>
        </div>
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegDatosInforme()">Guardar</button>
</div>