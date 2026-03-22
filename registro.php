<!DOCTYPE html>
    <html lang ="es" dir ="ltr">
        <head>
            <meta charset = "utf-8">
            <meta name="author" content="TIDEM">
            <title>Formulario de registro</title>
            <link rel="stylesheet" href="style.css"/>
        </head>
        <body>
            <!--parte superior con el logotipo-->
            <img src="assets\img\logo.png"  width="400" height="100">
            <div class="contenedor">
                <header>¡¡Saber hacer... Para ser UTSOE!!</header>
                    <!--termina parte superior-->

                 <!--comienza formulario de registro-->
                <form method="post" action="registroenvio.php"  class="form">
                <div class="form-header">
                        <h1 class="form-title"><span>Estadias</span></h1>
                        <h2 class="form-title">Bienvenido al registro para el area de estadias</h2>
                    </div>
                        <label for="Ap1" class="form-label"> Nombre:</label></br>
                        <input id="nombre" name="nombre" type="text" size="40" class="form-input"
                        placeholder="Introduce tu nombre" required/><br><br>

                        <label for="Ap1" class="form-label">Apellido Paterno:</label></br>
                        <input id="Ap1" name="Ap1" type="text" size="40" class="form-input"
                        placeholder="Introduce tu apellido paterno" required/><br><br>

                        <label for="Ap2" class="form-label">Apellido Materno:</label><br>
                        <input id="Ap2" name="Ap2" type="text" size="40" class="form-input"
                        placeholder="Introduce tu apellido materno" required/><br><br>
               
                        <label for="edad" class="form-label">Edad:</label><br>
                        <input id="edad" name="edad" type="number" size="40" class="form-input"
                        placeholder="Introduce tu edad" required/><br><br>

                        <label for="sexo" class="form-label">Sexo:</label></br>
                        <select id="sexo" name="sexo" class="form-input">
                            <option value="Hombre"> Hombre</option>
                            <option value="Mujer"> Mujer</option>
                        </select><br/><br/>
                        <label for="grado" class="form-label">Grado:</label></br>
                        <select id="grado" name="grado" class="form-input">
                            <option value="6">6</option>
                            <option value="12">12</option>
                        </select><br/><br/>
                        <label class="form-label">Grupo:</label></br>
                        <select id="grupo" name="grupo" class="form-input">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select><br><br>
                        <label class="form-label">Carrera:</label></br>
                        <select id="Carrera" name="Carrera"  class="form-input">
                            <option value="Agricultura Sustentable y Protegida">Agricultura Sustentable y Protegida</option>
                            <option value="Asesor Financiero">Asesor Financiero</option>
                            <option value="Contaduria">Contaduria</option>
                            <option value="Desarrollo de Negocios">Desarrollo de Negocios</option>
                            <option value="Diseño y Moda Industrial">Diseño y Moda Industrial</option>
                            <option value="Energias Renovables">Energias Renovables</option>
                            <option value="Mantenimiento">Mantenimiento</option>
                            <option value="Mecanica Área Industrial">Mecanica Área Industrial</option>
                            <option value="Procesos Alimentarios">Procesos Alimentarios</option>
                            <option value="Tecnologias de la Información Area Desarrollo de Software Multiplataforma">Tecnologias de la Información Area Desarrollo de Software Multiplataforma</option>
                            <option value="Tecnologias de la información Area Entornos virtuales y Negocios Digitales">Tecnologias de la información Area Entornos virtuales y Negocios Digitales</option>
                            <option value="Terapia fisica">Terapia fisica</option>
                        </select><br><br>
                        <label for="correo" class="form-label">Correo:</label><br>
                            <input id="correo" name="correo" type="email" size="40" class="form-input"
                            placeholder="Introduce tu correo" required/><br><br>

                        <label for="telefono" class="form-label">Telefono:</label><br>
                            <input id="telefono" name="telefono" type="text" size="40" class="form-input"
                            placeholder="Introduce tu numero telefonico" required/><br><br>
                            
                        <label for="usuario" class="form-label">Usuario:</label><br>
                        <input id="usuario" name="usuario" type="text" size="40" class="form-input"
                        placeholder="8 caracteres" required/><br><br>

                        <label for="contraseña" class="form-label">Contraseña:</label><br>
                        <input id="contraseña" name="contraseña" type="password" size="40" class="form-input"
                        placeholder="8 caracteres" required/><br><br>
                        <input type="submit" class="btn-submit" value="Enviar"/>
                </div>
            </form>
                <!--termina formulario inicio de sesión-->
        </body>
</html>