<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../img/icono.png" type="image/x-icon">
    <title>Escape room</title>
</head>
<body>
<?php
    session_start();
    if (!($_SESSION["reto8"]=='check')) {
        header("Location: ./reto1.php");
    }
    ?>
    <div id="escape-room">

    </div>
    <div class="column-100 row">
        <div class="column-10">

        </div>
        <!-- Bloque del medio donde va toda la infromacion -->
        <div class="column-80">
            <div class="flex gallery">
                <img src="../img/icono.png" alt="imagen cara hacker">
            </div>
            <div class="header3 flex">
                <h1>CONGRATULATIONS!!!</h1>
            </div>
            <div class="text padding-laterales">
                <h2>Felicidades!! Has completado el Escape Room. Por lo tanto, te devolvere todos tus archivos.</h2>
            </div>
            <div class="flex gallery2">
                <img src="../img/archivos.png" alt="foto de archivos">
            </div>
            <br>
            <br>
            <div align="center">
                <div id="vacio" align="left">
                    <div class="text" id="div_completado">
                        <div class="flex2 text" id="div_barra"></div>
                    </div>
                </div>
                <br>
                <br>
                <div id="div_boton"></div>
            </div>
            <script type='text/javascript'>
// Variables para controlar el inicio y termino de la cuenta
var inicio = false;
var termino = false;
var mediaqueryList = window.matchMedia("(max-width: 600px)");
 
// Variables editables, para personalizar la barra de porcentaje
var tam_barra = 768;	// Tamaño de la barra en pixeles
var seg_barra = 20;		// Segundos de trabajo hasta 100%

if(mediaqueryList.matches) {
    var tam_barra = 250;
}
 
// Se toma la diferencia con respecto el tiempo actual
var date = new Date();
var milisec_barra = seg_barra * 1000;
var milisec_final = date.getTime() + milisec_barra;
 
// Funcion que inicia el proceso
function iniciar_proceso()
{
	// Solo si no a iniciado el proceso se inicia
	if (inicio == false)
	{
		inicio = true;
  		aumenta_barra();
	}
}
 
// Funcion que aumenta el porcentaje de la barra
function aumenta_barra()
{
	// Solo si no a terminado sigue aumentando
	if (termino == false)
	{
		// Se toma el tiempo actual
		var ahora = new Date();
	    milisec_ahora = ahora.getTime();
 
		// Se toma el tiempo restante para llegar a 100%
	    var milisec_restante = Math.ceil((milisec_final - milisec_ahora) / 100);
	    if (milisec_restante < 0)
		{
			milisec_restante = 0;
		}
 
		// Se divide el tiempo restante en horas, minutos y segundos
		var horas = Math.floor(milisec_restante / 36000);
		var minutos = Math.floor(milisec_restante % 36000 / 600);
		var segundos = Math.floor(milisec_restante % 36000 % 600) / 10;
		if ((segundos % 1) == 0)
		{
			segundos = segundos + ".0";
		}
		var salida;
		if (horas > 0)
		{
			var salida = horas + " horas, " + minutos + " minutos y " + segundos + " segundos.";
		}
		else
		{
			if (minutos > 0)
			{
				var salida = minutos + " minuto(s) y " + segundos + " segundos.";
			}
			else
			{
			 	var salida = segundos + " segundos.";
			}
		}
 
		// Se genera el porcentaje a partir del tiempo restante para el 100%
		milisec_restante = Math.floor(milisec_restante) / 10;
	    var porcentaje = Math.floor(((milisec_barra - milisec_restante * 1000) / milisec_barra) * 100);
	    if (porcentaje < 0)
		{
			porcentaje = 1;
		}
 
		// Se verifica si se llego al tiempo final
		if (milisec_final >= milisec_ahora)
		{
			// Si aun no termina solo se muestra el porcentaje
			document.getElementById("div_boton").innerHTML = salida;
			document.getElementById("div_barra").innerHTML ="Devolviendo archivos " + porcentaje + "%";
	    }
		else
		{
			// Si termina se puede continuar mostrando o enviando alguna informacion
			termino = true;
			/*document.forma.submit();*/ // Mandar que termino el trabajo para permitir continuar
			document.getElementById("div_barra").innerHTML = "100% Archivos devueltos";
			document.getElementById("div_boton").innerHTML = "<a href='../index.php' ><input class='boton1' type='submit' name='boton9' value='Volver al inicio'></a>";
		}
      	document.getElementById("div_completado").style.width = (porcentaje / 100) * tam_barra + "px";
		setTimeout("aumenta_barra();", 100);
	}
}
 
// Se inicia el proceso despues de 300 milisegundos, se puede editar
window.setTimeout("iniciar_proceso()", 300);
</script>
        </div>
        <div class="column-10">

        </div>
    </div>
    <div class="column-100 row">
        <br>
        <br>
        <br>
        <br>
        <br>     
    </div>
</body>
</html>