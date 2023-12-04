 <div class="modal-header">
     <h4 class="modal-title">Registro Trabajos Metrologia</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegMetrologia" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">N° CERTIFICADO</label>
                     <input type="text" class="form-control" id="numcertificadoMetrologia" name="numcertificadoMetrologia" placeholder="N° CERTIFICADO">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">REGISTRO</label>
                     <input type="text" class="form-control" id="registroMetrologia" name="registroMetrologia" placeholder="REGISTRO">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">CLIENTE</label>
                     <?php
                        require_once "../../controlador/clientesmetroControlador.php";
                        require_once "../../modelo/clientesmetroModelo.php";
                        $clientes = ControladorClientesMetro::ctrInfoClientesMetros();

                        ?>
                     <select class="form-control" name="clienteMetrologia" id="clienteMetrologia">
                         <?php foreach ($clientes as $value) {
                            ?>
                             <option value="<?php echo $value["id_clientemetro"]; ?>"><?php echo $value["empresa_clientemetro"]; ?></option>
                         <?php
                            }
                            ?>
                     </select>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">MAGNITUD</label>
                     <input type="text" class="form-control" id="magnitudMetrologia" name="magnitudMetrologia" placeholder="MAGNITUD">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">INSTRUMENTO</label>
                     <input type="text" class="form-control" id="instrumentoMetrologia" name="instrumentoMetrologia" placeholder="INSTRUMENTO">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">ALCANCE</label>
                     <input type="text" class="form-control" id="alcanceMetrologia" name="alcanceMetrologia" placeholder="ALCANCE">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">RESOLUCION</label>
                     <input type="text" class="form-control" id="resolucionMetrologia" name="resolucionMetrologia" placeholder="RESOLUCION">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">FABRICANTE</label>
                     <input type="text" class="form-control" id="marcaMetrologia" name="marcaMetrologia" placeholder="MARCA">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">MODELO</label>
                     <input type="text" class="form-control" id="modeloMetrologia" name="modeloMetrologia" placeholder="MODELO">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">N° SERIE</label>
                     <input type="text" class="form-control" id="numserieMetrologia" name="numserieMetrologia" placeholder="N° SERIE">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">IDENTIFICACION INTERNA</label>
                     <input type="text" class="form-control" id="identificacioninternaMetrologia" name="identificacioninternaMetrologia" placeholder="IDENTIFICACION INTERNA">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">FECHA CALIBRACION</label>
                     <input type="date" class="form-control" id="fechacalibracionMetrologia" name="fechacalibracionMetrologia" placeholder="FECHA CALIBRACION">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">VIGENCIA</label>
                     <select name="vigenciaMetrologia" id="vigenciaMetrologia" class="form-control">
                         <option>SELECCIONE</option>
                         <option>06 MESES</option>
                         <option>12 MESES</option>
                         <option>18 MESES</option>
                         <option>24 MESES</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">FECHA PROXIMA CALIBRACION</label>
                     <input type="date" class="form-control" id="fechaproximacalibracionMetrologia" name="fechaproximacalibracionMetrologia" placeholder="FECHA PROXIMA CALIBRACION">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">CONDICION</label>
                     <select name="condicionMetrologia" id="condicionMetrologia" class="form-control">
                         <option>SELECCIONE</option>
                         <option>VENCIDO</option>
                         <option>VIGENTE</option>
                     </select>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">COSTO (bs)</label>
                     <input type="text" class="form-control" id="costoMetrologia" name="costoMetrologia" placeholder="COSTO (bs)">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">FECHA DE EMISIÓN</label>
                     <input type="date" class="form-control" id="fechaemisionMetrologia" name="fechaemisionMetrologia">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">FECHA INGRESO</label>
                     <input type="date" class="form-control" id="fechaingresoMetrologia" name="fechaingresoMetrologia">
                 </div>
             </div>
         </div>
         <div class="row">
         <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">FECHA CONCLUIDA</label>
                     <input type="date" class="form-control" id="fechaconcluidaMetrologia" name="fechaconcluidaMetrologia">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegMetrologia()">Guardar</button>
 </div>