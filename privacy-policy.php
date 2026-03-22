<!DOCTYPE html>
<html lang="en-us">
<head>
   <meta charset="utf-8">
   <title>AVISO DE PRIVACIDAD</title>
   <!-- mobile responsive meta -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
   <meta name="description" content="This is meta description">
   <meta name="author" content="Themefisher">
   <!-- plugins -->
   <link rel="preload" href="https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2" style="font-display: optional;">
   <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:600%7cOpen&#43;Sans&amp;display=swap" media="screen">
   <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
   <link rel="stylesheet" href="plugins/slick/slick.css">
   <!-- Main Stylesheet -->
   <link rel="stylesheet" href="assets/css/style.css">
   <!--Favicon-->
   <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
</head>
<body>
<!-- navigation -->
<header class="sticky-top bg-white border-bottom border-default">
   <div class="container">
      <nav class="navbar navbar-expand-lg navbar-white">
         <a class="navbar-brand" href="index-full.php">
            <img class="img-fluid" width="150px" src="assets/img/logo.png" alt="LogBook">
         </a>
         <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
            <i class="ti-menu"></i>
         </button>
         <div class="collapse navbar-collapse text-center" id="navigation">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">
                     Sitio Principal <i class="ti-angle-down ml-1"></i>
                  </a>
                  <div class="dropdown-menu">
					<a class="dropdown-item" href="index-full.php">Estadias</a>
					<a class="dropdown-item" href="http://www.utsoe.edu.mx/tramites-servicios/">Tramites y servicios</a>
               <a class="dropdown-item" href="http://201.116.195.195/sinut/Default.aspx">SINUT</a>
               <a class="dropdown-item" href="http://201.116.195.197/moodle/">COMUT</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">Tramites y Servicios <i class="ti-angle-down ml-1"></i>
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="post-details-1.php">Estadias Internacionales</a>
                     <a class="dropdown-item" href="post-elements.php">Dirección Vinculación</a>
                     <?php
                     include("config/db.php");                        $usuario = $_POST['usuario'];
                        if($usuario=="admin"){
                           echo "<td> <a class='dropdown-item' href='consulta.php?'>Actualización de los datos</a>";
                        }else{
                           echo "<td> <a class='dropdown-item' href='proceso.php?'>Procedimento para las estadias</a>";
                        }
                        ?>
                     <a class="dropdown-item" href="Login.php">Caerrar Sesión</a>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
   </div>
