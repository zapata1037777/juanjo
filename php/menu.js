function vali() {

    var nombreusuariosolicitado = document.getElementById("nombreusuariosolicitado").value;
    var Maiusuariosolicitado = document.getElementById("Maiusuariosolicitado").value;
    var Ndocumento = document.getElementById("Ndocumento").value;
    var Contrausuariosolicitado = document.getElementById("Contrausuariosolicitado").value;



    if (nombreusuariosolicitado == length || !isNaN(nombreusuariosolicitado)) {
        alert("Rellene los campos correctamente");
        return false;
    }

    if (Maiusuariosolicitado == length) {
        alert("Rellene los campos correctamente 2");

        return false;
    }

    if (Ndocumento == length) {
        alert("Rellene los campos correctamente 3");
        return false;
    }

    if (isNaN(Ndocumento)) {

        alert("Solo se aceptan números en el campo de documento");
        return false;
    }

    if (Contrausuariosolicitado == length) {
        alert("Rellene los campos correctamente 4");
        return false;
    }

    if (! /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(Maiusuariosolicitado)) {
        alert("Correo no valido");
        return false;
    }
}