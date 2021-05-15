<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preload" href="css/normalize.css" as="styles">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="preload" href="css/login.css" as="styles">
    <link rel="stylesheet" href="css/login.css">



</head>

<body>
    <form action="validar.php" method="POST">
        <p>
            <h1> Bienvenido</h1>
        </p>
        <p>
            <input type="text" name="nombre" autofocus="autofocus" required="required" maxlength="50" 
                placeholder="Usuario" />
        </p>

        </br>
        <p>
            <input type="password" name="contrasenia" autofocus="autofocus" required="required" maxlength="15" 
            placeholder="Contraseña" />

        </p>
        <p>
        </br> </br></br> 
            <input type="submit" value="Iniciar Sesion" />
        </p>
        <p>
        </br> </br></br> 
            No tienes un usuario? <a href="forms/usuarios/new.php" style="color:white"> Registrate!</a>
        </p>

    </form>

    
    
</body>

</html>