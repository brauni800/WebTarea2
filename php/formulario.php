<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == '') {
        echo '<label>No tiene autorización de acceder a esta página</label>';
        die();
    }
?>

<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=".././css/formularioStyle.css">
    <script type="text/javascript" src=".././js/formularioScript.js"></script>
</head>

<body>
    <div id="header">
        <h1>Mantenimiento de clientes</h1>
        <?php
            echo '<label>Usuario ' . $_SESSION['usuario'] . ' favor de llenar el formulario correctamente</label>';
        ?>
    </div>
    <form id="personal" name="personal" action=".././php/info.php" method="POST" onsubmit="return validar()">
        <fieldset class="identificacion">
            <legend>Datos identificativos</legend>
            <div>
                <label>Nombre:</label>
                <input id="name" name="name" type="text">
            </div>
            <div>
                <label>Apellidos:</label>
                <input id="lastName" name="lastName" type="text">
            </div>
            <div>
                <label>Dirección:</label>
                <input id="address" name="address" type="text">
            </div>
            <div>
                <label>Ciudad:</label>
                <input id="city" name="city" type="text">
            </div>
            <br>
            <br>
            <br>
            <div>
                <label>Banco:</label>
                <input id="bank" name="bank" type="text" onkeyup="validarBancoCuenta()">
            </div>
            <div>
                <label>Agencia:</label>
                <input id="agency" name="agency" type="text">
            </div>
            <div>
                <label>Cuenta:</label>
                <input id="account" name="account" type="text" onkeyup="validarBancoCuenta()">
            </div>
        </fieldset>

        <fieldset class="pago">
            <legend>Tipo de pago</legend>
            <div>
                <input id="contado" name="radio_tipo" type="radio" value="contado" onclick="menos30dias()">
                <label>Contado</label>
            </div>
            <div>
                <input id="credito" name="radio_tipo" type="radio" value="credito" onclick="menos30dias()" disabled>
                <label>Crédito</label>
                <label id="advertencia1">[Disponible en cuentas de Bancos participantes]</label>
            </div>
            <div>
                <input id="apartado" name="radio_tipo" type="radio" value="apartado" onclick="menos30dias()">
                <label>Apartado</label>
            </div>
        </fieldset>

        <fieldset class="pago">
            <legend>Forma de pago</legend>
            <div>
                <input id="dias15" name="check_forma" type="checkbox" value="15" onclick="validarFormaPagoDia15()">
                <label>15 días</label>
            </div>
            <div>
                <input id="dias30" name="check_forma" type="checkbox" value="30" onclick="validarFormaPagoDia30()">
                <label>30 días</label>
            </div>
            <div>
                <input id="dias60" name="check_forma" type="checkbox" value="60" onclick="validarFormaPagoDia60()">
                <label>60 días</label>
                <label id="advertencia2">[No disponible a crédito]</label>
            </div>
            <div>
                <input id="dias90" name="check_forma" type="checkbox" value="90" onclick="validarFormaPagoDia90()">
                <label>90 días</label>
                <label id="advertencia3">[No disponible a crédito]</label>
            </div>
        </fieldset>
        <input id="send" name="send" value="Enviar" type="submit">
        <input id="reset" name="reset" value="Reiniciar" type="button" onclick="reiniciar()">
        <input id="close" name="close" value="Cerrar Sesión" type="button" onclick="cerrarSesion()">
    </form>
</body>

</html>
