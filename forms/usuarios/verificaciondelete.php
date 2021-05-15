<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scañe=1.0">
    <title>Verificacion</title>
    <link rel="stylesheet" href="css/verificacion.css">
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



    <h1 class="title">Busqueda...</h1>

    <div class="container">

        <div class="card">

            <form action="validar3.php" method="POST">

                < <table border="0" align="center" cellspacing="40px">

                    <tr>

                        <td height="40px" width="400px">

                            <label for="dpi">Ingrese el DPI del usuario que desea eliminar</label>

                            <input type="text" name="dpi" autofocus="autofocus" required="required" maxlength="50" minlength="4" placeholder="Escribe el DPI del usuario" />

                        </td>

                    </tr>



                    </table>

                    <button class="animated-border-button">Buscar</button>


            </form>


        </div>


    </div>
    <br /><br /><br /><br /><br /><br /><br />

</body>

</html>