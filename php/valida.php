<?php
    session_start();

    $cuentas = array(
        array("admin", "1234"),
        array("user1", "5678"),
        array("user2", "1278"),
    );

    $user = $_POST["user"];
    $pwd = $_POST["pwd"];

    $usuario_encontrado = false;

    for ($row = 0; $row < count($cuentas); $row++) {
        if ($user == $cuentas[$row][0] && $pwd == $cuentas[$row][1]) {
            $usuario_encontrado = true;
            $_SESSION['usuario'] = $cuentas[$row][0];
            header("Location: .././php/formulario.php");
        }
    }

    if (!$usuario_encontrado) {
        session_destroy();
        sleep(3);
        header("Location: .././html/login.html");
    }

?>
