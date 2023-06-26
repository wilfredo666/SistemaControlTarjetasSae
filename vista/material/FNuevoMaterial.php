 <div class="modal-header">
     <h4 class="modal-title">Registrar Materiales</h4>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegMaterial" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Descripcion</label>
                     <input type="text" class="form-control" id="desMaterial" name="desMaterial" placeholder="Descripcion">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">P/N</label>
                     <input type="text" class="form-control" id="pnMaterial" name="pnMaterial" placeholder="P/N">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">P/N ALT.</label>
                     <input type="text" class="form-control" id="pnaltMaterial" name="pnaltMaterial" placeholder="P/N ALT.">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">QTY</label>
                     <input type="text" class="form-control" id="qtyMaterial" name="qtyMaterial" placeholder="QTY">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Unidad</label>
                     <input type="text" class="form-control" id="unidadMaterial" name="unidadMaterial" placeholder="Unidad">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Ref. Manual</label>
                     <input type="text" class="form-control" id="refmanualMaterial" name="refmanualMaterial" placeholder="Ref. Manual">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Ref. Tarjeta</label>
                     <input type="text" class="form-control" id="reftarjetaMaterial" name="reftarjetaMaterial" placeholder="Ref. Tarjeta">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Area</label>
                     <select name="areaMaterial" id="areaMaterial" class="form-control">
                         <option>Seleccione</option>
                         <option>ALAS</option>
                         <option>EMP</option>
                         <option>HYD</option>
                         <option>MOT</option>
                         <option>AV</option>
                         <option>CAB</option>
                         <option>FUS</option>
                         <option>BUZ</option>
                         <option>CAAB</option>
                         <option>PINTURA</option>
                         <option>VACIAS</option>
                     </select>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Observaciones</label>
                     <input type="text" class="form-control" id="obMaterial" name="obMaterial" placeholder="Observaciones">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Prioridad</label>
                     <input type="text" class="form-control" id="prioMaterial" name="prioMaterial" placeholder="Prioridad">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Observaciones Prioridad</label>
                     <input type="text" class="form-control" id="obsprioMaterial" name="obsprioMaterial" placeholder="Observaciones Prioridad">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Estado de Material</label>
                     <input type="text" class="form-control" id="estadodeMaterial" name="estadodeMaterial" placeholder="Estado de Material">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Estado</label>
                     <select name="estadoMaterial" id="estadoMaterial" class="form-control">
                         <option>Seleccione</option>
                         <option>LLEGO MATERIAL</option>
                         <option>NO LLEGO MATERIAL</option>
                         <option>PARCIALMENTE COMPLETADO</option>
                         <option>SIN PEDIDO</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Almacen</label>
                     <input type="text" class="form-control" id="almaMaterial" name="almaMaterial" placeholder="Almacen">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">Fecha de Arribo</label>
                     <input type="date" class="form-control" id="fechaMaterial" name="fechaMaterial" placeholder="Fecha de Arribo">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer justify-content-between">
     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegMaterial()">Guardar</button>
 </div>