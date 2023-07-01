let arrImages=[];

let myDropzone = new Dropzone('.dropzone', {
    url:'../assets/img',
    maxFilesize:256,
    maxFiles:50,
    acceptedFiles:'image/jpeg, image/png, application/pdf, application/zip, .xlsx, .docx, .word, application/rar, .rar',
    addRemoveLinks:true,
    createImageThumbnails:true,
    dictRemoveFile:'Quitar'
})
myDropzone.on('addedfile', file=>{
    arrImages.push(file);
})

myDropzone.on('removedfile', file=>{
    let i = arrImages.indexOf(file);
    arrImages.splice(i, 1);
})

function init(){
    $("#FormRegCarpetas").on("submit",function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#FormRegCarpetas")[0]);

    var totalfiles= arrImages.length;
    for (var i = 0; i < totalfiles; i++) {
        formData.append("file[]",arrImages[i]);
    }

    $.ajax({
        url: "../../controller/producto.php?op=guardar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){
            console.log(data);
            $('#prod_nom').val('');
            Dropzone.forElement('.dropzone').removeAllFiles(true);
        }
    });
}

init();

/*==================
modal nuevo cliente
==================*/
function MNuevoCarpeta() {
    $("#modal-xl").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/carpeta/FNuevoCarpeta.php",
            data: obj,
            success: function (data) {
                $("#content-xl").html(data);
            }
        }

    )
}

/*=======================
funcion registro carpeta
=======================*/
function FormRegCarpeta() {
 
        var obj = new FormData($("#FormRegCarpetas")[0]);

        $.ajax({
                type: "POST",
                url: "controlador/carpetaControlador.php?ctrRegCarpeta",
                data: obj,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {

                    if (data == "correcto") {
                        Swal.fire({
                            icon: 'success',
                            showConfirmButton: false,
                            title: 'Carpeta creada correctamente!!!',
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
modal eliminar carpetas
==================*/
function MEliCarpeta(id) {
    var obj = {
        id: id
    };

    Swal.fire({
        title: 'Esta seguro de eliminar este Carpeta?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Confirmar',
        denyButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                data: obj,
                url: "controlador/carpetaControlador.php?ctrEliCarpeta",
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
Modal Editar carpeta
=======================*/
function MEditarCarpeta(id){
    $("#modal-sm").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/carpeta/FEditCarpeta.php?id="+id,
            data: obj,
            success: function (data) {
                $("#modal-content-sm").html(data);
            }
        }

    )
}

/*=======================
funcion editar carpeta
=======================*/
function EditCarpeta(id) {
    
        var formData = new FormData($("#EditCarpeta")[0]);

        $.ajax({
                type: "POST",
                url: "controlador/carpetaControlador.php?ctrEditCarpeta",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {

                    if (data == "correcto") {
                        Swal.fire({
                            icon: 'success',
                            showConfirmButton: false,
                            title: 'La carpeta ha sido actualizado correctamente!!!',
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


