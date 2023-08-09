<div class="modal-header">
  <h4 class="modal-title">Registrar movimiento a la tarjeta</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form id="FRegLogHerramientas">

    <div class="form-group">
      <label for="">Nombre Empleado</label>
      <?php
      require_once "../../controlador/usuarioControlador.php";
      require_once "../../modelo/usuarioModelo.php";
      $usuarios = ControladorUsuario::ctrInfoUsuarios();

      ?>
      <select class="form-control select2Tec" name="nomLog" id="nomLog">
   
        <?php foreach ($usuarios as $value) {
        ?>
          <option value="<?php echo $value["id_usuario"]; ?>"><?php echo $value["nombre_usuario"]; ?></option>
        <?php
        }
        ?>
      </select>
    </div>

    <div class="form-group">
      <label for="">Observaciones</label>
      <textarea id="observacionesLog" name="observacionesLog" rows="5" class="form-control"></textarea>
    </div>

  </form>

</div>
<div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="RegLogHerramientas()">Guardar</button>
</div>

<script>
  $('.select2Tec').select2({
    theme: 'bootstrap4'
  })
</script>