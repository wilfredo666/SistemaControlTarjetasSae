 <div class="modal-header">
     <h4 class="modal-title">Registro Comprobante Herramienta Recibida/Entregada</h4>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegHerramientas" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N°</label>
                     <input type="text" class="form-control" id="nHerramientas" name="nHerramientas" placeholder="N°">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DESCRIPCION</label>
                     <input type="text" class="form-control" id="desHerramientas" name="desHerramientas" placeholder="Descripcion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">P/N</label>
                     <input type="text" class="form-control" id="pnHerramientas" name="pnHerramientas" placeholder="Numero de parte">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">P/N ALT.</label>
                     <input type="text" class="form-control" id="pnaltHerramientas" name="pnaltHerramientas" placeholder="Numero de parte ALT.">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">S/N</label>
                     <input type="text" class="form-control" id="numserieHerramientas" name="numserieHerramientas" placeholder="Numero de serie">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CODIGO</label>
                     <input type="text" class="form-control" id="codigoHerramientas" name="codigoHerramientas" placeholder="Codigo">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">MARCA O FABRICANTE</label>
                     <input type="text" class="form-control" id="marcafabriHerramientas" name="marcafabriHerramientas" placeholder="Marca o Fabricante">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CANTIDAD</label>
                     <input type="text" class="form-control" id="cantidadHerramientas" name="cantidadHerramientas" placeholder="Cantidad">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UNIDAD</label>
                     <select name="unidadHerramientas" id="unidadHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>PIEZA</option>
                         <option>PIEZAS</option>
                         <option>ROLLO</option>
                         <option>ASSY</option>
                         <option>METROS</option>
                         <option>SET</option>
                         <option>PAR</option>
                         <option>KIT</option>
                         <option>CM</option>
                         <option>EA</option>
                         <option>M</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION</label>
                     <input type="text" class="form-control" id="ubicacionHerramientas" name="ubicacionHerramientas" placeholder="Ubicacion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">OBSERVACION</label>
                     <input type="text" class="form-control" id="observacionHerramientas" name="observacionHerramientas" placeholder="Observacion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">AERONAVE</label>
                     <input type="text" class="form-control" id="aeronaveHerramientas" name="aeronaveHerramientas" placeholder="Aeronave">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ATA</label>
                     <input type="text" class="form-control" id="ataHerramientas" name="ataHerramientas" placeholder="ATA">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DOC</label>
                     <select name="docHerramientas" id="docHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>CON DOC</option>
                         <option>N/A</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° CARPETA</label>
                     <input type="text" class="form-control" id="numcarpetaHerramientas" name="numcarpetaHerramientas" placeholder="N° Carpeta">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">EQUIVALENCIA TECNICA</label>
                     <select name="equivalenciatecnicaHerramientas" id="equivalenciatecnicaHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>CONFECCIONADO</option>
                         <option>ORIGINAL</option>
                         <option>SAE412-6,SAE412-5,SAE412-3</option>
                         <option>SAE413-4,SAE413-3,SAE413-2</option>
                         <option>SI TIENE</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">HOJA DE MANUAL</label>
                     <select name="hojamanualHerramientas" id="hojamanualHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>NO TIENE</option>
                         <option>NO</option>
                         <option>OK</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">STICKER</label>
                     <select name="stickerHerramientas" id="stickerHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>NO</option>
                         <option>SI</option>
                     </select>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ULTIMO INVENTARIO</label>
                     <select name="ultimoinventarioHerramientas" id="ultimoinventarioHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>NO</option>
                         <option>SI</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CAL. ESPECIALIZADA</label>
                     <select name="calibradaespecializadaHerramientas" id="calibradaespecializadaHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>CALIBRADA</option>
                         <option>ESPECIALIZADA</option>
                         <option>ESPECIALIZADA NO CAL. REQUIRED</option>
                         <option>ESTANDAR</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ESTADO HERRAMIENTAS</label>
                     <select name="estadoHerramientas" id="estadoHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>OK</option>
                         <option>BIEN</option>
                         <option>EN MAL ESTADO</option>
                         <option>FALTA GLAS PAINT & HOSE</option>
                         <option>N/A</option>
                         <option>NUEVO</option>
                         <option>NUEVO OK</option>
                         <option>OK SEMINUEVO</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">REQUIERE INSP. PERIO.</label>
                     <select name="requiereinspeperiodicaHerramientas" id="requiereinspeperiodicaHerramientas" class="form-control">
                         <option></option>
                         <option>INSPECCION PERIODICA</option>
                         <option>N/A</option>
                         <option>SI</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">RANGO MEDIDA</label>
                     <input type="text" class="form-control" id="rangomedidaHerramientas" name="rangomedidaHerramientas" placeholder="Rango Medida">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION ACTUAL</label>
                     <input type="text" class="form-control" id="ubicacionactualHerramientas" name="ubicacionactualHerramientas" placeholder="Doc. Salida">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">OBSERVACIONES DEL</label>
                     <input type="text" class="form-control" id="observacionesdelHerramientas" name="observacionesdelHerramientas" placeholder="Observaciones Del">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Imagenes</label>
                     <input type="file" class="form-control" id="imgHerramientas" name="imgHerramientas">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer justify-content-between">
     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegHerramientas()">Guardar</button>
 </div>