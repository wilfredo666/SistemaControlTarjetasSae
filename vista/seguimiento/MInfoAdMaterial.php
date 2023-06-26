<?php
require_once "../../controlador/seguimientoControlador.php";
require_once "../../modelo/seguimientoModelo.php";

$codSeg = $_GET["codSeg"];

//cuando la consulta devuelve un falso porque no hay datos para devolver
$seguimiento = ControladorSeguimiento::ctrInfoAdicional($codSeg);
if($seguimiento==false){
    $seguimiento["descripcion_mat"]="";
    $seguimiento["pn_mat"]="";
    $seguimiento["pnalt_mat"]="";
    $seguimiento["qty_mat"]="";
    $seguimiento["almacen_mat"]="";
}

?>


<div class="modal-header">
    <h4 class="modal-title">Información adicional de material</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-4 border-right">
            <div class="description-block">
                <dt class="description-header">Material</dt>
                <span class="description-text"><?php echo $seguimiento["descripcion_mat"];?></span>
            </div>
        </div>



        <div class="col-sm-4 border-right">
            <div class="description-block">
                <dt class="description-header">pn_mat</dt>
                <span class="description-text"><?php echo $seguimiento["pn_mat"];?></span>
            </div>
        </div>


        <div class="col-sm-4">
            <div class="description-block">
                <dt class="description-header">pnalt_mat</dt>
                <span class="description-text"><?php echo $seguimiento["pnalt_mat"];?></span>
            </div>
        </div>
    </div>
    
        <div class="row">
        <div class="col-sm-4 border-right">
            <div class="description-block">
                <dt class="description-header">qty_mat</dt>
                <span class="description-text"><?php echo $seguimiento["qty_mat"];?></span>
            </div>
        </div>



        <div class="col-sm-4 border-right">
            <div class="description-block">
                <dt class="description-header">almacen_mat</dt>
                <span class="description-text"><?php echo $seguimiento["almacen_mat"];?></span>
            </div>
        </div>


    </div>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div>