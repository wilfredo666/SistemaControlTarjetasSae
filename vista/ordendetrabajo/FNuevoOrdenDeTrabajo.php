 <div class="modal-header">
     <h4 class="modal-title">Registrar Orden De Trabajo</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegOrdenes" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">ORDEN DE TRABAJO Nº</label>
                     <input type="text" class="form-control" id="ordendetrabajonumeroOrdenes" name="ordendetrabajonumeroOrdenes" placeholder="ORDEN DE TRABAJO Nº">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">NOMBRE MATRICULA</label>
                     <input type="text" class="form-control" id="nombrematriculaOrdenes" name="nombrematriculaOrdenes" placeholder="NOMBRE MATRICULA">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">TH</label>
                     <input type="text" class="form-control" id="thOrdenes" name="thOrdenes" placeholder="TH">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">TC</label>
                     <input type="text" class="form-control" id="tcOrdenes" name="tcOrdenes" placeholder="TC">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">MODELO P/N</label>
                     <input type="text" class="form-control" id="modelopnOrdenes" name="modelopnOrdenes" placeholder="MODELO P/N">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">S/N</label>
                     <input type="text" class="form-control" id="snOrdenes" name="snOrdenes" placeholder="S/N">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">SOLICITADA POR</label>
                     <input type="text" class="form-control" id="solicitadaporOrdenes" name="solicitadaporOrdenes" placeholder="SOLICITADA POR">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">NOMBRE AUTORIZADA</label>
                     <input type="text" class="form-control" id="nombreautorizadaorOrdenes" name="nombreautorizadaorOrdenes" placeholder="NOMBRE AUTORIZADA">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">DOCUMENTOS ADJUNTOS RECIBIDOS</label>
                     <input type="text" class="form-control" id="documentosadjuntosrecibidosOrdenes" name="documentosadjuntosrecibidosOrdenes" placeholder="DOCUMENTOS ADJUNTOS RECIBIDOS">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">DESCRIPCION DE TRABAJOS EFECTUADOS</label>
                     <input type="text" class="form-control" id="descripciontrabajosOrdenes" name="descripciontrabajosOrdenes" placeholder="DESCRIPCION DE TRABAJOS EFECTUADOS">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">ÓRDENES DE TRABAJO RELACIONADAS</label>
                     <input type="text" class="form-control" id="ordenesdetrabajosrelacionadasOrdenes" name="ordenesdetrabajosrelacionadasOrdenes" placeholder="ÓRDENES DE TRABAJO RELACIONADAS">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">DOCUMENTOS ADJUNTOS ENTREGADOS</label>
                     <input type="text" class="form-control" id="documentosadjuntosentregadosOrdenes" name="documentosadjuntosentregadosOrdenes" placeholder="DOCUMENTOS ADJUNTOS ENTREGADOS">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">OBSERVACIONES</label>
                     <input type="text" class="form-control" id="observacionesOrdenes" name="observacionesOrdenes" placeholder="OBSERVACIONES">
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
                     <input type="text" class="form-control" id="caratulaOrdenes" name="caratulaOrdenes" placeholder="CARATULA ORDEN DE TRABAJO">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegOrdenes()">Guardar</button>
 </div>