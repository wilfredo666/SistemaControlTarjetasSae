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
                <h1 class="card-title">Lista Clientes Metrologia</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="DataTableClientesMetro" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>CODIGO</th>
                            <th>EMPRESA</th>
                            <th>CONTACTO</th>
                            <th>TELEFONO</th>
                            <th>CORREO</th>
                            <th>DIRECCION</th>
                            <th>CIUDAD</th>
                            <th>NIT</th>
                            <td>
                                <button class="btn btn-primary" onclick="MNuevoClientesMetro()">Agregar (<i class="fas fa-plus"></i>) </button>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $clientemetro = ControladorClientesMetro::ctrInfoClientesMetros();

                        foreach ($clientemetro as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["codigo_clientemetro"]; ?></td>
                            <td><?php echo $value["empresa_clientemetro"]; ?></td>
                            <td><?php echo $value["contacto_clientemetro"]; ?></td>                       
                            <td><?php echo $value["telefono_clientemetro"]; ?></td>
                            <td><?php echo $value["correo_clientemetro"]; ?></td>
                            <td><?php echo $value["direccion_clientemetro"]; ?></td>
                            <td><?php echo $value["ciudad_clientemetro"]; ?></td>
                            <td><?php echo $value["nit_clientemetro"]; ?></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-secondary" onclick="MVerClienteMetro(<?php echo $value["id_clientemetro"];?>)">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-warning" onclick="MEditarClienteMetro(<?php echo $value["id_clientemetro"];?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger" onclick="MEliClienteMetro(<?php echo $value["id_clientemetro"]; ?>)">
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
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
