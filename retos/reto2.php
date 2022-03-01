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
    if (!($_SESSION["reto1"]=='check')) {
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
                <h1>RETO 2</h1>
            </div>
            <div class="text padding-laterales">
                <h2>Enhorabuena has acertado el primer reto la verdad que era muy fácil, a continuación te  explicare lo que tienes que hacer ahora:</h2>
                <h2>El segundo reto trata que te doy una serie de números y letras. Tienes que averiguar que función tiene este código 25°07'02.6"N 55°07'59.3"E. Busca una palmera y dime ¿Cuántas hojas tiene?</h2>
            </div>
            <div class="text padding-laterales">
                <div class="flex text1">
                    <h2>25°07'02.6"N 55°07'59.3"E</h2>
                </div>
            </div>
            <div class="padding-laterales">
                <form action="../proc/rec.proc.php" method="post">
                    <br>
                    <br>
                    <div class="text flex">
                        <input type="text" name="respuesta2" class="insertar1" placeholder="Pon la respuesta aqui..."> 
                    </div>
                    <br>
                    <br>
                    <div class="flex">
                        <input type="submit" class="boton1" name="boton2" value="Enviar respuesta">
                    </div>
                    
                    <br>
                    <br>

                    <div class="flex">
                        <button class="pista" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}" title="Click to show/hide"  type="button">Aqui tienes una pista </button>
                    </div>
                    <div class="flex text2" id="spoiler" style="display: none;">
                    <div class="gallery2">
                        <br>
                        <br>
                        <img src="../img/palmera.jpg" alt="dubai">
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