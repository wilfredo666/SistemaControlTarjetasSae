 <div class="modal-header">
     <h4 class="modal-title">Registrar Informe Base La Paz</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegBaseLpz">
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">FECHA DEL VUELO</label>
                     <input type="date" class="form-control" id="fechvueloBaseLpz" name="fechvueloBaseLpz">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">EXPLOTADOR</label>
                     <textarea class="form-control" name="explotadorBaseLpz" id="explotadorBaseLpz" cols="30" rows="1" placeholder="EXPLOTADOR"></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ARRIBÓ POR ÍTINERARIO</label>
                     <input type="text" class="form-control" id="arriboxitineBaseLpz" name="arriboxitineBaseLpz" placeholder="ARRIBÓ POR ÍTINERARIO">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ARRIBÓ REAL</label>
                     <input type="text" class="form-control" id="arriborealBaseLpz" name="arriborealBaseLpz" placeholder="ARRIBÓ REAL">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">PUENTE</label>
                     <input type="text" class="form-control" id="puenteBaseLpz" name="puenteBaseLpz" placeholder="PUENTE">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SALIÓ A</label>
                     <input type="text" class="form-control" id="salioaBaseLpz" name="salioaBaseLpz" placeholder="SALIÓ A">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SALIDA POR ITINERARIO</label>
                     <input type="text" class="form-control" id="salidaxitineBaseLpz" name="salidaxitineBaseLpz" placeholder="SALIDA POR ITINERARIO">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SALIDA REAL</label>
                     <input type="text" class="form-control" id="salidarealBaseLpz" name="salidarealBaseLpz" placeholder="SALIDA REAL">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SE REALIZÓ</label>
                     <textarea class="form-control" name="serealizoBaseLpz" id="serealizoBaseLpz" cols="30" rows="1" placeholder="SE REALIZÓ"></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">DIFERÍDO</label>
                     <input type="text" class="form-control" id="diferidoBaseLpz" name="diferidoBaseLpz" placeholder="DIFERÍDO">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">DEFECT DESCRIPTION</label>
                     <input type="text" class="form-control" id="defectdesBaseLpz" name="defectdesBaseLpz" placeholder="DEFECT DESCRIPTION">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ACTION TAKEN</label>
                     <input type="text" class="form-control" id="actiontakenBaseLpz" name="actiontakenBaseLpz" placeholder="ACTION TAKEN">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">LOG BOOK PAGE</label>
                     <input type="text" class="form-control" id="logbookBaseLpz" name="logbookBaseLpz" placeholder="LOG BOOK PAGE">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">CÓDIGO DE DIFERIDO</label>
                     <input type="text" class="form-control" id="coddiferidoBaseLpz" name="coddiferidoBaseLpz" placeholder="CÓDIGO DE DIFERIDO">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">OT EXPLOTADOR</label>
                     <input type="text" class="form-control" id="otexploBaseLpz" name="otexploBaseLpz" placeholder="OT EXPLOTADOR">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">OT SAE</label>
                     <input type="text" class="form-control" id="otsaeBaseLpz" name="otsaeBaseLpz" placeholder="OT SAE">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">NOTA</label>
                     <textarea class="form-control" name="notaBaseLpz" id="notaBaseLpz" cols="30" rows="1" placeholder="NOTA"></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ACEITE A LOS MOTORES</label>
                     <textarea class="form-control" name="aceitemotBaseLpz" id="aceitemotBaseLpz" cols="30" rows="1" placeholder="ACEITE A LOS MOTORES"></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">HYD</label>
                     <textarea class="form-control" name="hydBaseLpz" id="hydBaseLpz" cols="30" rows="1" placeholder="HYD"></textarea>
                 </div>
             </div>
         </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
             <button type="submit" class="btn btn-primary" onclick="RegBaseLpz()">Guardar</button>
         </div>
     </form>
 </div>

 <script>
     $(document).ready(function() {

         $('#FormRegBaseLpz').validate({
             rules: {

                 fechvueloBaseLpz: {
                     required: true,
                     date: true,
                 },
                 explotadorBaseLpz: {
                     required: true,
                     minlength: 5
                 },
                 arriboxitineBaseLpz: {
                     required: true,
                     minlength: 5
                 }
             },
             messages: {
                fechvueloBaseLpz: {
                     required: "Por favor ingrese una fecha"
                 },
                 explotadorBaseLpz: {
                     required: "Porfaor Ingrese el explotador",
                     minlength: "El Explotador tiene que tener 5  caracteres minimo"
                 },
                 arriboxitineBaseLpz: {
                     required: "Porfaor Ingrese el explotador",
                     minlength: "El Explotador tiene que tener 5  caracteres minimo"
                 },
             },
             errorElement: 'span',
             errorPlacement: function(error, element) {
                 error.addClass('invalid-feedback');
                 element.closest('.form-group').append(error);
             },
             highlight: function(element, errorClass, validClass) {
                 $(element).addClass('is-invalid');
             },
             unhighlight: function(element, errorClass, validClass) {
                 $(element).removeClass('is-invalid');
             }
         });
     });
 </script>