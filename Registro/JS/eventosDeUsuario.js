(function(){
    $.ajax({
        url:'ajax/estudiante.php?acciones=enlistarCursosUsuarios',
        dataType:'json',
        success:function(respuesta){
            for (var i = 0; i < respuesta.length; i++) {
                $('#cursos-div').append(
                    `
                    <div class = "container-fluid row contenedor-curso">
                        <div class = "col-md-5">
                            <div class = "div-curso-imagen">
                                <img src="../img/CourseraForEnterprise/CollectionTile-DataScienceBusinessAnalysts.jpg" alt="">
                            </div>
                        </div>
                        <div class = "col-md-7">
                            <div class = "div-curso-texto">
                                <p>${respuesta[i]['nombreCurso']}</p><br>
                                <hr>
                                <span>${respuesta[i]['descripcionCurso']}</span>
                            </div>
                        </div>
                    </div>
                    `)
            }
        },
        error:function(error){
            console.error(error)
        }
    })
})()

$('.btn-cerrar').click(function(){
    $.ajax({
        url: 'ajax/Estudiante.php?acciones=cerrarSesion',
        success:function(respuesta){
            location.replace(respuesta)
        },
        error:function(error){
            console.error(error)
        }
    })
})


function actualizarNombre() {
    console.log($('#inputNombre').val());
    $.ajax({
        data: `nuevo=${$('#inputNombre').val()}`,
        method: "POST",
        url: 'ajax/Estudiante.php?acciones=cambiarNombre',
        success: function (respuesta) {
            console.log(respuesta)
            location.reload();
        },
        error: function (error) {
            console.error(error)
        }
    });
}

function actualizarContra() {
    if ($('#inputNuevaContra').val() === $('#inputComproContra').val()) {
        //console.log("exito");
        if ($('#inputComproContra').hasClass('bordeError')) {
            $('#inputComproContra').toggleClass('bordeError');
        };
        $.ajax({
            data: `nuevo=${$('#inputNuevaContra').val()}&contra=${$('#inputViejaContra').val()}`,
            method: "POST",
            dataType: "json",
            url: 'ajax/Estudiante.php?acciones=cambiarContra',
            success: function (respuesta) {
                console.log(respuesta.status)
                if (respuesta.status == 'exito') {
                    if ($('#inputViejaContra').hasClass('bordeError')) {
                        $('#inputViejaContra').toggleClass('bordeError');
                        location.reload();
                    };
                } else if (respuesta.status == 'fallido') {
                    if (!$('#inputViejaContra').hasClass('bordeError')) {
                        $('#inputViejaContra').toggleClass('bordeError');
                    };
                }
            },
            error: function (error) {
                console.error(error)

            }
        });
    } else {
        console.log("fallido");
        if (!$('#inputComproContra').hasClass('bordeError')) {
            $('#inputComproContra').toggleClass('bordeError');
        };
    }
}

function borrarCuenta() {
    //console.log("exito");
    $.ajax({
        data: `contra=${$('#inputBorrar').val()}`,
        method: "POST",
        dataType: "json",
        url: 'ajax/Estudiante.php?acciones=borrarCuenta',
        success: function (respuesta) {
            console.log(respuesta.status)
            if (respuesta.status == 'exito') {
                if ($('#inputBorrar').hasClass('bordeError')) {
                    $('#inputBorrar').toggleClass('bordeError');
                    $.ajax({
                        url: 'ajax/Estudiante.php?acciones=cerrarSesion',
                        success: function (respuesta) {
                            location.replace(respuesta)
                        },
                        error: function (error) {
                            console.error(error)
                        }
                    })
                };
            } else if (respuesta.status == 'fallido') {
                if (!$('#inputBorrar').hasClass('bordeError')) {
                    $('#inputBorrar').toggleClass('bordeError');
                };
            }
        },
        error: function (error) {
            console.error(error)

        }
    });
}

function cambiarCorreo() {
    //console.log("exito");
    console.log("deshabilitado por potencial error critico");
    /* $.ajax({
        data: `nuevo=${$('#inputEmail').val()}&contra=${$('#inputContra').val()}`,
        method: "POST",
        dataType: "json",
        url: 'ajax/Estudiante.php?acciones=cambiarEmail',
        success: function (respuesta) {
            console.log(respuesta.status)
            if (respuesta.status == 'exito') {
                if ($('#inputContra').hasClass('bordeError')) {
                    $('#inputContra').toggleClass('bordeError');
                };
                location.reload();
            } else if (respuesta.status == 'fallido') {
                if (!$('#inputContra').hasClass('bordeError')) {
                    $('#inputContra').toggleClass('bordeError');
                };
            }
        },
        error: function (error) {
            console.error(error)
        }
    }); */
}
