<!--Titulos ya utilizados-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../mainAlexander.css">
</head>
<body>
    <main>
    <div class="div-transform">
        <h1>Transform your talent</h1>
    </div>
    <div class="parrafo-transform">
        <p>Coursera for Business helps you take your talent to the next level with online courses from the world’s best universities. Let’s get started and design the right training solutions for your teams.</p>
    </div>
    <div class="div-formulario">
            <form class="formulario-learn">
                    <label>First Name:</label>
                    <input required type="text" id = "nombre-input">
                    <div id = "vacio-nombre" class = "campo-vacio" style = "top:95px"><span>This field is required</span></div>
                    <label>Password:</label>
                    <input required type="text" id = "contrasenia-input">
                    <div id = "vacio-apellido" class = "campo-vacio" style = "top:165px"><span>This field is required</span></div>
                    <label>Job Title:</label>
                    <input required type="text" id = "trabajo-input">
                    <div id = "vacio-trabajo" class = "campo-vacio" style = "top:240px"><span>This field is required</span></div>
                    <label>Organization Name:</label>
                    <input required type="text" id = "organizacion-input">
                    <div id = "vacio-organizacion" class = "campo-vacio" style = "top:310px"><span>This field is required</span></div>
                    <label>Government:</label>
                    <input required type="checkbox" id="goverment-input">
                    <label>Nonprofit:</label>
                    <input required type="checkbox" id="nonprofit-input">
                    <label>Work Email Address:</label>
                    <input required type="text" id = "email-input">
                    <div id = "vacio-email" class = "campo-vacio" style = "top:480px"><span>This field is required</span></div>
                    <label>Phone Number:</label>
                    <input required type="text" id = "phone-input">
                    <div id = "vacio-phone" class = "campo-vacio" style = "top:555px"><span>This field is required</span></div>
                    <label>Country</label>
                    <select id="pais-input">
                        <option value="">Select...</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Costa Rica">Costa Rica</option>
                    </select>
                    <div id = "vacio-pais" class = "campo-vacio" style = "top:610px"><span>This field is required</span></div>
                    <label>Number of employees at your company:</label>
                    <select  id="trabajadores-input">
                        <option value="">Select...</option>        
                        <option value="1-500">1-500</option>
                        <option value="501-1000">501-1000</option>
                        <option value="1001-5000">1001-5000</option>
                        <option value="5001-15000">5001-15000</option>
                        <option value="15000+">15000+</option>   
                    </select>
                    <div id = "vacio-trabajadores" class = "campo-vacio" style = "top:660px"><span>This field is required</span></div>             
                    <label>Expected number of learners:</label>
                    <select  id="alumnos-input">
                        <option value="">Select...</option>
                        <option value="1-500">1-500</option>
                        <option value="501-1000">501-1000</option>
                        <option value="1001-5000">1001-5000</option>
                        <option value="5001-15000">5001-15000</option>
                        <option value="15000+">15000+</option>
                    </select>
                    <div id = "vacio-alumnos" class = "campo-vacio" style = "top:715px"><span>This field is required</span></div>
                    <label>Please briefly describe your needs:</label>
                    <textarea id="describe-input" cols="30" rows="5"></textarea>
                    <div id = "vacio-describe" class = "campo-vacio" style = "top:875px"><span>This field is required</span></div>
                    <button type="button" id="btn-guardar">Submit</button>
            </form>
        </div>
    </main>
    <script src = "../js/jquery.js"></script>
    <script src = "js/forBussines.js"></script>
</body>
</html>