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
    if (!($_SESSION["reto5"]=='check')) {
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
            <div class="header flex">
                <h1>RETO 6</h1>
            </div>
            <div class="text padding-laterales">
                <h2>Enhorabuena has acertado el quinto reto!! , seguidamente se muestra abajo el desafio 
                    Tengo tu codigo y para encontrarlo solo tendras que buscarlo. Es asi de sencillo, solamente tendreis que buscar el # correcto.
                </h2>
            </div>
            <div class="flex header">
                    <h1>ALT+3=#</h1>
                </div>
            <div class="padding-laterales">
                <form action="../proc/rec.proc.php" method="post">
                    <br>
                    <br>
                    <div class="text flex">
                        <input type="text" name="respuesta6" class="insertar1" placeholder="Pon la respuesta aqui..."> 
                    </div>
                    <br>
                    <br>
                    <div class="flex">
                        <input type="submit" class="boton1" name="boton6" value="Enviar respuesta">
                    </div>
                    
                    <br>
                    <br>

                    <div class="flex">
                        <button class="pista" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}" title="Click to show/hide"  type="button">Aqui tienes una pista </button>
                    </div>
                    <div class="flex text2" id="spoiler" style="display: none;">
                    <div class="text">
                        <h2>Buscalo en internet. La respuesta esta en la URL despues del primer ALT hasta el signo "&" sin inculirlo y eliminando todos los "%" que hay en medio. La respuesta es en mayúsculas y todo junto.</h2>
                    </div>
                        
                    </div>


                </form>
            </div>
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