<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./img/icono.png" type="image/x-icon">
    <title>Escape room</title>
</head>
<body>

    <div id="escape-room">

    </div>
    <div class="column-100 row">
        <div class="column-10">

        </div>
        <!-- Bloque del medio donde va toda la infromacion -->
        <div class="column-80">
            <div class="flex gallery">
                <img src="./img/icono.png" alt="imagen cara hacker">
            </div>
            <div class="header flex">
                <h1>EL HACKER</h1>
            </div>
            <div class="text padding-laterales">
                <h2>Estás en casa haciendo el trabajo importante del curso, si no lo entregas no podrás conseguir el titulo de la carrera universitaria. Se entrega dentro de una hora y solo te falta enviarlo, has estado toda la tarde haciendo el trabajo y has decidido tomar un descanso para mirar Tik Tok, dejando el ordenador encendido con el trabajo abierto. De repente te acuerdas que tienes que entregar el trabajo, te levantas del sofá y cuando te diriges al ordenador te encuentras la siguiente pantalla:</h2>
                <div class="flex gallery1">
                    <img src="./img/pantalla.png" alt="">
                </div>
                <h2> Te  han hackeado el ordenador y quitado todos los archivos, incluyendo el trabajo. Para recuperarlo, tendrás que jugar al juego que te propone el hacker. Se trata de una serie de pruebas que tendrás que realizar antes de que acabe la fecha de entrega del trabajo, es decir como máximo tendrás una hora.
                MUCHA SUERTE!!!😎</h2>
                
            </div>
            <div class="padding-laterales">
                <form action="./proc/rec.proc.php" method="post">
                    <br>
                    <br>
                    <div class="text">
                        <input type="text" name="nombre" class="insertar" placeholder="Inserte tu nombre aqui..."> 
                    </div>
                    <br>
                    <br>
                    <input type="submit" class="boton" name="boton" value="Jugar para recuperar los archivos">
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
    <!-- <div class="unos">
            <div class="uno"><img src="img/1.png" alt=""></div>
            <div class="uno"><img src="img/1.png" alt=""></div>
            <div class="uno"><img src="img/1.png" alt=""></div>
            <div class="uno"><img src="img/1.png" alt=""></div>
            <div class="uno"><img src="img/1.png" alt=""></div>
            <div class="uno"><img src="img/1.png" alt=""></div>
            <div class="uno"><img src="img/1.png" alt=""></div>
            <div class="uno"><img src="img/1.png" alt=""></div>
            <div class="uno"><img src="img/1.png" alt=""></div>
            <div class="uno"><img src="img/1.png" alt=""></div>
            <div class="uno"><img src="img/1.png" alt=""></div>
    </div> -->
</body>
</html>