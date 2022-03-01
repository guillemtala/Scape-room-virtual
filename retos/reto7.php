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
    if (!($_SESSION["reto6"]=='check')) {
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
                <h1>RETO 7</h1>
            </div>
            <div class="text padding-laterales">
                <h2>Enhorabuena has acertado el sexto reto!! Ahora os desarollare el enunciado.
                    El reto que te propongo es mostrar imagen y tienes que contar los animales ,pero hay que fijarse bien!
                </h2>
            </div>
            <div class="flex gallery2">
                <img src="../img/ovejas.jpg" alt="ovejas">
            </div>
            <div class="padding-laterales">
                <form action="../proc/rec.proc.php" method="post">
                    <br>
                    <br>
                    <div class="text flex">
                        <input type="text" name="respuesta7" class="insertar1" placeholder="Pon la respuesta aqui..."> 
                    </div>
                    <br>
                    <br>
                    <div class="flex">
                        <input type="submit" class="boton1" name="boton7" value="Enviar respuesta">
                    </div>
                    
                    <br>
                    <br>



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