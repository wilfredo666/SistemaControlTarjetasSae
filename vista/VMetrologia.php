<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header pb-0">
        <div class="container-fluid">
            <div class="row mb-2" style="display: flex; justify-content: space-between;">
                <div class="col-sm-5">
                    <h3 class="m-0">Panel Registros Metrologia</h3>
                </div><!-- /.col -->
                <div class="col-sm-7">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <form id="FormMetrologiaSeleccionado" method="POST">
                <table id="DataTableMetrologia" class="table table-bordered table-striped">
                    <thead>
                        <input type="button" class="btn btn-primary bg-dark ml-2 mr-2 mb-2" onclick="ImpresionMetrologia()" value="Imprimir Certificado Metrologia">
                        <tr>
                            <th></th>
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
                                <input type="button" class="btn btn-primary" onclick="MNuevoMetrologia()" value="Agregar">
                            </td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $metrologia = ControladorMetrologias::ctrInfoMetrologias();
                        foreach ($metrologia as $value) {
                        ?>
                            <tr>
                                <td>
                                    <input type="checkbox" id="inlineCheckbox5" name="idclase[]" value="<?php echo $value["id_metro"] ?>">
                                </td>
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

                                        <a class="btn btn-sm btn-secondary" onclick="MVerMetrologias(<?php echo $value['id_metro']; ?>)"><i class="fas fa-eye"></i></a>

                                        <a class="btn btn-sm btn-warning" onclick="MEditarMetrologias(<?php echo $value['id_metro']; ?>)"><i class="fas fa-edit"></i></a>

                                        <a class="btn btn-sm btn-danger" onclick="MEliMetrologias(<?php echo $value['id_metro']; ?>)"><i class="fas fa-trash"></i></a>

                                    </div>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>