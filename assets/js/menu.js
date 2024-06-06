document.addEventListener("DOMContentLoaded", function() {
    window.onload = function() {
        setTimeout(function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }, 100);
    };

    const navItems = document.querySelectorAll("nav ul li");
    const menuToggle = document.querySelector(".menu-toggle");
    const navUl = document.querySelector("nav ul");

    navItems[0].classList.add("highlight");

    navItems.forEach(function(item) {
        item.addEventListener("click", function(event) {
            event.preventDefault();
            const link = this.querySelector("a");
            const target = link.getAttribute("href");
            const section = document.querySelector(target);
            const targetOffset = section.offsetTop;
            const scrollPosition = targetOffset - 100;
            smoothScroll(scrollPosition, 1000);

            navItems.forEach(function(navItem) {
                navItem.classList.remove("highlight");
            });

            item.classList.add("highlight");
        });
    });

    menuToggle.addEventListener("click", function() {
        navUl.classList.toggle("active");
    });

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
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(animation);
    }

   
});