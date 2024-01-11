 <div class="modal-header">
     <h4 class="modal-title">Registrar Informe Base VVI</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegBaseScz" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">FECHA DEL VUELO</label>
                     <input type="date" class="form-control" id="fechvueloBaseScz" name="fechvueloBaseScz">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">EXPLOTADOR</label>
                     <textarea class="form-control" name="explotadorBaseScz" id="explotadorBaseScz" cols="30" rows="1" placeholder="EXPLOTADOR"></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ARRIBÓ POR ÍTINERARIO</label>
                     <input type="text" class="form-control" id="arriboxitineBaseScz" name="arriboxitineBaseScz" placeholder="ARRIBÓ POR ÍTINERARIO">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ARRIBÓ REAL</label>
                     <input type="text" class="form-control" id="arriborealBaseScz" name="arriborealBaseScz" placeholder="ARRIBÓ REAL">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">PUENTE</label>
                     <input type="text" class="form-control" id="puenteBaseScz" name="puenteBaseScz" placeholder="PUENTE">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SALIÓ A</label>
                     <input type="text" class="form-control" id="salioaBaseScz" name="salioaBaseScz" placeholder="SALIÓ A">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SALIDA POR ITINERARIO</label>
                     <input type="text" class="form-control" id="salidaxitineBaseScz" name="salidaxitineBaseScz" placeholder="SALIDA POR ITINERARIO">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SALIDA REAL</label>
                     <input type="text" class="form-control" id="salidarealBaseScz" name="salidarealBaseScz" placeholder="SALIDA REAL">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SE REALIZÓ</label>
                     <textarea class="form-control" name="serealizoBaseScz" id="serealizoBaseScz" cols="30" rows="1" placeholder="SE REALIZÓ"></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">DIFERÍDO</label>
                     <input type="text" class="form-control" id="diferidoBaseScz" name="diferidoBaseScz" placeholder="DIFERÍDO">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">DEFECT DESCRIPTION</label>
                     <input type="text" class="form-control" id="defectdesBaseScz" name="defectdesBaseScz" placeholder="DEFECT DESCRIPTION">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ACTION TAKEN</label>
                     <input type="text" class="form-control" id="actiontakenBaseScz" name="actiontakenBaseScz" placeholder="ACTION TAKEN">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">LOG BOOK PAGE</label>
                     <input type="text" class="form-control" id="logbookBaseScz" name="logbookBaseScz" placeholder="LOG BOOK PAGE">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">CÓDIGO DE DIFERIDO</label>
                     <input type="text" class="form-control" id="coddiferidoBaseScz" name="coddiferidoBaseScz" placeholder="CÓDIGO DE DIFERIDO">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">OT EXPLOTADOR</label>
                     <input type="text" class="form-control" id="otexploBaseScz" name="otexploBaseScz" placeholder="OT EXPLOTADOR">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">OT SAE</label>
                     <input type="text" class="form-control" id="otsaeBaseScz" name="otsaeBaseScz" placeholder="OT SAE">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">NOTA</label>
                     <textarea class="form-control" name="notaBaseScz" id="notaBaseScz" cols="30" rows="1" placeholder="NOTA"></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ACEITE A LOS MOTORES</label>
                     <textarea class="form-control" name="aceitemotBaseScz" id="aceitemotBaseScz" cols="30" rows="1" placeholder="ACEITE A LOS MOTORES"></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">HYD</label>
                     <textarea class="form-control" name="hydBaseScz" id="hydBaseScz" cols="30" rows="1" placeholder="HYD"></textarea>
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegBaseScz()">Guardar</button>
 </div>