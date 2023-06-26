/*==================
modal nuevo autorizacion
==================*/
function MNuevoAutorizacion() {
  $("#modal-lg").modal("show");
  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/autorizacion/FNuevoAutorizacion.php",
    data: obj,
    success: function (data) {
      $("#modal-content-lg").html(data);
    }
  }

        )
}

/*=======================
funcion registro autorizacion
=======================*/
function RegNuevoAutorizacion() {

  var obj = new FormData($("#RegNuevoAutorizacion")[0]);

  $.ajax({
    type: "POST",
    url: "controlador/autorizacionControlador.php?ctrRegAutorizacion",
    data: obj,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {

      if (data == "correcto") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'La autorizacion ha sido registrado correctamente!!!',
          timer: 1000
        });

        setTimeout(function () {
          location.reload();
        }, 1200);
      }
    }
  })
}

/*====================
modal ver autorizacion
=====================*/
function MVerAutorizacion(id) {
  $("#modal-lg").modal("show");
  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/autorizacion/InfoAutorizacion.php?idAutorizacion=" + id,
    data: obj,
    success: function (data) {
      $("#modal-content-lg").html(data);
    }
  })
}

/*==================
modal eliminar usuario
==================*/
/*function MEliUsuario(id) {
  $("#modal-default").modal("show");
  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/usuario/MEliUsuario.php?idUsuario=" + id,
    data: obj,
    success: function (data) {
      $("#content-modal-default").html(data);
    }
  })
}*/

/*======================
funcion eliminar usuario
=======================*/
/*function EliUsuario(id) {
  var obj={
    "idUsuario":id
  }
  $.ajax({
    type: "POST",
    data: obj,
    url: "controlador/usuarioControlador.php?ctrEliUsuario",
    cache: false,
    success: function (data) {

      if(data=="eliminado"){
        setTimeout(function () {
          location.reload();
        }, 1000);
      }

    }
  }

        )
}*/

/*======================
Modal Editar usuario
=======================*/
/*function MEditarUsuario(id){
  $("#modal-lg").modal("show");
  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/usuario/FEditUsuario.php?idUsuario="+id,
    data: obj,
    success: function (data) {
      $("#modal-content-lg").html(data);
    }
  }

        )
}*/

/*=======================
funcion editar usuario
=======================*/
/*function EditarUsuario(id) {

  var formData = new FormData($("#EditNuevoUsuario")[0]);

  $.ajax({
    type: "POST",
    url: "controlador/usuarioControlador.php?ctrEditUsuario",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {

      if (data == "correcto") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'El usuario ha sido actualizado correctamente!!!',
          timer: 1000
        });

        setTimeout(function () {
          location.reload();
        }, 1200);
      }
    }
  }

        )

}*/
