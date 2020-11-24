<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        .formulario-agregar-curso{
            background-color: #4285F4;
            /*Esta parte despues la tenemos que cambiar para que se automatico*/
            margin: 1% 0%;
            height: auto;
            padding: 1% 0;
            border-radius: 10px;
        }
        .formulario-curso{
            width: 50%;
            height: 560px;
            margin: 0 auto;
        }
    </style>
</head>
<body>  
    <div class = "container-fluid">
        <div class = "col-12">
            <div class = "formulario-agregar-curso">
                <div class = "formulario-curso">
                    <div>
                        <h1>Informacion Curso</h1>
                    </div>
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Titulo del curso</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Ingrese el titulo del curso">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Descripcion del curso</label>
                            <div class="col-sm-10">
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <fieldset class="form-group">
                        </fieldset>
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Agregar Curso</button>
                          </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>