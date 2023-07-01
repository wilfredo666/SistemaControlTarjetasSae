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
                                <?php

                                $ruta="assest/files/archivos/";
                                mostrar_archivos($ruta);
                                function mostrar_archivos($ruta){

                                    if(is_dir($ruta)){
                                        $gestor=opendir($ruta);


                                        while(($archivo=readdir($gestor))!=false){
                                            if($archivo!=".." and $archivo!="."){

                                ?>
                                <div class="col-md-3">
                                    <div class="card file-manager-group">
                                        <div class="card-body d-flex align-items-center">
                                            <i class="material-icons text-primary">folder</i>
                                            <div class="file-manager-group-info flex-fill">
                                                <a href="mostrarDirectorio" class="file-manager-group-title carpetas"><?php echo $archivo; ?></a>

                                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"></button>

                                                <ul class="dropdown-menu">

                                                    <li>
                                                        <button class="btn btn-warning" onclick="MEditarCarpeta(<?php ?>)">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <button class="btn btn-danger" onclick="MEliCarpeta(<?php ?>)">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                            }
                                        }
                                    }
                                }

                                ?>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="card-footer clearfix">

                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <table id="DataTableArchivos" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre Archivo</th>
                                <th>Descripción</th>
                                <th>Fecha Creacion</th>
                                <th>Carpeta</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $archivos=ControladorCarpeta::ctrInfoArchivos();
                            foreach($archivos as $value){
                            ?>
                            <tr>
                                <td><?php echo $value["nombre_archivo"];?></td>
                                <td><?php echo $value["descripcion_archivo"];?></td>
                                <td><?php echo $value["fecha_creacion_archivo"];?></td>
                                <td><?php echo $value["id_carpeta"];?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-danger" onclick="MEliArchivo(<?php echo $value["id_archivo"]; ?>)">
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
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
