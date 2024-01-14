<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0">Panel Base VVI</h3>
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="container-fluid">
      <table id="DataTableBaseScz" class="table table-bordered table-striped">
        <thead>
          <a class="btn btn-primary ml-2 mr-2 mb-2" onclick="MNuevoBaseScz()"><i class="fas fa-save"> Agregar</i></a>
          <button class="btn btn-outline-success ml-2 mr-2 mb-2" onclick="RepExcelScz()"><i class="fas fa-file-excel"> Exportar Excel</i></button>
          <tr>
            <th>FECHA DEL VUELO</th>
            <th>EXPLOTADOR</th>
            <th>ARRIBÓ REAL</th>
            <th>SALIDA REAL</th>
            <th>SE REALIZÓ</th>
            <th>OT SAE</th>
            <th>NOTA</th>
            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $basescz = ControladorBaseVVI::ctrInfoBasesVVI();
          foreach ($basescz as $value) {
          ?>
          <tr>
            <td><?php echo $value["fech_vuelo_basescz"]; ?></td>
            <td><?php echo $value["explotador_basescz"]; ?></td>
            <td><?php echo $value["arriba_real_basescz"]; ?></td>
            <td><?php echo $value["salida_real_basescz"]; ?></td>
            <td><?php echo $value["se_realizo_basescz"]; ?></td>
            <td><?php echo $value["ot_sae_basescz"]; ?></td>
            <td><?php echo $value["nota_basescz"]; ?></td>
            <td>
              <div class="btn-group ">
                <button class="btn btn-secondary btn-sm" onclick="MVerBaseScz(<?php echo $value["id_basescz"]; ?>)">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="btn btn-warning btn-sm" onclick="MEditarBaseScz(<?php echo $value["id_basescz"]; ?>)">
                  <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-danger btn-sm" onclick="MEliBaseScz(<?php echo $value["id_basescz"]; ?>)">
                  <i class="fas fa-trash"></i>
                </button>
                <a class="btn btn-sm btn-success" href="vista/reportes/repOrdenTrabajo.php?id=<?php echo $value["id_basescz"]; ?>" target="_blank"><i class="fas fa-file-excel"></i></a>
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