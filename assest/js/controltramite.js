var tabla;

//funcion que se ejecuta al inicio
function init(){

  /*$("#formulario").on("submit",function(e){
   	registrar_tramite(e);
   })*/

}

//funcion limpiar
function limpiar(){
  $("#codigo_tramite").val("");
  setTimeout('document.location.reload()',500);

}


function registrar_tramite(){

  let codTramite=document.getElementById("codigo_tramite").value
  let nomUsuario=document.getElementById("nomUsuario").value
  var data={
    codTramite:codTramite,
    nomUsuario:nomUsuario
  }
  if(codTramite==null||codTramite.length<3){
    document.getElementById("error-codTra").innerHTML="Requerido: minimo 3 caracteres"
  }else if(nomUsuario==null||nomUsuario.length<3){
    document.getElementById("error-nomUsuario").innerHTML="Requerido: minimo 3 caracteres"
  }else if(nomUsuario==null||nomUsuario.length<3){
  }else{
    var formData=new FormData($("#formulario")[0]);
    $.ajax({
      url: "controlador/marcacionControlador.php?ctrRegMarcacion",
      type: "POST",
      data: data,
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

}

/*========================================
ver detalle de ingreso y salida de tramite
=========================================*/
function VerDetalleVitacora(codSeguimiento){
  $("#modal-xl").modal("show")

  let obj=""

  $.ajax({
    type:"POST",
    url:"vista/seguimiento/MVerDetalleVitacora.php?cod="+codSeguimiento,
    data:obj,
    success:function(data){
      $("#content-xl").html(data)
    }
  })
}

/*========================================
habilitar la entrada del codigo de tarjeta
=========================================*/
function hbCodTramite(){
  $("#codigo_tramite").attr("readonly", true);

  let userName=document.getElementById("nomUsuario").value

  if(userName!="null"){
    $("#codigo_tramite").attr("readonly", false);
  }

}