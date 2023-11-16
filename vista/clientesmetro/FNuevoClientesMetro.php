<form action="" id="RegNuevoClientesMetro" enctype="multipart/form-data">
    <div class="modal-header">
        <h4 class="modal-title">Registro Clientes Metrologia</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">CODIGO</label>
                    <input type="text" class="form-control" name="codigoClienteMetro" id="codigoClienteMetro" placeholder="CODIGO">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">EMPRESA</label>
                    <input type="text" class="form-control" name="empresaClienteMetro" id="empresaClienteMetro" placeholder="EMPRESA">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">CONTACTO</label>
                    <input type="text" class="form-control" name="contactoClienteMetro" id="contactoClienteMetro" placeholder="CONTACTO">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">TELEFONO(s)</label>
                    <input type="text" class="form-control" name="teleClienteMetro" id="teleClienteMetro" placeholder="TELEFONO">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">CORREO ELECTRONICO</label>
                    <input type="email" class="form-control" name="correoClienteMetro" id="correoClienteMetro" placeholder="CORREO ELECTRONICO">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">DIRECCION</label>
                    <input type="text" class="form-control" name="direccionClienteMetro" id="direccionClienteMetro" placeholder="DIRECCION">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">CIUDAD</label>
                    <select name="ciudadClienteMetro" id="ciudadClienteMetro" class="form-control">
                        <option>SELECCIONE</option>
                        <option>LA PAZ</option>
                        <option>ORURO</option>
                        <option>POTOSI</option>
                        <option>COCHABAMBA</option>
                        <option>SUCRE</option>
                        <option>TARIJA</option>
                        <option>PANDO</option>
                        <option>BENI</option>
                        <option>SANTA CRUZ</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">NIT</label>
                    <input type="text" class="form-control" name="nitClienteMetro" id="nitClienteMetro" placeholder="NIT">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="RegNuevoClientesMetro()">Guardar</button>
    </div>
</form>