  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0">Panel Orden de Trabajo</h3>
                  </div><!-- /.col -->
                  <div class="col-sm-6">

                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <div class="content">
          <div class="container-fluid">
              <table id="DataTableOrdenDeTrabajo" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>ORDEN DE TRABAJO N°</th>
                          <th>NOMBRE MATRICULA</th>
                          <th>TH</th>
                          <th>MODELO P/N</th>
                          <th>S/N</th>
                          <th>SOLICITADA POR</th>
                          <th>NOMBRE AUTORIZADA</th>
                          <td>
                              <button class="btn btn-primary" onclick="MNuevoOrdenDeTrabajo()">Agregar</button>
                          </td>
                      </tr>
                  </thead>
                  <tbody>

                      <?php
                        $ordendetrabajo = ControladorOrdenDeTrabajo::ctrInfoOrdenesDeTrabajos();
                        foreach ($ordendetrabajo as $value) {
                        ?>
                          <tr>
                              <td><?php echo $value["numero_ordendetrabajo"]; ?></td>
                              <td><?php echo $value["nombrematricula_ordendetrabajo"]; ?></td>
                              <td><?php echo $value["th_ordendetrabajo"]; ?></td>
                              <td><?php echo $value["modelo_pn_ordendetrabajo"]; ?></td>
                              <td><?php echo $value["sn_ordendetrabajo"]; ?></td>
                              <td><?php echo $value["solicitadapor_ordendetrabajo"]; ?></td>      
                              <td><?php echo $value["nombreautorizado_ordendetrabajo"]; ?></td>
                              <td>
                                  <div class="btn-group">
                                      <button class="btn btn-secondary" onclick="MVerOrdenDeTrabajo(<?php echo $value["id_ordendetrabajo"]; ?>)">
                                          <i class="fas fa-eye"></i>
                                      </button>
                                      <button class="btn btn-warning" onclick="MEditarOrdenDeTrabajo(<?php echo $value["id_ordendetrabajo"]; ?>)">
                                          <i class="fas fa-edit"></i>
                                      </button>
                                      <button class="btn btn-danger" onclick="MEliOrdenDeTrabajo(<?php echo $value["id_ordendetrabajo"]; ?>)">
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
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->