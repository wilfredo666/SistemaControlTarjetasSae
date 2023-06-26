
<style>
  .content-wrapper{
    margin-left: 0!important;
  }
  .content{
    margin-top: 10%;
  }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-sm-6" style="text-align:center">
          <!-- Automatic element centering -->
          <?php 
          //include '../ajax/asistencia.php' ?>
          <div name="movimientos" id="movimientos">
          </div> 



          <div class="lockscreen-logo">
            <a href="#"><b>SISTEMA</b> TRAMITES</a>
          </div>
          <!-- User name -->
          <div class="lockscreen-name">CONTROL TRAMITES</div>

          <!-- START LOCK SCREEN ITEM -->
          <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
              <img src="assest/files/negocio/logo.gif" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form  action="" class="lockscreen-credentials" name="formulario" id="formulario" method="POST">
              <div class="input-group">
                <input type="text" class="form-control" name="codigo_persona" id="codigo_persona" placeholder="Código">

                <div class="input-group-btn">
                  <button type="button" class="btn btn-primary" onclick="registrar_asistencia()">
                  <i class="fa fa-arrow-right text-muted"></i>
                  </button>
                </div>
              </div>


            </form>
            <!-- /.lockscreen credentials -->

          </div>
          <!-- /.lockscreen-item -->
          <div class="help-block text-center">
            Ingresa codigo de tarjeta
          </div>
          <div class="text-center">

          </div>
          <div class="lockscreen-footer text-center">
            <a href="login">Acceder Panel Administrativo</a>
          </div>
          <!-- /.center -->

        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Vitacora</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             
              <table id="DTableVitacora" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Cod. matricula</th>
                    <th>Cod. seguimiento</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $seguimiento=ControladorSeguimiento::ctrInfoSeguimientos();
                  foreach($seguimiento as $value){
                    ?>
                    <tr>
                      <td><?php echo $value["matricula_seguimiento"];?></td>
                      <td><?php echo $value["codigo_seguimiento"];?></td>
                      <td><?php echo $value["estados_seguimiento"];?></td>
                      <?php 
                      if($value["disponible"]==1){
                        ?>
                        <td><span class="badge badge-success">Disponible</span></td>
                        <?php
                      }else{
                        ?>
                        <td><span class="badge badge-danger">No disponible</span></td>
                        <?php
                      }
                      ?>
                      
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-info btn-block btn-sm" onclick="VerDetalleVitacora('<?php echo $value["codigo_seguimiento"];?>')">
                            <i class="fas fa-eye"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody> 

              </table>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
      </div>

    </div>
  </div>
  <!-- /.content -->
</div>

<script type="text/javascript" src="vista/scripts/asistencia.js"></script>