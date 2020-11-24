$(document).ready(function(){
    $.ajax({
        url :'ajax/estudiante.php?acciones=imagenGuardada',
        dataType:'json',
        success:function(respuesta){

            if(respuesta['respuesta']){
                $('#input-guardar').append
                (
                    `
                    <div class = "div-guardada">
                        <div class = "sub-div-guardado guardado-label">
                            <div class = "contenedor-guardados">
                                <div class = "imagen-perfil">
                                    <img src="${respuesta['direccionImagen']}" alt="">
                                </div>
                            </div>
                            <div class = "contenedor-guardados">
                                <div class = "btns-imagenes">
                                    <button type = "button" id  = "eliminar-foto" onclick="eliminarFoto()" >Eliminar Foto</button>
                                </div>    
                            </div>
                        </div>
                    </div>
                    `
                )
            }else{
                $('#input-guardar').append
                (
                    `
                    <form id = "formulario-foto" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre Completo</label>
                            <div class="col-sm-10">
                                <input type="text" id = 'nombre-Completo' name = 'nombre-Completo' class="form-control">
                            </div>
                        </div>
                        <div class = "containter-fluid row">
                            <div class = "col-2">
                                <label for="buttonImagen">Foto perfil</label>
                            </div>
                            <div class = "col-10">
                                <i class="fas fa-user usuario-subir col-form-label"></i>
                                <div class = "div-cargar">
                                    <input type="file" name="archivo">
                                </div>
                            </div>
                        </div>
                    </form>
                    `
                )
            }
        },
        error:function(){

        }
    })
})

function eliminarFoto() {
    $.ajax({
        url:'ajax/estudiante.php?acciones=eliminarImagen',
        success:function(respuesta){
            location.reload()
        },
        error:function(error){
            console.error(error)
        }
    })
}

function cambiarFoto(){
    var resultado = document.getElementById('formulario-foto')
    var informacion = new FormData(resultado)
    informacionTexto = $('#situacion-laboral').val()
    $.ajax({
        url:'ajax/estudiante.php?acciones=actualizarImagen',
        method:'POST',
        data:informacion,
        processData: false,
        contentType:false,
        cache:false,
        success:function(respuesta){
            location.reload();
        },
        error:function(error){
            console.error(error)
        }
    })
}

$('#btn-guardar-cambios').click(function(){
    var resultado = document.getElementById('formulario-foto')
    var informacion = new FormData(resultado)
    informacionTexto = $('#situacion-laboral').val()
    $.ajax({
        url:'ajax/estudiante.php?acciones=actualizarImagen',
        method:'POST',
        data:informacion,
        processData: false,
        contentType:false,
        cache:false,
        success:function(respuesta){
            location.reload();
            $('#main-ajustes').focus()
        },
        error:function(error){
            console.error(error)
        }
    })
})

