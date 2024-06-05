// Get the button
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Show the button when the user scrolls down 20px from the top
window.onscroll = function () {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
};

// Smooth scroll to top when the button is clicked
scrollToTopBtn.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
    // Add bounce animation
    scrollToTopBtn.classList.add("bounce");
    // Remove bounce animation after it's done
    setTimeout(() => {
        scrollToTopBtn.classList.remove("bounce");
    }, 300);
});