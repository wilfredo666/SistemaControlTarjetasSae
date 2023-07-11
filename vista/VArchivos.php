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
                          $divArchivo=explode(".",$archivo);
                          if(count($divArchivo)<2){
                  ?>
                  <tr>
                    <td><i class="fas fa-folder text-primary">&nbsp;</i><a href="VArchivos?<?php echo $archivo;?>" class="file-manager-group-title"><?php echo $archivo; ?></a></td>
                     <td>
                      <div class="btn-group">
                        <button class="btn btn-default btn-xs" onclick="">
                          <i class="fas fa-download"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <?php
                          }else{
                  ?>
                  <tr>
                    <td><i class="fas fa-file text-success">&nbsp;</i><span class="text-muted"><?php echo $archivo; ?></span></td>
                    <td>
                      <div class="btn-group">
                       <a class="btn btn-default btn-xs" href="descargar?<?php echo $ruta."-".$archivo;?>">
                         <i class="fas fa-download"></i>
                       </a>
                        <!--<button class="btn btn-default btn-xs" onclick="">
                          <i class="fas fa-download"></i>
                        </button>-->
                      </div>
                    </td>
                  </tr>

                  <?php
                          }
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

    </div>
  </div>
</div>
<!-- /.content-wrapper -->
