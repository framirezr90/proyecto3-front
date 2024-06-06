document.addEventListener("DOMContentLoaded", function() {
    // Desplazamiento suave al inicio de la página al cargar
    window.onload = function() {
        setTimeout(function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }, 100); // Espera 100 milisegundos antes de desplazar suavemente
    };

    // Obtener todos los elementos <li> dentro de la navegación
    const navItems = document.querySelectorAll("nav ul li");

    // Marcar el primer elemento como activo al cargar la página
    navItems[0].classList.add("highlight");

    // Iterar sobre cada elemento <li>
    navItems.forEach(function(item) {
        // Agregar un event listener para el clic en cada elemento
        item.addEventListener("click", function(event) {
            // Prevenir el comportamiento predeterminado del enlace
            event.preventDefault();

            // Obtener el enlace dentro del elemento <li>
            const link = this.querySelector("a");

            // Obtener el destino del enlace (href)
            const target = link.getAttribute("href");

            // Obtener la sección correspondiente al destino del enlace
            const section = document.querySelector(target);

            // Obtener la posición vertical de la sección
            const targetOffset = section.offsetTop;

            // Calcular la posición de desplazamiento
            const scrollPosition = targetOffset - 100; // Ajusta según sea necesario para el espacio del encabezado

            // Desplazamiento suave hacia la sección correspondiente durante 1 segundo (1000 milisegundos)
            smoothScroll(scrollPosition, 1000); // Ajusta la duración aquí

            // Eliminar la clase 'highlight' de todos los elementos <li>
            navItems.forEach(function(navItem) {
                navItem.classList.remove("highlight");
            });

            // Agregar la clase 'highlight' solo al elemento clickeado
            item.classList.add("highlight");
        });
    });

    // Función para desplazamiento suave
    function smoothScroll(targetPosition, duration) {
        const startPosition = window.pageYOffset;
        const distance = targetPosition - startPosition;
        let startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const run = ease(timeElapsed, startPosition, distance, duration);
            window.scrollTo(0, run);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }

        function ease(t, b, c, d) {
            // Uso de una función de easeInOutQuad
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(animation);
    }
});


