$('#btn-guardar').click(function(){
    $('.campo-vacio').css('display','none')
    if($('#nombre-input').val() === ''){
        $('#nombre-input').focus();
        $('#vacio-nombre').css('display','block')
    }else{
        if($('#apellido-input').val() === ''){
            $('#apellido-input').focus();
            $('#vacio-apellido').css('display','block')
        }else{
            if($('#trabajo-input').val() === ''){
                $('#trabajo-input').focus();
                $('#vacio-trabajo').css('display','block')
            }else{
                if($('#organizacion-input').val() === ''){
                    $('#organizacion-input').focus();
                    $('#vacio-organizacion').css('display','block')
                }else{
                    if($('#email-input').val() === ''){
                        $('#email-input').focus();
                        $('#vacio-email').css('display','block')
                    }else{
                        if($('#phone-input').val() === ''){
                            $('#phone-input').focus();
                            $('#vacio-phone').css('display','block')
                        }else{
                            if($('#pais-input').val() === ''){
                                $('#pais-input').focus();
                                $('#vacio-pais').css('display','block')
                            }else{
                                if($('#trabajadores-input').val() === ''){
                                    $('#trabajadores-input').focus();
                                    $('#vacio-trabajadores').css('display','block')
                                }else{
                                    if($('#alumnos-input').val() === ''){
                                        $('#alumnos-input').focus();
                                        $('#vacio-alumnos').css('display','block')
                                    }else{
                                        if($('#describe-input').val() === ''){
                                            $('#describe-input').focus();
                                            $('#vacio-describe').css('display','block')
                                        }else{
                                            var informacion = 
                                            "nombre=" + $('#nombre-input').val() + '&' +
                                            "contrasenia=" + $('#contrasenia-input').val() + '&' +
                                            "trabajo=" + $('#trabajo-input').val() + '&' +
                                            "organizacion=" + $('#organizacion-input').val() + '&' +
                                            "goverment=" + $('#goverment-input').prop('checked') + '&' +
                                            "nonprofit=" + $('#nonprofit-input').prop('checked') + '&' +
                                            "correo=" + $('#email-input').val() + '&' +
                                            "phone=" + $('#phone-input').val() + '&' +
                                            "pais=" + $('#pais-input').val() + '&' +
                                            "alumnos=" + $('#alumnos-input').val() + '&' +
                                            "describe=" + $('#describe-input').val()
                                            $.ajax({
                                                url:'ajax/forBusinness.php?acciones=guardarTutor',
                                                method:'POST',
                                                data:informacion,
                                                success:function(respuesta){
                                                    location.replace(respuesta)
                                                },
                                                error:function(error){
                                                    console.error(error);
                                                }
                                            })
                                        
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }                          
})

$('#btn-iniciar-sesion').click(function(){
    var informacion = 'correo=' + $('#correo-tutor').val() + '&' +
                      'contrasenia=' + $('#contrasenia-tutor').val()
    $.ajax({
        url:'ajax/forBusinness.php?acciones=iniciarSesion',
        data:informacion,
        method:'POST',
        dataType:'json',
        success:function(respuesta){
            console.log(respuesta)
            if(respuesta['resultado']){
                location.replace(respuesta['direccion'])
            }else{
                $('#contrasenia-incorrecta').toggleClass('d-none')
            }
        },
        error:function(error){
            console.error(error)
        }
    })
})

$('#btn-cerrar-tutor').click(function(){
    $.ajax({
        url:'ajax/forBusinness.php?acciones=cerrarSesionTutor',
        success:function(respuesta){
            location.replace(respuesta)
        },
        error:function(error){
            console.error(error)
        }
    })
})