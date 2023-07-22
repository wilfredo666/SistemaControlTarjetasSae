/*==================
modal nuevo cliente
==================*/
function MLogHerramientas() {
    $("#modal-lg").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/herramientas/FNuevoLogHerramientas.php",
            data: obj,
            success: function (data) {
                $("#content-lg").html(data);
                
            }
        }

    )
}

/*=======================
funcion registro Log Herramientas
=======================*/
function RegLogHerramientas() {
 
      var formData=new FormData($("#formulario")[0]);
      $.ajax({
        url: "controlador/logherramientasControlador.php?ctrRegLogHerramientas",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
  
          if(datos=="salida"){
            Swal.fire({
              toast: true,
              position: 'top-end',
              icon: 'info',
              showConfirmButton: false,
              title: 'Salida registrada',
              timer: 1000
            });
          }else if(datos=="error"){
            Swal.fire({
              toast: true,
              position: 'top-end',
              icon: 'error',
              showConfirmButton: false,
              title: 'Codigo no encontrado',
              timer: 1000
            });
          }else{
            Swal.fire({
              toast: true,
              position: 'top-end',
              icon: 'success',
              showConfirmButton: false,
              title: 'Ingreso registrado',
              timer: 1000
            });
          }
          limpiar();
        }
      });
}
