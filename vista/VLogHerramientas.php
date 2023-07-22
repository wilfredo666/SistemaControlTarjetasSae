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
                            <th>Codigo Herramienta</th>
                            <th>Nombre Tecnico</th>
                            <th>Fecha Hora</th>
                            <th>Tipo</th>
    
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $logherramientas = ControladorLogHerramientas::ctrInfoLogHerramientas();

                        foreach ($logherramientas as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["codigo_herramientas"]; ?></td>
                            <td><?php echo $value["nombre_usuario"]; ?></td>
                            <td><?php echo $value["fecha_hora"]; ?></td>                       
                            <td><?php echo $value["tipo"]; ?></td>
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
