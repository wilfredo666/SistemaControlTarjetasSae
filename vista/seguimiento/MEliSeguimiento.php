<?php
require_once "../../controlador/seguimientoControlador.php";
require_once "../../modelo/seguimientoModelo.php";
    
$idSeguimiento = $_GET["idSeguimiento"];

?>
<div class="modal-header">
    <h4 class="modal-title">Eliminar seguimiento</h4>
</div>
<div class="modal-body">
   <h2 class="text-danger">Estas seguro de eliminar este seguimiento?</h2>
</div>

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="EliUsuario(<?php echo $idSeguimiento; ?>)">Confirmar</button>
</div>
