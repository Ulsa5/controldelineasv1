<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modificacion</title>
    <link rel="stylesheet" href="css/New.css">
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



    <h1 class="title">Nuevo Departamento</h1>

    <div class="container">

        <div class="card">

            <form action="coneccion.php" method="post">

                < <table border="0" align="center" cellspacing="40px">

                    <tr>

                        <td height="40px" width="400px">
                            <label for="IDdepartamento">ID Departamento</label>
                            <input type="text" name="IDdepartamento" autofocus="autofocus" required="required" maxlength="50" minlength="4" placeholder="Escribe el ID" />

                        </td>

                        <td height="40px" width="400px">

                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" autofocus="autofocus" required="required" maxlength="50" minlength="4" placeholder="Escribe el nombre" />

                        </td>

                    </tr>

                    <tr>

                        <td height="40px" width="400px">
                            <label for="DPI">DPI</label>
                            <input type="text" name="DPI" autofocus="autofocus" required="required" maxlength="50" minlength="4" placeholder="Escribe el DPI" />

                        </td>



                        <td height="40px" width="400px">

                            <label for="linea">Numero de linea</label>
                            <input type="text" name="linea" autofocus="autofocus" required="required" maxlength="50" minlength="4" placeholder="Escribe el numero de linea" />


                        </td>

                    </tr>


                    <tr>

                        <td colspan="2">

                            <label for="IMEI">IMEI</label>
                            <input type="text" name="IMEI" autofocus="autofocus" required="required" maxlength="50" minlength="4" placeholder="Escribe el IMEI" />


                        </td>
                        <td></td>

                    </tr>


                    </table>

                    <button class="animated-border-button">Guardar Datos</button>


            </form>


        </div>


    </div>
    <br /><br /><br /><br /><br /><br /><br />

</body>

</html>