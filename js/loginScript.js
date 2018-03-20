/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validar() {
    var user = document.getElementById("user");
    var pwd = document.getElementById("pwd");
    if (user.value === '') {
        alert("El campo Usuario no puede estar vacio");
        user.focus();
        return false;
    } else if (pwd.value === '') {
        alert("El campo Contraseña no puede estar vacio");
        pwd.focus();
        return false;
    } else {
        return true;
    }
}

function cancelar() {
    window.close();
}
