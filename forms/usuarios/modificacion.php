<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modificacion</title>
    <link rel="stylesheet" href="css/new.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


</head>

<body>

    <nav class="hover-nav">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Soporte tecnico</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>



    <h1 class="title">Ingrese los nuevos datos</h1>

    <div class="container">

        <div class="card">

            <form action="../../api/usuarios/modificarusuarios.php" method="POST">

                <table border="0" align="center" cellspacing="40px">

                    <tr>
                        <td height="40px" width="400px">
                            <label for="IDdepartamento">Nuevo nombre del usuario</label>
                            <input type="text" name="nuevonombre" autofocus="autofocus" required="required" maxlength="50" placeholder="Escribe el nombre del usuario" />
                        </td>

                        <td height="40px" width="400px">
                            <label for="nombre">Nuevo DPI del usuario</label>
                            <input type="text" name="nuevodpi" autofocus="autofocus" required="required" maxlength="50" placeholder="Escribe el DPI del usuario" />
                        </td>
                    </tr>

                    <tr>
                        <td height="40px" width="400px">
                            <label for="DPI">Nuevo puesto</label>
                            <input type="text" name="nuevopuesto" autofocus="autofocus" required="required" maxlength="50" placeholder="Escribe el puesto" />
                        </td>
                        
                        <td height="40px" width="400px">
                            <label for="linea">Nueva contraseña Contraseña</label>
                            <input type="text" name="nuevacontrasenia" autofocus="autofocus" required="required" maxlength="50"  placeholder="Escribe una contraseña" />
                        </td>
                    </tr>
                </table>

                <button class="animated-border-button">Guardar Datos</button>
            </form>
        </div>


    </div>
    <br /><br /><br /><br /><br /><br /><br />

</body>

</html>