<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
  <aside><div class="sidenav position-sticky d-flex flex-column justify-content-between">
     <!--parte superior con el logotipo-->
     <img src="assets/img\logo.png"  width="400" height="100">
            <div class="contenedor" align="">
                    <!--termina parte superior-->
                    
        <h1>Bienvenido al departamento de estadias</h1>
        <div>
        <p>En la siguiente imagen podrá encontrar un esquema con el cual tendrá una mejor interpretación para saber con quién dirigirse.</p>
        </br>
        <img src="D:\integradora\assets\img\info 1.jpg">

        <p>A continuación se detalla la información sobre lo que trata el proceso de estadías, así como el lapso de tiempo para la realización del mismo.</p>
        </br>
        <img src="D:\integradora\assets\img\info 2.jpg">

        <p>Aquí se detalla en qué consiste el sistema de estadías de manera dual. Además, también se especifica el lapso de tiempo para la realización del mismo.</p>
        </br>
        <img src="D:\integradora\assets\img\info 3.jpg">

        <p>Por último, le hacemos de su conocimiento la infomación de contacto para solventar las inquietudes que se le presenten.</p>
        </br>
        <img src="D:\integradora\assets\img\info 7.jpg">
      </div>
      <?php
      include("config/db.php");
      
      $usuario = $_POST['usuario'];


      if($usuario=="admin"){
        echo "<td> <a href='consulta.php?'>Administracion de cuentas</a></td>";
      }else{
        echo "<td> <a href='proceso.php?'>Procedimiento para las estadias</a></td>";
      }

      ?>
</body>
</html>