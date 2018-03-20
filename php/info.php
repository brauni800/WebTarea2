<!DOCTYPE html>

<?php
    session_start();
    if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == '') {
        echo '<label>No tiene autorización de acceder a esta página</label>';
        die();
    }

    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $address = $_POST["address"];
    $city = $_POST["city"];

    $bank = $_POST["bank"];
    $agency = $_POST["agency"];
    $account = $_POST["account"];

    $radio_tipo = $_POST["radio_tipo"];

    $check_forma = $_POST["check_forma"];
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href=".././css/infoStyle.css" />
    <script type="text/javascript" src=".././js/infoScript.js"></script>
</head>
<body>
    <div class="header">
        <h1>Esto es lo que ingresaste <?php echo $_SESSION['usuario']; ?></h1>
    </div>
    <div class="contenedor">
        <div class="datos_personales">
            <div class="widthFull">
                <div class="lblIzq">
                    <label>Nombre: </label>
                </div>
                <div class="lblDer">
                    <?php echo '<label>' . $name . '</label>'; ?>
                </div>
            </div>
            <div class="widthFull">
                <div class="lblIzq">
                    <label>Apellido: </label>
                </div>
                <div class="lblDer">
                    <?php echo '<label>' . $lastName . '</label>'; ?>
                </div>
            </div>
            <div class="widthFull">
                <div class="lblIzq">
                    <label>Dirección: </label>
                </div>
                <div class="lblDer">
                    <?php echo '<label>' . $address . '</label>'; ?>
                </div>
            </div>
            <div class="widthFull">
                <div class="lblIzq">
                    <label>Ciudad: </label>
                </div>
                <div class="lblDer">
                    <?php echo '<label>' . $city . '</label>'; ?>
                </div>
            </div>
        </div>
        <div class="datos_bancarios">
            <div class="widthFull">
                <div class="lblIzq">
                    <label>Banco: </label>
                </div>
                <div class="lblDer">
                    <?php echo '<label>' . $bank . '</label>'; ?>
                </div>
            </div>
            <div class="widthFull">
                <div class="lblIzq">
                    <label>Agencia: </label>
                </div>
                <div class="lblDer">
                    <?php echo '<label>' . $agency . '</label>'; ?>
                </div>
            </div>
            <div class="widthFull">
                <div class="lblIzq">
                    <label>Cuenta: </label>
                </div>
                <div class="lblDer">
                    <?php echo '<label>' . $account . '</label>'; ?>
                </div>
            </div>
        </div>
        <div class="pago">
            <div class="widthFull">
                <div class="lblIzq">
                    <label>Tipo de pago: </label>
                </div>
                <div class="lblDer">
                    <?php echo '<label>' . $radio_tipo . '</label>'; ?>
                </div>
            </div>
            <div class="widthFull">
                <div class="lblIzq">
                    <label>Forma de pago: </label>
                </div>
                <div class="lblDer">
                    <?php echo '<label>' . $check_forma . ' meses</label>'; ?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div>
            <input id="close" name="close" value="Cerrar Sesión" type="button" onclick="cerrarSesion()">
        </div>
    </div>
</body>
</html>
