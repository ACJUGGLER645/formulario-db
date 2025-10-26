// script.js

const botonesTema = document.querySelectorAll(".color-buttons button");
const body = document.body;
const contadorSpan = document.getElementById("contador");
const formulario = document.getElementById("formulario");

let contador = 0;

// 🔹 Función para actualizar contador
function actualizarContador() {
  contador++;
  contadorSpan.textContent = contador;
}

// 🔹 Cambiar tema
botonesTema.forEach((boton) => {
  boton.addEventListener("click", () => {
    const tema = boton.getAttribute("data-tema");

    // Quita clases anteriores
    body.classList.remove("tema-claro", "tema-oscuro", "tema-morado");

    // Agrega el nuevo tema
    body.classList.add(tema);

    // Suma al contador
    actualizarContador();
  });
});

// 🔹 Validación del formulario
formulario.addEventListener("submit", (e) => {
  e.preventDefault();

  let nombre = document.getElementById("nombre").value.trim();
  let apellido = document.getElementById("apellido").value.trim();
  let celular = document.getElementById("celular").value.trim();
  let correo = document.getElementById("email").value.trim();

  // Validar campos vacíos
  if (!nombre) {
    alert("⚠️ Por favor ingresa tu nombre.");
    return;
  }
  if (!apellido) {
    alert("⚠️ Por favor ingresa tu apellido.");
    return;
  }
  if (!celular) {
    alert("⚠️ Por favor ingresa tu número de celular.");
    return;
  }
  if (!correo) {
    alert("⚠️ Por favor ingresa tu correo electrónico.");
    return;
  }

  // Validar formato de celular (solo 10 dígitos)
  const regexCelular = /^\d{10}$/;
  if (!regexCelular.test(celular)) {
    alert("⚠️ El número de celular debe tener exactamente 10 dígitos.");
    return;
  }

  // Validar formato de correo electrónico
  const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!regexEmail.test(correo)) {
    alert("⚠️ Por favor ingresa un correo electrónico válido.");
    return;
  }

  // Confirmación final antes de enviar
  const ok = confirm(
    "Los datos ingresados son:" +
      "\nNombre: " + nombre +
      "\nApellido: " + apellido +
      "\nCelular: " + celular +
      "\nEmail: " + correo +
      "\n\n¿Son correctos?"
  );

if (ok) {
  alert("✅ ¡Formulario enviado correctamente!");
  formulario.reset(); // Limpia el formulario
} else {
  alert("❌ Envío cancelado.");
}

});
