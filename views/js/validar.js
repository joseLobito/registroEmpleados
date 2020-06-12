var nombre = document.getElementById("nombre");
var apellido = document.getElementById("apellido");
var email = document.getElementById("email");
var puesto = document.getElementById("puesto");
var salario = document.getElementById("salario");

function validarFomulario() {
  if (nombre.value === null || nombre.value === "") {
    alert("Ingrese su nombre");
    nombre.focus();
    return false;
  }
  if (apellido.value === null || apellido.value === "") {
    alert("Ingrese su apellido");
    apellido.focus();
    return false;
  }
  if (email.value === null || email.value === "") {
    alert("Ingrese su email");
    email.focus();
    return false;
  }
  if (puesto.value === null || puesto.value === "") {
    alert("ingrese su puesto");
    puesto.focus();
    return false;
  }
  if (salario.value === null || salario.value === "") {
    alert("ingrese su salario");
    salario.focus();
    return false;
  }
}
