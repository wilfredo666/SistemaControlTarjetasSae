function MNuevoHerramientas() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/FNuevoHerramientas.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function RegHerramientas() {
  var formData = new FormData($("#FormRegHerramientas")[0])
  $.ajax({
    type: "POST",
    url: "controlador/herramientasControlador.php?ctrRegHerramienta",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Herramientas Registradas',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error de Registro!!!',
          timer: 1500
        })
      }
    }
  })

}

function MVerHerramienta(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/MVerHerramientas.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MEditarControlHerramienta(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/controlherramientas/FEditControlHerramientas.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function EditControlHerramientas() {

  var formData = new FormData($("#FormEditControlHerramienta")[0])
  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrEditControlHerramienta",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Control Herramienta Actualizado',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error!!!',
          timer: 1500
        })
      }
    }
  })
}

function MEliControlHerramienta(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar este control herramientas?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/controlherramientasControlador.php?ctrEliControlHerramienta",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function MCargarRegistrosHerramientas() {
  $("#modal-default").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/controlherramientas/FCargarRegistrosControlHerramientas.php",
    data: obj,
    success: function (data) {
      $("#content-modal-default").html(data)
    }
  })
}

function CargarRegistrosControlHerra() {
  var formData = new FormData($("#FCargarRegistrosControlHerra")[0])


  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrRegRegistrosControlHerramientas",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Registros cargados',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error de carga!!!',
          timer: 1500
        })

      }
    }
  })

}

/* REPORTE DE VENTAS POR PERSONAL */
function reporteHerramienta() {
  var formData = new FormData($("#ReporteDeHerramientas")[0])

  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrRepHerramientas",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      $("#repHerramientas").html(data)
      /* console.log(data); */
    }
  })
}

function impHerramientaSelec() {
  /*  window.open("vista/reportes/repHerramientaSelec.php", '_blank'); */
  $("#modal-xl").modal("show")
  var formData = new FormData($("#FormHerramientaSeleccionado")[0]);

  $.ajax({
    type: "POST",
    url: "vista/reportes/repHerramientaSelec.php",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      /* $("#repHerramientas").html(data) */
      $("#content-xl").html(data)
      console.log(data);

      /* $$('#button').each(function(link) { button.onclick = function(){ window.open("newpage.html",'New Window'); return false; }; }); */
    }
  })
}

function fechSelec(){
  var fechaInicial = new Date(document.getElementById('fechacalControlHerramientas').value); 
  if(fechaInicial !== ""){
    $("#periodocalControlHerramientas").attr("readonly", false);
  }
}

function sumarMeses() {
  var fechaInicial = new Date(document.getElementById('fechacalControlHerramientas').value); 
  var mesesASumar = parseInt(document.getElementById('periodocalControlHerramientas').value);

  var fechaFinal = new Date(fechaInicial.getFullYear(), fechaInicial.getMonth() + mesesASumar, fechaInicial.getDate()+1);

  /* console.log('Fecha inicial: ', fechaInicial.toISOString().split('T')[0]);
  console.log('Fecha resultante después de sumar', mesesASumar, 'meses:', fechaFinal.toISOString().split('T')[0]); */

  document.getElementById('fechavenciControlHerramientas').value = fechaFinal.toJSON().slice(0,10)
  document.getElementById('fechavenciControlHerramientas').classList.add('bg-dark','text-white')

  document.getElementById("estadoControlHerramientas").value = "CON TIEMPO";

  var DiferenciaFecha = fechaFinal - fechaInicial
  var diferenciaEnDias = Math.floor(DiferenciaFecha / (1000 * 60 * 60 * 24));
  document.getElementById('diasalertaControlHerramientas').value = diferenciaEnDias + " DIAS"
 
}

