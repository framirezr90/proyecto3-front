var myCarousel = document.querySelector('#doubleCarousel');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000, // Ajusta el intervalo (en milisegundos) para controlar la velocidad del carrusel
        ride: 'carousel'
    });



    /**=================Modo Oscuro=============================== */

    document.addEventListener("DOMContentLoaded", () => {
        const toggleButton = document.getElementById("toggle-dark-mode");
        const moonIcon = document.getElementById("icon-moon");
        const header = document.querySelector("header");
        const servicesSection = document.getElementById("services");
        const historySection = document.getElementById("history");
        const logoImage = document.querySelector(".logo img"); // Selecciona la imagen del logo
    
        // Verificar el modo guardado en localStorage
        if (localStorage.getItem("darkMode") === "enabled") {
            document.body.classList.add("dark-mode");
            moonIcon.classList.remove("fa-moon");
            moonIcon.classList.add("fa-sun");
            header.classList.add("dark-mode"); // Agregar la clase de modo oscuro al header
            servicesSection.classList.add("dark-mode"); // Agregar la clase de modo oscuro a Nuestros Servicios
            historySection.classList.add("dark-mode"); // Agregar la clase de modo oscuro a Historia
            logoImage.src = "img3/logoblanco.webp"; // Cambia la imagen del logo
        }
    
        toggleButton.addEventListener("click", () => {
            document.body.classList.toggle("dark-mode");
    
            if (document.body.classList.contains("dark-mode")) {
                moonIcon.classList.remove("fa-moon");
                moonIcon.classList.add("fa-sun");
                localStorage.setItem("darkMode", "enabled");
                header.classList.add("dark-mode"); // Agregar la clase de modo oscuro al header
                servicesSection.classList.add("dark-mode"); // Agregar la clase de modo oscuro a Nuestros Servicios
                historySection.classList.add("dark-mode"); // Agregar la clase de modo oscuro a Historia
                logoImage.src = "img3/logoblanco.webp"; // Cambia la imagen del logo
            } else {
                moonIcon.classList.remove("fa-sun");
                moonIcon.classList.add("fa-moon");
                localStorage.setItem("darkMode", "disabled");
                header.classList.remove("dark-mode"); // Remover la clase de modo oscuro del header
                servicesSection.classList.remove("dark-mode"); // Remover la clase de modo oscuro de Nuestros Servicios
                historySection.classList.remove("dark-mode"); // Remover la clase de modo oscuro de Historia
                logoImage.src = "img3/new-logo.png"; // Restaura la imagen del logo a la original
            }
        });
    });
    
    
    
    
    

    

 /**formulario  */


    // Función para validar el formulario y mostrar el modal
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();

        const modalMessage = 'Mensaje enviado exitosamente';

        document.getElementById('modal-message').innerText = modalMessage;
        document.getElementById('modal-overlay').style.display = 'block';
        document.getElementById('modal').style.display = 'block';
    });

    document.getElementById('modal-close').addEventListener('click', function() {
        document.getElementById('modal-overlay').style.display = 'none';
        document.getElementById('modal').style.display = 'none';
        location.reload(); // Recargar la página
    });

    document.getElementById('terms-link').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('terms-overlay').style.display = 'block';
        document.getElementById('terms-modal').style.display = 'block';
    });

    document.getElementById('terms-close').addEventListener('click', function() {
        document.getElementById('terms-overlay').style.display = 'none';
        document.getElementById('terms-modal').style.display = 'none';
    });

    
    function onSubmit(token) {
      document.getElementById("demo-form").submit();
    }

    //Sellecion ID servicio

    document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll(".modal-button[data-service]");
        const serviceSelect = document.querySelector("select[name='servicio']");
    
        buttons.forEach(button => {
            button.addEventListener("click", function () {
                const service = button.getAttribute("data-service");
                serviceSelect.value = service;
            });
        });
    });
    



  

/* Nuestro Equipo  */
document.addEventListener('DOMContentLoaded', function () {
    // Agregar clase visible después de un pequeño retraso
    setTimeout(function() {
        document.getElementById('teamSection').classList.add('visible');
    }, 100);

    var teamMembers = document.querySelectorAll('.team-member');
    teamMembers.forEach(function (member) {
        member.addEventListener('mouseenter', function () {
            this.querySelector('img').style.transform = 'scale(1.1)';
        });
        member.addEventListener('mouseleave', function () {
            this.querySelector('img').style.transform = 'scale(1)';
        });
    });
});


// validación recaptcha

const express = require('express');
const bodyParser = require('body-parser');
const fetch = require('node-fetch');
const app = express();

app.use(bodyParser.urlencoded({ extended: true }));

app.post('/your-backend-endpoint', async (req, res) => {
    const recaptchaResponse = req.body['g-recaptcha-response'];
    const secretKey = '6Lf7W-wpAAAAAN3eVV0hQhzrXWFvF6FsjZwS6nHK'; // Reemplaza con tu clave secreta

    const verificationUrl = `https://www.google.com/recaptcha/api/siteverify?secret=${secretKey}&response=${recaptchaResponse}`;

    const response = await fetch(verificationUrl, {
        method: 'POST'
    });

    const data = await response.json();

    if (data.success) {
        // El reCAPTCHA es válido
        res.send('Formulario enviado correctamente');
    } else {
        // El reCAPTCHA no es válido
        res.send('Fallo la verificación del reCAPTCHA');
    }
});

app.listen(80,443, () => {
    console.log('Servidor corriendo en http://localhost:80,443');
});



