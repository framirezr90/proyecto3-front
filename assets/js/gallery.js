var imageModal = document.getElementById('imageModal');
imageModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var slideIndex = button.getAttribute('data-bs-slide-to');
    var carousel = new bootstrap.Carousel(document.getElementById('carouselGallery'));
    carousel.to(slideIndex);
});