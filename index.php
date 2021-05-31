<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivia Cultura General 1DB</title>
    <link REL="styleSheet" href="css/estilos.css" tyoe="text/css">
</head>

<body>
    <h2 style="color:white;">Bienvenido a la trivia de Cultura General de 1DB</h2>

    <div>
        <form action="procesarRespuestas.php" method="post">
            <p><strong>1. ¿El río Amazonas es el río más largo del planeta?</strong></p>
            <p><input type="radio" name="r1p1" value="V">Verdadero</p>
            <p><input type="radio" name="r1p1" value="F">Falso</p>

            <p>2. ¿Italia es el país que tiene forma de bota?</p>
            <p><input type="radio" name="r2p2" value="V">Verdadero</p>
            <p><input type="radio" name="r2p2" value="F">Falso</p>

            <p>3. ¿Fueron los cerillos inventados antes que el encendedor?</p>
            <p><input type="radio" name="r3p3" value="V">Verdadero</p>
            <p><input type="radio" name="r3p3" value="F">Falso</p>

            <p><input type="submit" name="btnEnviar" value="Enviar mis respuestas">

        </form>
    </div>
</body>

</html>