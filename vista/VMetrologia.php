  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0">REGISTRO METROLOGIA</h3>
                  </div><!-- /.col -->
                  <div class="col-sm-6">

                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <div class="content">
          <div class="container-fluid">
              <table id="DataTableMetrologia" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>N° CERTIFICADO</th>
                          <th>REGISTRO</th>
                          <th>CLIENTE</th>
                          <th>MARCA</th>
                          <th>N° SERIE</th>
                          <th>FECHA CAL.</th>
                          <th>VIGENCIA</th>
                          <th>FECHA PROX. CAL.</th>
                          <th>CONDICION</th>
                          <td>
                              <button class="btn btn-primary" onclick="MNuevoMetrologia()">Agregar</button>
                          </td>
                      </tr>
                  </thead>
                  <tbody>

                      <?php
                        $metrologia = ControladorMetrologias::ctrInfoMetrologias();
                        foreach ($metrologia as $value) {
                        ?>
                          <tr>
                              <td><?php echo $value["num_certificado_metro"]; ?></td>
                              <td><?php echo $value["registro_metro"]; ?></td>
                              <td><?php echo $value["id_cliente"]; ?></td>
                              <td><?php echo $value["marca_metro"]; ?></td>
                              <td><?php echo $value["num_serie_metro"]; ?></td>
                              <td><?php echo $value["fecha_calibracion_metro"]; ?></td>
                              <td><?php echo $value["vigencia_metro"]; ?></td>
                              <td><?php echo $value["fecha_proxima_calibracion_metro"]; ?></td>
                              <td><?php echo $value["condicion_metro"]; ?></td>
                              <td>
                                  <div class="btn-group">
                                      <button class="btn btn-secondary" onclick="MVerMetrologias(<?php echo $value["id_metro"]; ?>)">
                                          <i class="fas fa-eye"></i>
                                      </button>
                                      <button class="btn btn-warning" onclick="MEditarMetrologias(<?php echo $value["id_metro"]; ?>)">
                                          <i class="fas fa-edit"></i>
                                      </button>
                                      <button class="btn btn-danger" onclick="MEliMetrologias(<?php echo $value["id_metro"]; ?>)">
                                          <i class="fas fa-trash"></i>
                                      </button>
                                      <a class="btn btn-sm btn-success" href="vista/reportes/repPorCalibracion.php?id=<?php echo $value["id_metro"]; ?>" target="_blank"><i class="fas fa-print"></i></a>
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
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->