<style>
h1{
    color:blue;
}

h2{
    color:red;
}

</style>



<?php

$recibirDatosp1 = $_POST['r1p1'];
$recibirDatosp2 = $_POST['r2p2'];
$recibirDatosp3 = $_POST['r3p3'];

$mensaje = "";
$puntos = 0;

if(isset($_POST['btnEnviar'])){
    if($recibirDatosp1=="V"){
        $puntos = $puntos + 5;
    }

    if($recibirDatosp2=="V"){
        $puntos = $puntos + 5;
    }

    if($recibirDatosp3=="F"){
        $puntos = $puntos + 5;
    }

    if($puntos==5){
        echo "Por favor lee más";
    }else if($puntos==10){
        echo "Bien, pero puedes mejorar";
    }else if($puntos==15){
        echo "Excelente, lo hiciste bien";
    }

echo "<h1>Tu puntuación alcanzada hasta el momento es $puntos</h1>";
echo "<h2>Las respuestas correctas son: </h2>";
echo "<h2>Pregunta 1: V</h2>";
echo "<h2>Pregunta 2: V</h2>";
echo "<h2>Pregunta 3: F</h2>";
}
?>