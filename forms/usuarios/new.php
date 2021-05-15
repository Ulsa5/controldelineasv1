<!DOCTYPE html>
<html lang="en">

<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scañe=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/new.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script type="text/javascript" src="../../api/config/javascript.js"></script>
    
    
    

</head>

<body>

    <nav class="hover-nav">
        <ul>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Soporte tecnico</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>



    <h1 class="title">Nuevo Usuario</h1>

    <div class="container">

        <div class="card">
        

            <form action="../../api/usuarios/crearusuarios.php" method="post">


                < <table border="0" align="center" cellspacing="40px">

                    <tr>
                        <td height="40px" width="400px">
                            <label for="nombre">Nombre del usuario</label>
                            <input type="text" name="nombre" autofocus="autofocus" required="required" maxlength="50" placeholder="Escribe el nombre del usuario" />
                        </td>
                        <td height="40px" width="400px">
                            <label for="dpi">DPI del usuario</label>
                            <input type="text" name="dpi" autofocus="autofocus" required="required" maxlength="50" placeholder="Escribe el DPI del usuario" />
                        </td>
                    </tr>

                    <tr>
                        <td height="40px" width="400px">
                            <label for="puesto">Ingrese el puesto del usuario</label>
                            <input type="text" name="puesto" autofocus="autofocus" required="required" maxlength="50" placeholder="Escribe el puesto" />
                        </td>
                        <td height="40px" width="400px">

                            <label for="contrasenia">Contraseña</label>
                            <input type="text" name="contrasenia" autofocus="autofocus" required="required" maxlength="50" placeholder="Escribe una contraseña" />

                        </td>
                    </tr>
                    </table>

                    <button class="animated-border-button">Crear usuario</button>

                    </form>

        </div>

    </div>

</body>

</html>