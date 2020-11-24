(function(){
    $.ajax({
        url:'ajax/cursos.php?acciones=enlistarCursos',
        dataType:'json',
        success:function(respuesta){
            console.log(respuesta)
            for (let i = 0; i < respuesta['tamanioArreglo']; i++) {
                $('#cursos-tutor').append(
                    `
                        <option value="${respuesta[i]['idCurso']}">${respuesta[i]['nombreCurso']}</option>
                    `
                    )
            }
        },
        error:function(error){
            console.error(error)
        }
    })
})()
$('#agregar-Cursos').click(function(){   
        if($('#nombre-curso').val() == ''){    
            $('#nombre-vacio-curso').css('display','block')   
        }else{
            if($('#descripcion-Curso').val() == ''){
                $('#descripcion-vacio-curso').css('display','block')
            }else{
                var informacion =  "nombreCurso=" + $('#nombre-curso').val() + '&' +
                "descripcionCurso=" + $('#descripcion-Curso').val()
                $.ajax({
                url:'ajax/cursos.php?acciones=agregarCursos',
                data:informacion,
                method:'POST',
                success:function(respuesta){
                    console.log(respuesta)
                },
                error:function(error){
                    console.error(error)
                }
                })
            }
    }
})

$('#btn-Recurso').click(function(){
    var informacion = document.getElementById('agregaRecurso');
    var informacionEnviar = new FormData(informacion);
    var idCurso = $('#cursos-tutor').val()
    $.ajax({
        url:'ajax/cursos.php?acciones=agregarRecurso&idCurso=' + idCurso,
        data:informacionEnviar,
        method:'POST',
        processData: false,
        contentType:false,
        cache:false,
        success:function(respuesta){
            console.log(respuesta)
        },
        error:function(error){
            console.error(error)
        }
    })
})