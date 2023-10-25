<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Persona</title>
    <script>
        function regresar(){
            document.form.action = "../controlador/PersonaControlador.php";
            document.form.method = "GET";
            document.form.op.value = "2";
            document.form.submit();
        }
        function grabar(){
            document.form.action= "../controlador/PersonaControlador.php";
            document.form.method= "GET";
            document.form.op.value="S";
            document.form.submit();
        }
    </script>
</head>
<body>
    <center>
    <div class="container">
        <form name="form">
            <table>
                <tr>
                    <td>Codigo:</td>
                    <td><input type="text" name="txtcod"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="txtnom"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="txtape"></td>
                </tr>
            </table>
            <div class="button-container">
                <input type="hidden" name="op">
                <button onclick="grabar()">Grabar</button>
                <button onclick="regresar()">Regresar</button>
            </div>
            <?php
            if (isset($_SESSION['estado'])){
                $estado= $_SESSION['estado'];
                if ($estado==1){
                    echo("Registro Insertado Correctamente");
                } else {
                    echo("Registro no Insertado");
                }
            }
            ?>
        </form>
    </div>
    </center>
</body>
</html>