</header>
<!-- /navigation -->
<section class="section-sm">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="title-bordered mb-5 d-flex align-items-center">
               <h1 class="h4">AVISO DE CONDICIÓNES Y POLITICAS DE PRIVACIDAD</h1>
            </div>
            <div class="content">
               <h4 id="responsibility-of-contributors">AVISO DE PRIVACIDAD SIMPLIFICADO</h4>
               <p>De	conformidad	a	lo	dispuesto	por	el	artículo;	3	fracción	I,	34,	35,	36,	37,	38,	40	y	42 de	la	Ley	de	
                  Protección	de	Datos	Personales	en	Posesión	de	Sujetos	Obligados	para	el	Estado	de	Guanajuato,	
                  contenido	en	el	Decreto	número	206,	publicada	en	el	Periódico	Oficial	del	Gobierno		del	Estado	de	
                  Guanajuato	el	 14	de	julio	del	2017,	se	da	a	conocer	el	aviso	de	privacidad	correspondiente:</p>

               <p>La	 Universidad	 Tecnológica	 del	 Suroeste	 de	 Guanajuato	 (UTSOE),	 al	 ser	 un	 Organismo	 Público	
               Descentralizado	 de	 la	 Administración	 Pública	 Estatal,	 posee	 personalidad	 jurídica	 y	 patrimonio	
               propio,	 su	 creación	 obedece	 al	 Decreto	 Gubernativo	 103	 publicado	 en	 el	 Periódico	 Oficial	 del	
               Gobierno	 del	 Estado	 de	 Guanajuato	 el	 22	 de	 septiembre	 de	 1998,	 reestructurado	 a	 través	 del	
               Decreto	Gubernativo	242	publicado	en	el	Periódico	Oficial	del	Gobierno	del	Estado	de	Guanajuato	
               el 18	de	octubre	de	2005	y	reformado		mediante	Decreto	Gubernativo	publicado	en	el	Periódico	
               Oficial	del	Gobierno	del	Estado	de	Guanajuato	el	18	de	octubre	de	2016.</p>

               <p>La	Universidad	Tecnológica	del	Suroeste	de	Guanajuato,	recabará	para	sus	procesos	académicos,
                  administrativos y	operativos datos	de	identificación	 patrimoniales,	laborales,	de	salud	física,	vida,	
                  orígenes	familiares	y	biométricos,	con	la	finalidad	de	cumplir	con	las	necesidades	del	presente	aviso,	
                  comprometiéndose	en	todo	momento	a	guardar	la	confidencialidad	de	los	mismos	y	ser	tratados	
                  bajo	estrictas	medidas	de	seguridad.</p>

               <h4 id="gathering-of-personal-information">De	la	transferencia:	</h4>
               <p>Por	medio	del	presente	se	hace	de	su	pleno	conocimiento,	que	sus	datos	
               personales,	 podrán	 ser	 transferidos	 a	 otras	 personas,	 instituciones	 u	 autoridades	 que	 así lo	
               acrediten,	 siempre	 y	 cuando	 estos	 se	 utilicen	 para	 el	 ejercicio	 de	 las	 facultades	 propias	 e	
               indispensables	previstas	en el	artículo	97	de	la Ley	de	Protección	de	Datos	Personales	en	Posesión	
               de	Sujetos	Obligados	para	el	Estado	de	Guanajuato.</p>
               <h4 id="protection-of--personal--information">AVISO DE PRIVACIDAD INTEGRAL</h4>
               <p>La	Universidad	Tecnológica	del	Suroeste	de	Guanajuato	(UTSOE),	con	domicilio	en	Carr.	ValleHuanimaro	 km.	 1.2	 Valle	 de	 Santiago,	 Guanajuato,	 responsable	 del	 tratamiento	 de	 sus	 datos	
                  personales de	conformidad	con	los	términos	3	 fracción	I,	34,	35,	36,	37,	38,	40	y	42 de	la	Ley	de	
                  Protección	de	Datos	Personales	en	Posesión	de	Sujetos	Obligados	para	el	Estado	de	Guanajuato,	
                  contenido	en	el	decreto	número	206,	publicada	en	el	Periódico	Oficial	del	Gobierno		del	Estado	de	
                  Guanajuato el 14	de	julio	del	2017,		da	a	conocer	el	aviso	de	privacidad	correspondiente.</p>
               <p>Mecanismos y medios disponibles para que el Titular de los datos personales pueda manifestar su
                  negativa para el tratamiento de sus datos personales. La protección de sus datos personales es un derecho
                  vinculado a la protección de su privacidad. Ofrece los medios para controlar el uso ajeno y destino de su información
                  personal, con el propósito de impedir su tráfico ilícito y la potencial vulneración de su dignidad. Tiene a su disposición
                  ejercer sus derechos ARCO (Acceso, Rectificación, Cancelación y Oposición), a través de los cuales tiene la facultad
                  de:</p>
                  <ol>
                     <li> Conocer en todo momento quién dispone de sus datos y para qué están siendo utilizados.</li>
                     <li> Personal information including, but limited to, email addresses, telephone numbers.</li>
                     <li> Solicitar la cancelación de los mismos por no ajustarse a las disposiciones aplicables.</li>
                     <li> Oponerse al uso de sus datos si es que los mismos fueron obtenidos sin su consentimiento.</li>
                  </ol>
                  <P>A efecto de garantizar la debida protección de sus datos personales, además de establecer los
                     derechos ARCO, la ley en la materia incluye una serie de principios rectores en el tratamiento de este
                     tipo de datos como son: el de finalidad, calidad, consentimiento, deber de información, seguridad,
                     confidencialidad, disponibilidad y temporalidad. El incumplimiento de estos principios por parte de
                     quienes detentan y/o administran sus datos constituye una vulneración a su protección y tiene como
                     consecuencia una sanción.
                     </P>

                  <P> Mecanismos, medios y procedimientos disponibles para ejercer los derechos ARCO y domicilio de la
                     Unidad de Transparencia. La Unidad de Transparencia del Poder Ejecutivo del Estado de Guanajuato, es la unidad
                     administrativa responsable del sistema de datos personales; y el lugar en donde el interesado podrá ejercer sus
                     derechos de acceso, rectificación, cancelación y oposición al tratamiento de datos personales (ARCO); se encuentran
                     ubicadas en San Sebastián número 78, Zona Centro, Guanajuato, Guanajuato. C.P. 36000. con los teléfonos 473 73
                     51 500 ext. 2272, en un horario de lunes a viernes de 08:30 a 16:00 hrs., o bien a través de la dirección electrónica
                     unidadtransparencia @guanajuato.gob.mx.</P>
                     <p>El	aviso	de	privacidad,	y	cualquier	modificación	al mismo	podrá	ser	consultado	en	el	siguiente	link:	
                        http://www.utsoe.edu.mx o	a	través	de	cualquier	otro	medio	que	difunda	la	universidad.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<footer class="section-sm pb-0 border-top border-default">
   <div class="container">
      <div class="row justify-content-between">
         <div class="col-md-3 mb-4">
            <a class="mb-4 d-block" href="index-full.php">
               <img class="img-fluid" width="150px" src="assets/img/logo.png" alt="LogBook">
            </a>
            <p>La Universidad Tecnológica del Suroeste de Guanajuato, es un proyecto que surgió como una estrategia para ampliar la cobertura de servicios educativos a nivel superior, en la región suroeste del estado.</p>
         </div>
         <div class="col-lg-2 col-md-3 col-6 mb-4">
            <h6 class="mb-4">Enlace rápido</h6>
            <ul class="list-unstyled footer-list">
               <li><a href="privacy-policy.php">AVISO DE PRIVACIDAD</a></li>
            </ul>
         </div>
         <div class="col-lg-2 col-md-3 col-6 mb-4">
            <h6 class="mb-4">Vínculos sociales</h6>
            <ul class="list-unstyled footer-list">
               <li><a href="https://www.facebook.com/UTSOE/">Facebook</a></li>
           <li><a href="http://www.utsoe.edu.mx/historia.html">Sitio utsoe_oficial</a></li>
               <li><a href="https://www.instagram.com/utsoe_oficial/">Instagram</a></li>
            </ul>
         </div>
      </div>
      <div class="scroll-top">
         <a href="javascript:void(0);" id="scrollTop"><i class="ti-angle-up"></i></a>
      </div>
      <div class="text-center">
         <p class="content">&copy; 2022 - Design &amp; Develop By <a href="https://www.facebook.com/diego.gervacio.169/" target="_blank">DEGN</a></p>
      </div>
   </div>
</footer>
   <!-- JS Plugins -->
   <script src="plugins/jQuery/jquery.min.js"></script>
   <script src="plugins/bootstrap/bootstrap.min.js" async></script>
   <script src="plugins/slick/slick.min.js"></script>
   <!-- Main Script -->
   <script src="assets/js/script.js"></script>
</body>
</html>