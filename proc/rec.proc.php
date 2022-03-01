<?php
// $nombre=$_POST['nombre'];
// $boton=$_POST['boton'];
/* Index a reto 1 */
if (isset($_POST['boton']) && ($_POST['nombre'])){
    session_start();
    $_SESSION['index']='check';
    header('Location: ../retos/reto1.php');
    
} else if (isset($_POST['boton'])){
    //echo "<script>alert('Tienes que poner un nombre para continuar')</script>"; 
    echo '<script type="text/javascript">alert("Tienes que poner un nombre para continuar");window.location.assign("../index.php");</script>';  
}  
/* Reto 1 a reto 2 */
if (isset($_POST['boton1']) && strtolower($_POST['respuesta1'])=="fernando alonso"){
    session_start();
    $_SESSION['reto1']='check';
    header('Location: ../retos/reto2.php');

}else if (isset($_POST['boton1'])){
    //echo "<script>alert('Tienes que poner un nombre para continuar')</script>"; 
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("../retos/reto1.php");</script>';  
}  
/* Reto 2 a reto 3 */
if (isset($_POST['boton2']) && strtolower($_POST['respuesta2'])=="16"){
    session_start();
    $_SESSION['reto2']='check';

    header('Location: ../retos/reto3.php');
}else if (isset($_POST['boton2'])){
    //echo "<script>alert('Tienes que poner un nombre para continuar')</script>"; 
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("../retos/reto2.php");</script>';  
}  
/* Reto 3 a reto 4 */
if (isset($_POST['boton3']) && strtolower($_POST['respuesta3'])=="messi"){
    session_start();
    $_SESSION['reto3']='check';
    header('Location: ../retos/reto4.php');
}else if (isset($_POST['boton4'])){
    //echo "<script>alert('Tienes que poner un nombre para continuar')</script>"; 
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("../retos/reto3.php");</script>';  
}  

/* Reto 4 a reto 5 */
if (isset($_POST['boton4']) && strtolower($_POST['respuesta4'])=="pikachu"){
    session_start();
    $_SESSION['reto4']='check';
    header('Location: ../retos/reto5.php');
}else if (isset($_POST['boton4'])){
    //echo "<script>alert('Tienes que poner un nombre para continuar')</script>"; 
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("../retos/reto4.php");</script>';  
}  
/* Reto 5 a reto 6 */
if (isset($_POST['boton5']) && strtolower($_POST['respuesta5'])=="mantequilla"){
    session_start();
    $_SESSION['reto5']='check';
    header('Location: ../retos/reto6.php');
}else if (isset($_POST['boton5'])){
    //echo "<script>alert('Tienes que poner un nombre para continuar')</script>"; 
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("../retos/reto5.php");</script>';  
}  
    
/* Reto 6 a reto 7  */
if (isset($_POST['boton6']) && ($_POST['respuesta6'])=="2B33D23"){
    session_start();
    $_SESSION['reto6']='check';
    header('Location: ../retos/reto7.php');

}else if (isset($_POST['boton6'])){
    //echo "<script>alert('Tienes que poner un nombre para continuar')</script>"; 
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("../retos/reto6.php");</script>';  
}


/* Reto 7 a Reto 8  */
if (isset($_POST['boton7']) && strtolower($_POST['respuesta7'])=="40"){
    session_start();
    $_SESSION['reto7']='check';
    header('Location: ../retos/reto8.php');


}else if (isset($_POST['boton7'])){
    //echo "<script>alert('Tienes que poner un nombre para continuar')</script>"; 
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("../retos/reto7.php");</script>';  
}


/* Reto 8 a congratulations  */
if (isset($_POST['boton8']) && strtolower($_POST['respuesta8'])=="perico dime que se siente tener tu casa en cornellá te juro que aunque pasen los años nunca nos vamos a olvidar te tiramos sarriá fuisteis a la montaña y después te echamos fuera de nuestra ciudad bajaste de división para poder ser campeón rezaremos por tu desaparición"){
    session_start();
    $_SESSION['reto8']='check';
    header('Location: ../retos/congratulations.php');
}else if (isset($_POST['boton8'])){
    //echo "<script>alert('Tienes que poner un nombre para continuar')</script>"; 
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("../retos/reto8.php");</script>';  

}

/* Congratulations a Inicio */
if (isset($_POST['boton9'])){
    session_start();
    $_SESSION['ultima']='check';
    header('Location: ./replay.proc.php');
}

