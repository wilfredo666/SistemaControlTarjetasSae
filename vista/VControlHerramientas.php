  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0">Panel Control Herramientas</h3>
                  </div><!-- /.col -->
                  <div class="col-sm-6">

                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <div class="content">
          <div class="container-fluid">
              <table id="DataTableControlHerramientas" class="table table-bordered table-striped">
                  <thead>
                  <button class="btn btn-success" onclick="MCargarRegistrosControlHerramientas()">Importar Excel</button>
                      <tr>
                          <th>ITEM</th>
                          <th>DESCRIPCION</th>
                          <th>NUMERO DE PARTE</th>
                          <th>NUMERO DE SERIE</th>
                          <th>CODIGO</th>
                          <th>UBICACION</th>
                          <th>FECHA VENCIMIENTO</th>
                          <th>N° CARPETA</th>
                          <td>
                              <button class="btn btn-primary" onclick="MNuevoControlHerramientas()">Agregar</button>
                          </td>
                      </tr>
                  </thead>
                  <tbody>

                      <?php
                        $controlherramienta = ControladorHerramientas::ctrInfoControlHerramientas();
                        foreach ($controlherramienta as $value) {
                        ?>
                          <tr>
                              <td><?php echo $value["id_controlherramientas"]; ?></td>
                              <td><?php echo $value["descripcion_controlherramientas"]; ?></td>
                              <td><?php echo $value["pn_controlherramientas"]; ?></td>
                              <td><?php echo $value["numserie_controlherramientas"]; ?></td>
                              <td><?php echo $value["codigo_controlherramientas"]; ?></td>
                              <td><?php echo $value["ubicacion_controlherramientas"]; ?></td>
                              <td><?php echo $value["fechavenci_controlherramientas"]; ?></td>
                              <td><?php echo $value["numcarpeta_controlherramientas"]; ?></td>
                              <td>
                                  <div class="btn-group">
                                      <button class="btn btn-secondary" onclick="MVerControlHerramienta(<?php echo $value["id_controlherramientas"]; ?>)">
                                          <i class="fas fa-eye"></i>
                                      </button>
                                      <button class="btn btn-warning" onclick="MEditarControlHerramienta(<?php echo $value["id_controlherramientas"]; ?>)">
                                          <i class="fas fa-edit"></i>
                                      </button>
                                      <button class="btn btn-danger" onclick="MEliControlHerramienta(<?php echo $value["id_controlherramientas"]; ?>)">
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