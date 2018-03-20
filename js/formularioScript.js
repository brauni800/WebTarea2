/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function resetDatosPersonales() {
    document.personal.name.value = '';
    document.personal.lastName.value = '';
    document.personal.address.value = '';
    document.personal.city.value = '';
    document.personal.bank.value = '';
    document.personal.agency.value = '';
    document.personal.account.value = '';
}

function resetTipoPago() {
    document.personal.contado.checked = false;
    document.personal.credito.checked = false;
    document.personal.apartado.checked = false;
}

function resetFormaPago() {
    document.personal.dias15.checked = false;
    document.personal.dias30.checked = false;
    document.personal.dias60.checked = false;
    document.personal.dias90.checked = false;
}

function reiniciar() {
    resetDatosPersonales();
    resetTipoPago();
    resetFormaPago();
    document.getElementById("name").focus();
}

function validar() {
    var name = document.getElementById("name");
    var lastName = document.getElementById("lastName");
    var address = document.getElementById("address");
    var city = document.getElementById("city");
    var bank = document.getElementById("bank");
    var agency = document.getElementById("agency");
    var account = document.getElementById("account");

    var contado = document.getElementById("contado");
    var credito = document.getElementById("credito");
    var apartado = document.getElementById("apartado");

    var dias15 = document.getElementById("dias15");
    var dias30 = document.getElementById("dias30");
    var dias60 = document.getElementById("dias60");
    var dias90 = document.getElementById("dias90");

    if (name.value === '') {
        alert("El campo Nombre está vacio");
        name.focus();
        return false;
    } else if (lastName.value === '') {
        alert("El campo Apellido está vacio");
        lastName.focus();
        return false;
    } else if (address.value === '') {
        alert("El campo Dirección está vacio");
        address.focus();
        return false;
    } else if (city.value === '') {
        alert("El campo Ciudad está vacio");
        city.focus();
        return false;
    } else if (bank.value === '') {
        alert("El campo Banco está vacio");
        bank.focus();
        return false;
    } else if (agency.value === '') {
        alert("El campo Agencia está vacio");
        agency.focus();
        return false;
    } else if (account.value === '') {
        alert("El campo Cuenta está vacio");
        account.focus();
        return false;
    } else if (!contado.checked && !credito.checked && !apartado.checked) {
        alert("Seleccione un tipo de pago");
        contado.focus();
        return false;
    } else if (!dias15.checked && !dias30.checked && !dias60.checked && !dias90.checked) {
        alert("Seleccione una forma de pago");
        dias15.focus();
        return false;
    } else {
        alert("Los datos han sido enviados con éxito");
        return true;
    }
}

function menos30dias() {
    if (document.getElementById("credito").checked) {
        document.getElementById("dias60").disabled = true;
        document.getElementById("dias90").disabled = true;

        document.getElementById("advertencia2").style.display = "inline-block";
        document.getElementById("advertencia3").style.display = "inline-block";
    } else {
        document.getElementById("dias60").disabled = false;
        document.getElementById("dias90").disabled = false;

        document.getElementById("advertencia2").style.display = "none";
        document.getElementById("advertencia3").style.display = "none";

        resetFormaPago();
    }
}

function validarBancoCuenta() {
    var bank = document.getElementById("bank");
    var account = document.getElementById("account");
    if (bank.value == "Bancomer" && account.value == "123456") {
        document.getElementById("credito").disabled = false;

        document.getElementById("advertencia1").style.display = "none";
    } else {
        document.getElementById("credito").disabled = true;

        document.getElementById("advertencia1").style.display = "inline-block";

        resetTipoPago();
        resetFormaPago();
    }
}

function validarFormaPagoDia15() {
    var dias15 = document.getElementById("dias15");
    var dias30 = document.getElementById("dias30");
    var dias60 = document.getElementById("dias60");
    var dias90 = document.getElementById("dias90");
    var credito = document.getElementById("credito");

    if (!credito.checked) {
        if (dias15.checked) {
            dias30.disabled = true;
            dias60.disabled = true;
            dias90.disabled = true;
        } else {
            dias30.disabled = false;
            dias60.disabled = false;
            dias90.disabled = false;
        }
    } else {
        if (dias15.checked) {
            dias30.disabled = true;
        } else {
            dias30.disabled = false;
        }
    }
}

function validarFormaPagoDia30() {
    var dias15 = document.getElementById("dias15");
    var dias30 = document.getElementById("dias30");
    var dias60 = document.getElementById("dias60");
    var dias90 = document.getElementById("dias90");
    var credito = document.getElementById("credito");

    if (!credito.checked) {
        if (dias30.checked) {
            dias15.disabled = true;
            dias60.disabled = true;
            dias90.disabled = true;
        } else {
            dias15.disabled = false;
            dias60.disabled = false;
            dias90.disabled = false;
        }
    } else {
        if (dias30.checked) {
            dias15.disabled = true;
        } else {
            dias15.disabled = false;
        }
    }
}

function validarFormaPagoDia60() {
    var dias15 = document.getElementById("dias15");
    var dias30 = document.getElementById("dias30");
    var dias60 = document.getElementById("dias60");
    var dias90 = document.getElementById("dias90");
    var credito = document.getElementById("credito");

    if (dias60.checked) {
        dias15.disabled = true;
        dias30.disabled = true;
        dias90.disabled = true;
    } else {
        dias15.disabled = false;
        dias30.disabled = false;
        dias90.disabled = false;
    }
}

function validarFormaPagoDia90() {
    var dias15 = document.getElementById("dias15");
    var dias30 = document.getElementById("dias30");
    var dias60 = document.getElementById("dias60");
    var dias90 = document.getElementById("dias90");
    var credito = document.getElementById("credito");

    if (dias90.checked) {
        dias15.disabled = true;
        dias30.disabled = true;
        dias60.disabled = true;
    } else {
        dias15.disabled = false;
        dias30.disabled = false;
        dias60.disabled = false;
    }
}

function cerrarSesion() {
    window.location.href = ".././php/cerrarSesion.php";
}