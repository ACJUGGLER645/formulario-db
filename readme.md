# 📄 Documentación del Proyecto: Formulario de Contacto con Conexión a Base de Datos

## 🔹 Descripción General
Este proyecto implementa un **formulario web de contacto** que permite registrar datos de usuarios en una base de datos **MySQL**, tanto en entorno local (XAMPP/MAMP) como en un servidor en la nube (**InfinityFree**) -> enlace `https://alejandro-correal.42web.io/index.php?exito=true`.  
El flujo incluye la **validación de campos en JavaScript**, la **confirmación previa de envío** y la **interconexión con una base de datos** mediante PHP.

---

## 🧩 Estructura de Archivos

/ProyectoContacto
│
├── index.html
├── contacto.html
├── conexion.php
├── interconexion.php
├── script.js
├── styles.css
└── README.md

---

## Descripción funcional de los archivos

### 🧩 index.php
Este archivo actúa como el punto de entrada principal del sitio web.  
Contiene la estructura del formulario y la lógica para mostrar un mensaje de éxito cuando los datos se envían correctamente.  

**Funciones principales:**
- Define los campos del formulario: nombre, apellido, celular y correo electrónico.  
- Envía los datos al mismo archivo mediante el método `POST`.  
- Verifica si los datos se enviaron correctamente y muestra una alerta o mensaje de confirmación usando el parámetro `exito=true` en la URL.  

---

### 🎨 estilo.css
Este archivo define la apariencia visual de toda la página.  
Aplica estilos coherentes y modernos al formulario, botones y alertas.

**Funciones principales:**
- Establece colores, márgenes y tamaños de fuente.  
- Define el diseño del formulario y su comportamiento al pasar el cursor sobre los botones.  
- Mejora la experiencia del usuario al hacerlo más legible y atractivo visualmente.

---

### ⚙️ script.js
Este archivo maneja la interacción dinámica con el usuario y la validación de datos antes de enviar el formulario.

**Funciones principales:**
- Escucha el evento `submit` del formulario y previene el envío si hay campos vacíos.  
- Muestra un mensaje claro para indicar qué campo falta diligenciar.  
- Permite mostrar una alerta de éxito cuando el formulario se envía correctamente.  
- Controla la retroalimentación visual y textual del proceso de validación.

---

## Funcionamiento funcional

1. El usuario accede a la página principal (`index.php`), donde visualiza el formulario.  
2. Completa los campos requeridos: nombre, apellido, celular y correo electrónico.  
3. Si intenta enviar el formulario sin llenar todos los campos, el archivo `script.js` muestra un mensaje indicando qué información falta.  
4. Cuando el usuario completa todos los campos y envía el formulario, se recarga la página con el parámetro `?exito=true`.  
5. El sistema muestra una alerta de confirmación que indica que los datos fueron enviados exitosamente.  

---

## Resumen

El sitio web integra correctamente **HTML/PHP**, **CSS** y **JavaScript** para ofrecer una aplicación funcional y visualmente coherente.  
Cada archivo cumple un rol específico:  
- `index.php` gestiona la estructura y la lógica principal.  
- `estilo.css` proporciona la presentación visual.  
- `script.js` añade interactividad y validación de datos.

---

##Evidencia 

(img/prueba.png)

Este diseño modular permite mantener el código organizado, comprensible y fácil de mantener.

