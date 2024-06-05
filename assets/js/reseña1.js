const reviews = [
    {
        title: "Mathias Ávila Riveros",
        text: "Trabajar con Energy and Water SpA ha sido una experiencia excepcional. La empresa ha demostrado un compromiso inquebrantable con la calidad y la eficiencia en todos nuestros proyectos de climatización y mantenimiento eléctrico. ",
        rating: 5,
        img: "img3/mathi.webp"
    },
    {
        title: "Javiera Rivera Arraño",
        text: "En el sector minero, la fiabilidad y la continuidad operativa son cruciales. Energy and Water SpA ha superado nuestras expectativas en el mantenimiento de grupos electrógenos críticos, garantizando que nuestras operaciones continúen sin interrupciones. ",
        rating: 5,
        img: "img3/javi1.webp"
    },
    {
        title: "Fabián Ramírez Riveros",
        text: "Energy and Water SpA ha sido fundamental en las reparaciones y el mantenimiento de nuestros sistemas eléctricos. Su equipo de profesionales no solo entregó resultados de alta calidad, sino que también mostró una gran capacidad de adaptación y respuesta rápida ante nuestras necesidades específicas. ",
        rating: 5,
        img: "img3/fabian.webp"
    },
    {
        title: "Matías Trujillo Fiedler",
        text: "Hemos confiado en Energy and Water SpA para la implementación de nuevas normativas sanitarias y el mantenimiento de nuestros sistemas de climatización. Su enfoque proactivo y su habilidad para ofrecer soluciones efectivas han sido esenciales para mantener un entorno seguro y saludable en nuestras instalaciones.",
        rating: 5,
        img: "img3/mati-tru.webp"
    }
];

function createStarRating(rating) {
    let stars = "";
    for (let i = 0; i < 5; i++) {
        stars += `<i class="fas fa-star ${i < rating ? 'stars' : ''}"></i>`;
    }
    return stars;
}

function createCarouselItems() {
    const indicators = document.getElementById('carousel-indicators');
    const inner = document.getElementById('carousel-inner');

    for (let i = 0; i < reviews.length; i += 2) {
        // Indicators
        const indicator = document.createElement('button');
        indicator.type = 'button';
        indicator.setAttribute('data-bs-target', '#carouselExampleCaptions');
        indicator.setAttribute('data-bs-slide-to', Math.floor(i / 2));
        indicator.setAttribute('aria-label', `Slide ${Math.floor(i / 2) + 1}`);
        if (i === 0) indicator.classList.add('active');
        indicators.appendChild(indicator);

        // Carousel Items
        const item = document.createElement('div');
        item.classList.add('carousel-item');
        if (i === 0) item.classList.add('active');

        const row = document.createElement('div');
        row.classList.add('row');

        for (let j = 0; j < 2; j++) {
            if (i + j < reviews.length) {
                const col = document.createElement('div');
                col.classList.add('col-6');

                const review = reviews[i + j];
                col.innerHTML = `
<div class="card mx-auto" style="width: 18rem;">
  <img src="${review.img}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">${review.title}</h5>
    <p class="card-text">${review.text}</p>
    <div>${createStarRating(review.rating)}</div>
  </div>
</div>`;

                row.appendChild(col);
            }
        }

        item.appendChild(row);
        inner.appendChild(item);
    }
}

createCarouselItems();