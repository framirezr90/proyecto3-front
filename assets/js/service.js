document.addEventListener("DOMContentLoaded", function() {
    const servicesData = {
        "data": [
            {
        "id": "1",
        "nombre": "Aire Acondicionado",
        "imagen": "img3/aire.webp",
        "texto": "Instalamos, reparamos y revisamos todo tipo de sistemas de aire acondicionado, tanto domésticos como industriales. Nos encargamos de la limpieza, el cambio de filtros, la recarga de gas y la detección y solución de averías.",
        "activo": true
    },
    {
        "id": "2",
        "nombre": "Grupo Electrógeno",
        "imagen": "img3/elect.webp",
        "texto": "Instalamos, reparamos y revisamos todo tipo de grupos electrógenos, tanto monofásicos como trifásicos. Nos encargamos del suministro de combustible, el cambio de aceite, el control de baterías y la verificación del funcionamiento correcto.",
        "activo": true
    },
    {
        "id": "3",
        "nombre": "Sala de Calderas",
        "imagen": "img3/caldera.webp",
        "texto": "Instalamos, reparamos y revisamos todo tipo de calderas, tanto de gas como eléctricas. Nos encargamos del mantenimiento preventivo, la sustitución de piezas, la purga de radiadores y la regulación de la presión y la temperatura.",
        "activo": true
    },
    {
        "id": "4",
        "nombre": "Sala de Bombas",
        "imagen": "img3/sbomba.webp",
        "texto": "Instalamos, reparamos y revisamos todo tipo de bombas hidráulicas, tanto centrífugas como periféricas. Nos encargamos del ajuste de válvulas, el cambio de sellos mecánicos, el equilibrado de rotores y la limpieza de impulsores.",
        "activo": true
    }
]
};

const servicesContainer = document.getElementById("services-container");

    servicesData.data.forEach(service => {
        if (service.activo) {
            console.log(service.nombre); // Verifica que el nombre del servicio es correcto

            const serviceItem = document.createElement("div");
            serviceItem.classList.add("col-md-6");

            serviceItem.innerHTML = `
                <div class="service-item">
                    <img src="${service.imagen}" alt="${service.nombre}" width="70px" height="70px">
                    <h3 class="libre-baskerville-regular">${service.nombre}</h3>
                    <p class="p-service">${service.texto}</p>
                    <a href="#contactUs"><button class="modal-button" data-service="${service.nombre}">Contáctanos</button></a>
                </div>
            `;

            servicesContainer.appendChild(serviceItem);
        }
    });

    // Selección del ID del servicio en el formulario
    const buttons = document.querySelectorAll(".modal-button[data-service]");
    const serviceSelect = document.querySelector("select[name='servicio']");

    buttons.forEach(button => {
        button.addEventListener("click", function() {
            const service = button.getAttribute("data-service");
            serviceSelect.value = service;
        });
    });
});