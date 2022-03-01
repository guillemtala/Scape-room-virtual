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
    if (!($_SESSION["index"]=='check')) {
        header("Location: ../index.php");
    }
    ?>
    <div id="escape-room">

    </div>
    <div class="column-100 row">
        <div class="column-10">

        </div>
        <!-- Bloque del medio donde va toda la informacion -->
        <div class="column-80">
            <div class="flex gallery">
                <img src="../img/icono.png" alt="imagen cara hacker">
            </div>
            <div class="header flex">
                <h1>RETO 1</h1>
            </div> 
            <div class="text padding-laterales">
                <h2>El primer reto que te pongo es descifrar una serie de letras de un lenguaje creado por mi, lo tienes que pasar al abecedario de letras y tienes que adivinar la palabra oculta  , abajo os dejamos el abecedario de signos diseñado por mi y seguidamente las posiciones de las letras del abecedario </h2>
            </div>
            <div class="text padding-laterales">
                <div class="flex gallery2">
                    <img src="../img/imagen-reto1.png" alt="Imagen del reto 1 ">
                </div>
                <div class="flex">
                    <h2>Texto a descifrar</h2>
                </div>
                
                <div class="flex gallery2">
                    <img src="../img/imagen-respuesta1.png" alt="Imagen del reto 1 ">
                </div>
            </div>
            <div class="padding-laterales">
                <form action="../proc/rec.proc.php" method="post">
                    <br>
                    <br>
                    <div class="text flex">
                        <input type="text" name="respuesta1" class="insertar1" placeholder="Pon la respuesta aqui..."> 
                    </div>
                    <br>
                    <br>
                    <div class="flex">
                        <input type="submit" class="boton1" name="boton1" value="Enviar respuesta">
                    </div>
                    
                    <br>
                    <br>

                    <div class="flex">
                        <button class="pista" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}" title="Click to show/hide"  type="button">Aqui tienes una pista </button>
                    </div>
                    <div class="flex text2" id="spoiler" style="display: none;">
                    <div class="gallery2">
                        <img src="../img/pista1.png" alt="">
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