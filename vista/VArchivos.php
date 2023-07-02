<div class="app-content">
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Gestion Archivos</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="page-description-actions">
            </div>
            <div class="card-header">
              <h3 class="card-title">Carpetas Disponibles <?php echo "";?></h3>
              <div class="card-tools">
                <button class="btn btn-success" onclick="MNuevoCarpeta()">Crear Carpeta</button>
                <button class="btn btn-primary" onclick="MNuevoArchivos()">Subir Archivos</button> 
              </div>
            </div>

            <div class="card-body">
              <div class="row">
                <table class="table table-bordered table-striped">
                  <?php
                  //capturamos la url y separamos el nombre del directorio
                  $path=parse_url($_SERVER['REQUEST_URI']);
                  
                  //si existe un directorio, accedemos a el
                  if(isset($path["query"])){
                    global $directorio;
                    $directorio=$path["query"];

                    $ruta="assest/files/archivos/".$directorio;
                  }else{
                    $ruta="assest/files/archivos/";
                  }

                  mostrar_archivos($ruta);
                  function mostrar_archivos($ruta){

                    if(is_dir($ruta)){
                      $gestor=opendir($ruta);

                      while(($archivo=readdir($gestor))!=false){
                        if($archivo!=".."){

                  ?>
                  <tr>
                    <td><i class="fas fa-folder text-primary">&nbsp;</i><a href="VArchivos?<?php echo $archivo;?>" class="file-manager-group-title carpetas"><?php echo $archivo; ?></a></td>
                  </tr>
                  <?php
                        }
                      }
                    }
                  }

                  ?>
                </table>
              </div>

            </div>
          </div>

        </div>
        <div class="card-footer clearfix">

        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          <table id="DataTableArchivos" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nombre Archivo</th>
                <th>Descripción</th>
                <th>Fecha Creacion</th>
                <th>Carpeta</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $archivos=ControladorCarpeta::ctrInfoArchivos();
              foreach($archivos as $value){
              ?>
              <tr>
                <td><?php echo $value["nombre_archivo"];?></td>
                <td><?php echo $value["descripcion_archivo"];?></td>
                <td><?php echo $value["fecha_creacion_archivo"];?></td>
                <td><?php echo $value["id_carpeta"];?></td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-danger" onclick="MEliArchivo(<?php echo $value["id_archivo"]; ?>)">
                      <i class="fas fa-trash"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <?php 
              }
              ?>

            </tbody>

          </table>
        </div><!-- /.container-fluid -->
      </div>
    </div>
  </div>
</div>
<!-- /.content-wrapper -->
