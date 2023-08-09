<script src="assest/js/cliente.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Salidas Entradas Herramientas</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="DataTableLogHerramientas" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nombre Tecnico</th>
                            <th>Fecha Hora</th>
                            <th>Tipo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $logherramientas = ControladorLogHerramientas::ctrInfoLogHerramientas();

                        foreach ($logherramientas as $value) {
                        ?>
                            <tr>
                                <td><?php echo $value["nombre_usuario"]; ?></td>
                                <td><?php echo $value["fecha_hora"]; ?></td>

                                <td><?php if ($value["tipo"] == 'ENTRADA') {
                                    ?>
                                        <span class="badge badge-success">ENTRADA</span>
                                    <?php
                                    } else {
                                    ?>
                                        <span class="badge badge-danger">SALIDA</span>
                                    <?php
                                    } ?>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-secondary" onclick="MVerLogHerramienta(<?php echo $value['id_log_herramientas']; ?>)">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-warning" onclick="MDevolverHerramienta(<?php echo $value['id_log_herramientas']; ?>)">
                                            <i class="fas fa-sign-out-alt"></i>
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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->