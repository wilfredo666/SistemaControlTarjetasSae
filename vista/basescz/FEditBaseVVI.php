<?php
require_once "../../controlador/basesczControlador.php";
require_once "../../modelo/basesczModelo.php";

$id = $_GET["id"];

$basescz = ControladorBaseVVI::ctrInfoBaseVVI($id);

?>
<div class="modal-header">
    <h4 class="modal-title">Actualizar Informe Base VVI</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditBaseScz" enctype="multipart/form-data">
    <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">FECHA DEL VUELO</label>
                     <input type="date" class="form-control" id="fechvueloBaseScz" name="fechvueloBaseScz" value="<?php echo $basescz["fech_vuelo_basescz"]; ?>">
                     <input type="hidden" name="idBaseScz" value="<?php echo $id; ?>">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">EXPLOTADOR</label>
                     <textarea class="form-control" name="explotadorBaseScz" id="explotadorBaseScz" cols="30" rows="1"><?php echo $basescz["explotador_basescz"]; ?></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ARRIBÓ POR ÍTINERARIO</label>
                     <input type="text" class="form-control" id="arriboxitineBaseScz" name="arriboxitineBaseScz" value="<?php echo $basescz["arribo_x_itine_basescz"]; ?>">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ARRIBÓ REAL</label>
                     <input type="text" class="form-control" id="arriborealBaseScz" name="arriborealBaseScz" value="<?php echo $basescz["arriba_real_basescz"]; ?>">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">PUENTE</label>
                     <input type="text" class="form-control" id="puenteBaseScz" name="puenteBaseScz" value="<?php echo $basescz["puente_basescz"]; ?>">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SALIÓ A</label>
                     <input type="text" class="form-control" id="salioaBaseScz" name="salioaBaseScz" value="<?php echo $basescz["salio_a_basescz"]; ?>">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SALIDA POR ITINERARIO</label>
                     <input type="text" class="form-control" id="salidaxitineBaseScz" name="salidaxitineBaseScz" value="<?php echo $basescz["salida_x_itine_basescz"]; ?>">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SALIDA REAL</label>
                     <input type="text" class="form-control" id="salidarealBaseScz" name="salidarealBaseScz" value="<?php echo $basescz["salida_real_basescz"]; ?>">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">SE REALIZÓ</label>
                     <textarea class="form-control" name="serealizoBaseScz" id="serealizoBaseScz" cols="30" rows="1"><?php echo $basescz["se_realizo_basescz"]; ?></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">DIFERÍDO</label>
                     <input type="text" class="form-control" id="diferidoBaseScz" name="diferidoBaseScz" value="<?php echo $basescz["diferido_basescz"]; ?>">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">DEFECT DESCRIPTION</label>
                     <input type="text" class="form-control" id="defectdesBaseScz" name="defectdesBaseScz" value="<?php echo $basescz["defect_description_basescz"]; ?>">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ACTION TAKEN</label>
                     <input type="text" class="form-control" id="actiontakenBaseScz" name="actiontakenBaseScz" value="<?php echo $basescz["action_taken_basescz"]; ?>">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">LOG BOOK PAGE</label>
                     <input type="text" class="form-control" id="logbookBaseScz" name="logbookBaseScz" value="<?php echo $basescz["log_book_page_basescz"]; ?>">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">CÓDIGO DE DIFERIDO</label>
                     <input type="text" class="form-control" id="coddiferidoBaseScz" name="coddiferidoBaseScz" value="<?php echo $basescz["codigo_de_diferi_basescz"]; ?>">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">OT EXPLOTADOR</label>
                     <input type="text" class="form-control" id="otexploBaseScz" name="otexploBaseScz" value="<?php echo $basescz["ot_explotador_basescz"]; ?>">
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">OT SAE</label>
                     <input type="text" class="form-control" id="otsaeBaseScz" name="otsaeBaseScz" value="<?php echo $basescz["ot_sae_basescz"]; ?>">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">NOTA</label>
                     <textarea class="form-control" name="notaBaseScz" id="notaBaseScz" cols="30" rows="1"><?php echo $basescz["nota_basescz"]; ?></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">ACEITE A LOS MOTORES</label>
                     <textarea class="form-control" name="aceitemotBaseScz" id="aceitemotBaseScz" cols="30" rows="1"><?php echo $basescz["aceite_a_los_motores_basescz"]; ?></textarea>
                 </div>
             </div>
             <div class="col-sm-3">
                 <div class="form-group">
                     <label for="">HYD</label>
                     <textarea class="form-control" name="hydBaseScz" id="hydBaseScz" cols="30" rows="1"><?php echo $basescz["hyd_basescz"]; ?></textarea>
                 </div>
             </div>
         </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditBaseScz()">Guardar</button>
</div>