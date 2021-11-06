<?php
	//AQUI INICIAMOS LA VARIABLE DE SESIÓN
	session_start();
	//QUITAMOS LOS REPORTES SI USER ES NULL
	error_reporting(0);
	//VERIFICARA SI SE HA INICIADO SESION O ESTAMOS EN MODO VISITA
	
	if($_SESSION['usuario'] == null ){
		//SI USUARIO ES NULL ENTONCES ESTAMOS EN MODO INVITADO POR TANTO ESCONDEMOS CIERTAS FUNCIONES
		$bandera = 0;
		//VARIABLE QUE MOSTRARA QUE ESTAMOS EN MODO INVITADO
		$user = "Usuario: Invitado";
	}else{
		//SI USUARIO ES DIFERENTE A NULL ENTONCES ESTAMOS LISTOS PARA RESERVAR
		$bandera = 1;
		//CONCATENAMOS A LA VARIABLE EL USUARIO QUE INICIO SESION EN LA PLATAFORMA
		$user = "Usuario: ".$_SESSION['usuario'];
		$GLOBALS["usuarioLogin"] = $_SESSION['usuario'];
		
		//PARA PODER AGREGAR MAS USUARIOS HACEMOS UNA CONDICION PARA SABER SI ES ADMIN
		if($_SESSION['usuario'] == 'admin'){
			//SI ES ADMIN NOS APOYAREMOS DE ESTA BANDERA PARA INDICAR 
			$bandera2 = 1;
		}
		//VARIABLE QUE NOS SERVIRA PARA LAS RESERVACIONES
		$varAux = "model/habitaciones.php?id=1&usuarioLogin=".$_SESSION['usuario'];
	}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800" rel="stylesheet">
    <title>REGISTROS PARA UNA CLINICA PRIVADA</title>
</head>

<body>

    <header>
        <nav>
            <div class="logo">
                <img src="img/LOGO2.jpg" alt="">
            </div>

            <div class="icono" id="icono">
                <span>&#9776;</span>
            </div>
            <div class="enlaces uno" id="enlaces">


                <ul class="caja">

                     <li><a href="#" class="active">INSERTAR</a>
                        <ul class="submenu">
							<li><a href="model/formjularioRegistros.php">Insetar Registro</a>
						
                        </ul>
                    </li>
					

                    <li><a href="#">ACTUALIZAR</a>
                        <ul class="submenu">
                            <li><a href="model/formjularioRegistrosUpd.php">Actualizar Registro</a>
                            </ul>
                    </li>

                    <li><a href="#">ELIMINAR</a>
                        <ul class="submenu">
                            <li><a href="model/formjularioRegistrosDlt.php">Eliminar registro</a>
                        </ul>
                    </li>

                    <li><a href="#">VER REGISTROS</a>
                        <ul class="submenu">
                          <li><a href="#">Ver mis Registros</a>
                        </ul>
                   </li>
                </ul>        
            </div>
		
			<div class="logo">
                <a href=""><img src="img/UX.jpg" alt=""></a>
				<div class="logo2">
					<a href="#Contacto">Contactanos</a>
				</div>
            </div>

        </nav>
        <div class="textos">
           <!----- <h1>JULIO CHAPETON GRAJEDA</h1>
            <h2>3090-18-22592 </h2>*/------>
			<div class="cube">
            	<script language="JavaScript1.1">

                var specifyimage=new Array() //Your images
                specifyimage[0]="img/imgMaz/CineItalia.jpg"
                specifyimage[1]="img/imgMaz/costaRica.jpg"
                specifyimage[2]="img/imgMaz/Municipalidad.jpg"
                specifyimage[3]="img/imgMaz/cuartelon.jpg"
                specifyimage[4]="img/imgMaz/parque.jpg"
                specifyimage[5]="img/imgMaz/EstacionTren.jpg"
                specifyimage[6]="img/imgMaz/ParqueAereo.jpg"
                specifyimage[7]="img/imgMaz/SalidaTriangulo.jpg"
                specifyimage[8]="img/imgMaz/Venado.jpg"
                var delay=3000 //3 seconds
                
                 //Counter for array 
                
                var count =1;
                var cubeimage=new Array()
                for (i=0;i<specifyimage.length;i++){
                cubeimage[i]=new Image()
                cubeimage[i].src=specifyimage[i]
                }
                
                function movecube(){
                if (window.createPopup)
                cube.filters[0].apply()
                document.images.cube.src=cubeimage[count].src;
                if (window.createPopup)
                cube.filters[0].play()
                count++;
                if (count==cubeimage.length)
                count=0;
                setTimeout("movecube()",delay)
                }
                
                window.onload=new Function("setTimeout('movecube()',delay)")
                </script><img src="boy4.gif" name="cube" border="0" style="filter:progid:DXImageTransform.Microsoft.Stretch(stretchStyle=&#39;PUSH&#39;)" /> 
			</div>
		</div>

    </header>

		<section class="overlay" id="overlay">
			<div class="contenedor-img">
				<button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
				<img src="" alt="">
			</div>
			<p class="descripcion"></p>
		</section>

    <footer>  
        
        <div class="redes-sociales">
            <div class="contenedor-icono">
                <a href="http://www.twitter.com" target="_blank" class="twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <div class="contenedor-icono">
                <a href="http://www.facebook.com" target="_blank" class="facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
            <div class="contenedor-icono">
                <a href="http://www.youtube.com" target="_blank" class="youtube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
            <div class="contenedor-icono">
                <a href="https://github.com/CRI5T14N/Analisis_II" target="_blank" class="github">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <div class="contenedor-icono">
                <a href="http://www.instagram.com" target="_blank" class="instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
	<script src="js/portafolio.js"></script>
</body>

</html>