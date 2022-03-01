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
    if (!($_SESSION["reto7"]=='check')) {
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
                <h1>RETO 8</h1>
            </div>
            <div class="text padding-laterales">
                <h2>Enhorabuena has acertado el septimo reto!!, Va quedando poco ya para acabar.
                    Finalmente tendras que ordenar cada letra para formar estas frases y te dare la entrega de tu trabajo.
                </h2>
            </div>
            <div class="flex">
                <div class="text8">
                    <h2>ripco edim uqu es tiense</h2>
                    <h2>ernet ut saca ne nálleroC</h2>
                    <h2>et ujor equ euqnua esnap sol ñaso</h2>
                    <h2>nuacn son movas a dilvora</h2>
                    <h2>et masorti ráSria</h2>
                    <h2>sisetufi a al ñantamo</h2>
                    <h2>y séupdes et moschae ueraf ed atresnu dicadu</h2>
                    <h2>sabjaet ed niosivid rapa rodep res naopmec</h2>
                    <h2>somerazer rop ut asednoicapir</h2>
            </div>
            </div>
            
            <div class="padding-laterales">
                <form action="../proc/rec.proc.php" method="post">
                    <br>
                    <br>
                    <div class="text flex">
                        <input type="text" name="respuesta8" class="insertar1" placeholder="Pon la respuesta aqui..."> 
                    </div>
                    <br>
                    <br>
                    <div class="flex">
                        <input type="submit" class="boton1" name="boton8" value="Enviar respuesta">
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
                        <img src="../img/liga.png" alt="liga">
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