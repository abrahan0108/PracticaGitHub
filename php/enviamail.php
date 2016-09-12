<!DOCTYPE HTML>
<html>
	<head manifest="/manifiesto/manifiesto.cache">
		<title>DacapoalCoda tienda de musica</title>
		<meta name="description"
		content= "DacapoalCoda tienda de musica"/>
		<meta name="keywords" content="tienda, pagina,DacapoalCoda,
		venta, musica">
		<link rel=stylesheet href="../css/estilo.css" type="text/css"/>
	</head>
	<body>
		<div id="cajaheader">
		</div>
		<div id="principal" itempscope itemtype ="http://schema.org/Person">
			<header>
				<div id="logo">
				
				<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   version="1.1"
   id="svg2"
   viewBox="0 0 100 100"
   height="100"
   width="100">
  <defs
     id="defs4" />
  <metadata
     id="metadata7">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     transform="translate(0,-952.36216)"
     id="layer1">
    <g
       transform="matrix(0.1767608,0,0,0.1767608,5.4937866,860.3918)"
       id="g4137">
      <ellipse
         style="fill:#000000;fill-rule:evenodd;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
         id="path3336"
         cx="260.71426"
         cy="797.36218"
         rx="169.28572"
         ry="182.14285" />
      <ellipse
         style="fill:#ffffff;fill-rule:evenodd;stroke:#000000;stroke-width:1.15997136px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
         id="path3338"
         cx="258.57141"
         cy="797.36218"
         rx="124.20573"
         ry="163.49144" />
      <path
         style="fill:#ff0000;fill-rule:evenodd;stroke:#ff0000;stroke-width:10;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
         d="m 255.71428,560.93364 5.71429,481.42856"
         id="path4142" />
      <path
         style="fill:none;fill-rule:evenodd;stroke:#fb0000;stroke-width:10;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
         d="m 54.285711,796.64792 409.999999,0"
         id="path4144" />
    </g>
  </g>
</svg>

				
				
				</div>
				<h1><span itempprop="name">DacapoalCoda<br/></span></h1>
				<h2><span itempprop="jobTitle">Tienda de musica</span></h2>
				<nav>
					<ul>
						<li><a href="../index.html"><canvas id="iconoinicio" width="50" height="50"></canvas><br/>Inicio</a></li>
						<!-- <li><a href="Noticias.html"><canvas id="icononoticias" width="50" height="50"></canvas><br/>Noticias</a></li> -->
						<li><a href="../Historia.html"><canvas id="iconohistoria" width="50" height="50"></canvas><br/>Historia</a></li>
						<!-- <li><a href="Historia.html"><canvas id="iconohistoria" width="50" height="50"></canvas><br/>Historia</a></li> -->
						<li><a href="../Contacto.html"><canvas id="iconocontacto" width="50" height="50"></canvas><br/>Contacto</a></li>
					</ul>
				</nav>
			</header>
			<div id="contenido">
			
			<?php

//Recibo las variables de formulario

				$nombre = $_POST['nombre'];
				$telefono= $_POST['telefono'];
				$correo = $_POST['email'];
				$mensaje = $_POST['mensaje'];
				
				$conexion = mysql_connect("31.170.165.131","u977132376","abrahan");

				if(!$conexion)
				{
					die("No se ha podido conectar por la siguiente razÛn: ".mysql_error());
				}
				
				mysql_select_db("contacto", $conexion);
				mysql_query("INSERT INTO clientes(Nombre, Correo, Telefono, Mensaje) VALUES('$nombre', '$correo', '$telefono', '$mensaje')");
				
				echo $nombre." con el telefono :".$telefono." y correo: ".$correo."ha enviado el siguiente mensaje:<br/>".$mensaje;
				
				$aquien = "cortes.abrahan@yahoo.com.mx";
				$asunto = "Mensaje de Dacapoalcoda";
				$mensajemail = $nombre." con el mail ".$correo." y telÈfono ".$telefono." dejÛ un mensaje que dice: ".$correo;
				
				if(mail($aquien,$asunto,$mensajemail))
				{
					echo "Tu email se ha enviado correctamente";
				}				
				else
				{
					echo "Fallo en el envÌo de email";
				}
				
				
			?>
			
			
			</div>
			<footer>
				<h6>
					<div class="vcard">
						<div><span class="name">DecapoalCoda</span>-<span class="locality">Atizap·n</span>-<span class="region">Estado de MÈxico</span>-<span class="postal-code">52800</span>-<span class="country-name">M√©xico</span></div>
						<div><span class="tel">01800-00000000</span>-<span class="email">ventas@dacapoalcoda.com</span></div>
					</div>
				</h6>
				<script type="text/javascript">
					if(localStorage.pagecount)
						{
							localStorage.pagecount = Number(localStorage.pagecount)+1;
						}
					else
						{
							localStorage.pagecount=1;
						}
						
						document.write("Has visitado DacapoalCoda "+localStorage.pagecount+" veces. <br/>");
				</script>
				<script type="text/javascript">
					if(sessionStorage.pagecount)
					{
						sessionStorage.pagecount = Number(sessionStorage.pagecount)+1;
					}
					else
					{
						sessionStorage.pagecount=1;
					}
					document.write("En esta sesi√≥n has visitado DacapoalCoda: " +sessionStorage.pagecount+"veces.");
					
				</script>
			</footer>
		</div>
	</body>
</html>

<script type="text/javascript">
	var miColor = "purple";
	var otroColor = "Black";
	var tercerColor = "yellow";
	var escala = 0.5;
	
	//Esto es de Contacto
	var c=document.getElementById("iconocontacto");
	var cxt=c.getContext("2d");
	
	cxt.fillStyle=(otroColor);
	cxt.beginPath();
	cxt.arc(escala*50-10,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();
	
	cxt.fillStyle=(otroColor);
	cxt.beginPath();
	cxt.arc(escala*50-10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();
	
	cxt.fillStyle=(miColor);
	cxt.beginPath();
	cxt.arc(escala*50+10,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();
	
	cxt.fillStyle=(miColor);
	cxt.beginPath();
	cxt.arc(escala*50+10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();
	//Esto es de Inicio
	var c=document.getElementById("iconoinicio");
	var cxt=c.getContext("2d");
	
	cxt.fillStyle=(miColor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*40,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();
	
	cxt.fillStyle=(tercerColor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*30,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();
	
	cxt.fillStyle=(miColor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();	
			
	
	//Esto es de historia
	var c=document.getElementById("iconohistoria");
	var cxt=c.getContext("2d");
	
	cxt.fillStyle=(miColor);
	cxt.beginPath();
	cxt.arc(25,37.5,10,0,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();
	
	cxt.strokeStyle=(miColor);
	cxt.beginPath();
	cxt.moveTo(35,37.5);
	cxt.lineTo(35,5);
	
	cxt.stroke();
	
	


</script>
