(function(){
    $('#iniciar').addClass('div-mostrado')
    $('#registro').css('display','none')
    $("#primer-texto").find("*").css('color','black')
    $('#error-nombre').css('display','none')
    $('#error-email').css('display','none')
    $('#error-contrasenia').css('display','none')
})()

$("#primer-texto").click(function(){
    $("#imagen-dinamica").attr('src','img/landingPage/howitworks-ipad-v2.png');
    $("#primer-texto").find("*").css('color','black')
    $("#segundo-texto").find("*").css('color','#8080804d')
    $("#tercer-texto").find("*").css('color','#8080804d')
});

$("#segundo-texto").click(function(){
    $("#imagen-dinamica").attr('src','img/landingPage/howitworks_iphones_v2.png')
    $("#primer-texto").find("*").css('color','#8080804d')
    $("#segundo-texto").find("*").css('color','black')
    $("#tercer-texto").find("*").css('color','#8080804d')
});

$("#tercer-texto").click(function(){
    $("#imagen-dinamica").attr('src','img/landingPage/howitworks_certificate_v2.png')
    $("#primer-texto").find("*").css('color','#8080804d')
    $("#segundo-texto").find("*").css('color','#8080804d')
    $("#tercer-texto").find("*").css('color','black')
});

$('#registrarse').click(function(){
    $('#registrarse').addClass('div-mostrado');
    $('#iniciar').removeClass('div-mostrado');
    $('#registro').css('display','block');
    $('#inicio-sesion').css('display','none');
});

$('#iniciar').click(function(){
    $('#iniciar').addClass('div-mostrado');
    $('#registrarse').removeClass('div-mostrado');
    $('#registro').css('display','none');
    $('#inicio-sesion').css('display','block');
});

$('#btn-unete2').click(function(){
    if($('#nombre-registro').val() === ''){
        $('#error-nombre').css('display','block')
        $('#nombre-registro').focus();
    }else{
        if($('#email-registro').val() === ''){
            $('#error-email').css('display','block')
            $('#email-registro').focus();
        }else{
            if($('#contrasenia-registro').val() === ''){
                $('#error-contrasenia').css('display','block')
                $('#contrasenia-registro').focus()
            }else{
                var informacionUsuario = "nombre=" + $('#nombre-registro').val() + '&' +
                                       "correo=" + $('#email-registro').val() + '&' +
                                       "contrasenia=" + $('#contrasenia-registro').val();
                $.ajax({
                    url: 'Registro/ajax/estudiante.php?acciones=registrar',
                    data: informacionUsuario,
                    method : 'POST',
                    success:function(respuesta){
                        console.log(respuesta)
                        if (respuesta == 1062){
                            document.getElementById('correo-repetido').style.display = 'block';
                        }else{
                            location.replace(respuesta)
                        }
                    },
                    error:function(error){
                        console.error(error)
                    }
                })
            }
        }
    }
})

$('#iniciar-sesion').click(function(){
    var informacionInicio = "correo=" + $('#input-correo').val() + '&' +
                      "contrasenia=" + $('#input-contrasenia').val()                    
    $.ajax({
        url: 'Registro/ajax/estudiante.php?acciones=iniciarSesion',
        method:'POST',
        data:informacionInicio,
        success:function(respuesta){
            console.log(respuesta)
            if (respuesta === "Registro"){
                location.replace(respuesta);
                //document.getElementById('contrasenia-incorrecta').style.display = 'block'
            }else{
                if ($('#contrasenia-incorrecta').hasClass('d-none')){
                    $('#contrasenia-incorrecta').toggleClass('d-none')
                }
            }
            
        },
        error:function(error){
            console.error(error)
        }
    })
})