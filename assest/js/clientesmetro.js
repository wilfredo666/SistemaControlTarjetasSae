/*==================
modal nuevo cliente
==================*/
function MNuevoClientesMetro() {
    $("#modal-lg").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/clientesmetro/FNuevoClientesMetro.php",
            data: obj,
            success: function (data) {
                $("#content-lg").html(data);
            }
        }

    )
}

/*=======================
funcion registro clientes
=======================*/
function RegNuevoClientesMetro() {
 
        var obj = new FormData($("#RegNuevoClientesMetro")[0]);

        $.ajax({
                type: "POST",
                url: "controlador/clientesmetroControlador.php?ctrRegClientesMetro",
                data: obj,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {

                    if (data == "correcto") {
                        Swal.fire({
                            icon: 'success',
                            showConfirmButton: false,
                            title: 'El cliente de metrologia ha sido registrado correctamente!!!',
                            timer: 1000
                        });

                        setTimeout(function () {
                            location.reload();
                        }, 1200);
                    }
                }
            }

        )

}

/*==================
modal ver cliente
==================*/
function MVerClienteMetro(id) {
    $("#modal-lg").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/clientesmetro/InfoClientesMetro.php?idClienteMetro=" + id,
            data: obj,
            success: function (data) {
                $("#content-lg").html(data);
            }
        }

    )
}

/*==================
modal eliminar cliente
==================*/
function MEliClienteMetro(id) {
    var obj = {
        id: id
    };

    Swal.fire({
        title: 'Esta seguro de eliminar este cliente de metrologia?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Confirmar',
        denyButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                data: obj,
                url: "controlador/clientesmetroControlador.php?ctrEliClientesMetro",
                success: function () {
                    location.reload()
                }
            })
        } else if (result.isDenied) {
            Swal.fire('Funcion Cancelada', '', 'info')
        }
    })
}

/*======================
Modal Editar cliente
=======================*/
function MEditarClienteMetro(id){
    $("#modal-lg").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/clientesmetro/FEditClienteMetro.php?idClienteMetro="+id,
            data: obj,
            success: function (data) {
                $("#content-lg").html(data);
            }
        }

    )
}

/*=======================
funcion editar cliente
=======================*/
function EditarClienteMetro(id) {
    
        var formData = new FormData($("#EditClienteMetro")[0]);

        $.ajax({
                type: "POST",
                url: "controlador/clientesmetroControlador.php?ctrEditClientesMetro",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {

                    if (data == "correcto") {
                        Swal.fire({
                            icon: 'success',
                            showConfirmButton: false,
                            title: 'El cliente de metrologia ha sido actualizado correctamente!!!',
                            timer: 1000
                        });

                        setTimeout(function () {
                            location.reload();
                        }, 1200);
                    }
                }
            }

       )

}
