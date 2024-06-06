<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS from jsDelivr -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css"> <!-- Hoja de estilo general -->
    <link rel="stylesheet" href="css/header.css"> <!-- Hoja de estilo Navbar -->
    <link rel="stylesheet" href="css/start1.css"> <!--Hoja de estilo start-->
    <link rel="stylesheet" href="css/service.css"> <!-- Hoja de estilo Servicios -->
    <link rel="stylesheet" href="css/gallery.css"> <!-- Hoja de estilo galería -->
    <link rel="stylesheet" href="css/history.css"> <!-- Hoja de estilo Historia -->
    <link rel="stylesheet" href="css/team1.css"> <!-- Hoja de estilo nuestro equipo -->
    <link rel="stylesheet" href="css/contactUs1.css"> <!-- Hoja de estilo general -->
    <link rel="stylesheet" href="css/faq.css"> <!-- Hoja de estilo general -->
    <link rel="stylesheet" href="css/footer.css"> <!-- Hoja de estilo general -->
    <link rel="stylesheet" href="css/darkmode.css"> <!-- Hoja de estilo general -->
    <link rel="stylesheet" href="css/button.css"> <!-- Hoja de estilo general -->
    <link rel="stylesheet" href="css/scroll.css"> <!-- Hoja de estilo general -->
    <link rel="stylesheet" href="css/font1.css"> <!-- Hoja de estilo general -->
    <link rel="stylesheet" href="css/reseñas.css"> <!-- Hoja de estilo Reseñas -->
    <link rel="stylesheet" href="css/menuT.css"> <!-- Hoja de estilo menu toogle -->
    


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">

</head>

<body class="container">
    <!-- Header -->

    <header class="navbar navbar-expand-lg fixed-top">

        <!-- Logo y Navegación -->
        <div class="logo">
            <a href=""><img src="img/new-logo.png" alt="Logo Empresa"></a>
        </div>

        <!-- Contenedor del botón del menú y del menú desplegable -->
        <div class="menu-container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse navbar-expand-lg" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li><a href="#start">Inicio</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#gallery">Galería</a></li>
                    <li><a href="#history">Historia</a></li>
                    <li><a href="#team">Equipo</a></li>
                    <li><a href="#contactUs">Contáctanos</a></li>
                    <li><a href="#faq">Preguntas Frecuentes</a></li>
                    <li id="dark-mode-toggle"><a href="#" id="toggle-dark-mode"><i id="icon-moon"
                                class="fa-solid fa-moon"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>


    <main>
        <!-- Carousel Section -->
        <section id="start" class="section">
            <!-- Carousel Content -->
            <div id="doubleCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6">
                                <div class="p-3 text-center">
                                    <h2 class="libre-baskerville-regular">Quienes Somos</h2>
                                    <div>
                                        <p>Bienvenido a <b>Energy and Water SpA</b>, una empresa líder en la instalación
                                            y
                                            reparación de sistemas de ventilación, calefacción, electricidad y
                                            construcción. Desde nuestra fundación, nos hemos comprometido a proporcionar
                                            servicios de alta calidad que cumplen con los estándares más exigentes del
                                            sector. Contamos con un equipo de profesionales altamente cualificados, cada
                                            uno de ellos con amplia experiencia y dedicación para ofrecer soluciones
                                            integrales y personalizadas a nuestros clientes.</p>

                                        <p>En <b>Energy and Water SpA</b>, entendemos que cada proyecto es único y
                                            requiere un
                                            enfoque a medida. Por eso, trabajamos estrechamente con nuestros clientes
                                            para entender sus necesidades específicas y desarrollar soluciones que no
                                            solo cumplan, sino que superen sus expectativas. Ya sea que necesites una
                                            instalación nueva, una reparación o un mantenimiento regular, nuestro equipo
                                            está preparado para brindarte el mejor servicio posible.</p>

                                        <p>Te invitamos a contactarnos para discutir tus necesidades y ofrecerte un
                                            presupuesto sin compromiso. Descubre cómo nuestros servicios pueden mejorar
                                            tu calidad de vida y aportar valor a tu propiedad. En <b>Energy and Water
                                                SpA</b>,
                                            estamos aquí para ayudarte a encontrar las mejores soluciones para tus
                                            sistemas de ventilación, calefacción, electricidad y construcción.
                                            ¡Esperamos poder colaborar contigo!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 text-center">
                                    <img src="img3/61.webp" class="img-fluid" alt="Imagen 2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Second Slide -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="p-3 text-center">
                                    <img src="img3/img3.webp" class="img-fluid" alt="Imagen 3">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 text-center">
                                    <h2 class="libre-baskerville-regular">Nuestra Visión</h2>
                                    <p>Nuestra visión en Energy & Water SpA es convertirnos en la empresa líder y
                                        referente en soluciones integrales de ventilación, calefacción, electricidad y
                                        construcción, reconocida por nuestra innovación, calidad y compromiso con la
                                        sostenibilidad. Aspiramos a ser la primera opción para nuestros clientes al
                                        ofrecer servicios que no solo cumplen con los más altos estándares de calidad,
                                        sino que también contribuyen al bienestar y confort de las personas, así como a
                                        la preservación del medio ambiente.</p>
                                    <p>Imaginamos un futuro en el que nuestras soluciones energéticas eficientes y
                                        sostenibles sean accesibles para todos, mejorando la calidad de vida de las
                                        comunidades a las que servimos. Nos comprometemos a mantenernos a la vanguardia
                                        de la tecnología y las mejores prácticas del sector, adaptándonos continuamente
                                        a los cambios y demandas del mercado.</p>
                                    <p>En <b>Energy & Water SpA</b>, creemos firmemente en el valor del talento humano y
                                        en el
                                        poder del trabajo en equipo. Por ello, nos esforzamos por crear un entorno de
                                        trabajo inclusivo y colaborativo, donde cada miembro de nuestro equipo pueda
                                        desarrollarse profesionalmente y contribuir con su experiencia y creatividad al
                                        éxito de la empresa.</p>
                                    <p>Nuestra visión incluye un fuerte compromiso con la responsabilidad social y
                                        ambiental. Queremos ser pioneros en la implementación de prácticas sostenibles
                                        que minimicen el impacto ecológico y promuevan el uso responsable de los
                                        recursos naturales. Nos vemos como un agente de cambio positivo, liderando el
                                        camino hacia un futuro más verde y consciente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#doubleCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#doubleCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Services Section 
        <section id="services" class="section" class="dark-section">
        -->
        <!-- Contenido de la sección Nuestros Servicios -->

        <!-- Services Content 
            <div class="container">
                <div class="service-item card-dark">
                    <h2 class="text-center mb-5">Nuestros Servicios</h2>
                    <div class="row">
                        -->

        <!-- Service Items 
                        <div class="col-md-6">
                            <div class="service-item">
                                <img src="img3/aire.webp" alt="" width="70px" height="70px">
                                <h3 class="libre-baskerville-regular">Aire Acondicionado</h3>
                                <p class="p-service">El mantenimiento del aire acondicionado incluye limpiar filtros y
                                    bobinas, revisar refrigerante, y asegurarse del correcto funcionamiento del
                                    termostato.</p>
                                <a href="#contactUs"><button class="modal-button"
                                        data-service="Mantenimiento aire acondicionado">Contáctanos</button></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <img src="img3/caldera.webp" alt="" height="70px" width="70px">
                                <h3 class="libre-baskerville-regular">Sala de Calderas</h3>
                                <p class="p-service">El mantenimiento de la sala de calderas incluye inspeccionar y
                                    limpiar quemadores, revisar válvulas y chequear niveles de agua y presión.</p>
                                <a href="#contactUs"><button class="modal-button"
                                        data-service="Mantenimiento sala de calderas">Contáctanos</button></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <img src="img3/elect.webp" alt="" height="70px" width="70px">
                                <h3 class="libre-baskerville-regular">Grupo Electrógeno</h3>
                                <p class="p-service">El mantenimiento del grupo electrógeno incluye revisar aceite y
                                    filtros, chequear baterías, inspeccionar conexiones y probar el sistema
                                    regularmente.</p>
                                <a href="#contactUs"><button class="modal-button"
                                        data-service="Mantenimiento grupo electrogenos">Contáctanos</button></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <img src="img3/sbomba.webp" alt="" width="70px" height="70px">
                                <h3 class="libre-baskerville-regular">Sala de Bombas</h3>
                                <p class="p-service">El mantenimiento de la sala de bombas incluye revisar sellos,
                                    lubricar partes móviles, inspeccionar conexiones y comprobar el funcionamiento
                                    general.</p>
                                <a href="#contactUs"><button class="modal-button"
                                        data-service="Mantenimiento sala de Bombas">Contáctanos</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                  -->

        <!-- Services Section -->
        <section id="services" class="section" class="dark-section">
            <div class="container">
                <div class="service-item card-dark">
                    <h2 class="text-center mb-5">Nuestros Servicios</h2>
                    <div class="row" id="services-container">
                        <!-- Aquí se insertarán los servicios -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="section">
            <!-- Gallery Content -->
            <div class="container" id="Galería">
                <h2 class="text-center mb-5">Galería de Imágenes <img src="img3/galeria.webp" height="70px" width="70px"
                        alt=""></h2>
                <div class="row">
                    <!-- Gallery Items -->
                    <div class="col-md-3">
                        <div class="gallery-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-slide-to="0">
                                <img src="img3/52.webp" alt="Imagen 1" class="img-gallery">
                                <div class="gallery-overlay">
                                    <h6>Instalación Eléctrica</h6>
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-slide-to="1">
                                <img src="img3/54.webp" alt="Imagen 2" class="img-gallery">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-slide-to="2">
                                <img src="img3/64.webp" alt="Imagen 3" class="img-gallery">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-slide-to="3">
                                <img src="img3/55.webp" alt="Imagen 4" class="img-gallery">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-slide-to="4">
                                <img src="img3/61.webp" alt="Imagen 5" class="img-gallery">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-slide-to="5">
                                <img src="img3/50.webp" alt="Imagen 6" class="img-gallery">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-slide-to="6">
                                <img src="img3/56.webp" alt="Imagen 7" class="img-gallery">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-slide-to="7">
                                <img src="img3/68.webp" alt="Imagen 8" class="img-gallery">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="imageModalLabel">Bienvenido a nuestra galería de imagenes</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img3/52.webp" class="d-block w-100 img-fluid" alt="Imagen 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img3/54.webp" class="d-block w-100 img-fluid" alt="Imagen 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img3/64.webp" class="d-block w-100 img-fluid" alt="Imagen 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img3/55.webp" class="d-block w-100 img-fluid" alt="Imagen 4">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img3/61.webp" class="d-block w-100 img-fluid" alt="Imagen 5">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img3/50.webp" class="d-block w-100 img-fluid" alt="Imagen 6">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img3/56.webp" class="d-block w-100 img-fluid" alt="Imagen 7">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img3/68.webp" class="d-block w-100 img-fluid" alt="Imagen 8">
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselGallery" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselGallery" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Fina Galeria -->

        <!-- Sección Historia -->
        <section id="history" class="section">
            <!-- Contenido de la sección Historia -->
            <!-- Carta en la sección Historia -->
            <div class="container">
                <h2 class="text-center mb-5"> Historia <i class="fas fa-book-open"></i></h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="history-item card-dark">
                            <!-- Contenido de la carta Historia -->
                            <div class="history-item">
                                <h3 class="libre-baskerville-regular">Mizraim Abello Avello</h3>
                                <h4>Fundador</h4>
                                <div>
                                    <p class="p-history"> Mizraim Abello Avello, fundador de <b>Energy and Water
                                            SpA</b>, es
                                        una figura destacada y colaborativa en los sectores de climatización y
                                        electricidad. Su enfoque en el liderazgo democrático fomenta un ambiente de
                                        trabajo inclusivo, donde se valoran y consideran las opiniones y contribuciones
                                        de cada miembro del equipo. Esto ha permitido a la empresa no solo mantener una
                                        operación eficiente, sino también innovar en soluciones energéticas y de gestión
                                        del agua que responden a las necesidades actuales del mercado. Abello destaca
                                        por su capacidad para resolver problemas complejos, comunicarse de manera
                                        efectiva y aplicar un pensamiento crítico que impulsa el progreso continuo de la
                                        empresa. Su gestión meticulosa y estratégica ha sido clave en la obtención de
                                        importantes acreditaciones para centros de salud en San Joaquín, en la
                                        realización de reparaciones significativas en el museo de la Universidad de los
                                        Andes, y en el mantenimiento de grupos electrógenos críticos, asegurando siempre
                                        la máxima operatividad y seguridad.</p>

                                    <p> Durante la pandemia de COVID-19, Mizraim Abello demostró una notable capacidad
                                        de adaptación al implementar nuevas normativas sanitarias, garantizando la
                                        protección tanto del personal como de los clientes. Bajo su dirección, se
                                        desarrollaron e implementaron protocolos de prevención y programas de
                                        capacitación que permitieron a la empresa seguir operando de manera efectiva en
                                        un entorno desafiante. Su visión estratégica se centra en asegurar la
                                        continuidad operacional de los clientes, mejorando continuamente los procesos de
                                        mantenimiento y elevando los estándares de calidad. Abello no solo se enfoca en
                                        los aspectos técnicos de la gestión, sino también en la formación de un equipo
                                        comprometido y competente, capaz de enfrentar y superar los desafíos del sector.
                                        Su liderazgo ha sido fundamental para posicionar a <b>Energy and Water SpA</b>
                                        como una
                                        empresa de referencia en el ámbito de la climatización y la electricidad,
                                        promoviendo siempre la excelencia y la innovación.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- sección Nuestro Equipo -->
        <section id="team" class="section">
            <div class="container">
                <h2 class="text-center my-5">Nuestro Equipo <img src="img3/equipo1.webp" height="70px" width="70px"
                        alt=""> </h2>
                <div id="teamSection" class="row hidden">
                    <div class="col-md-6 col-sm-6">
                        <div class="team-member">
                            <div class="circle">
                                <img src="img3/vector.webp" alt="Miembro del Equipo 1">
                            </div>
                            <h4>Mizraim Abello Avello </h4>
                            <h6>Presidente - Fundador</h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="team-member">
                            <div class="circle">
                                <img src="img3/vector.webp" alt="Miembro del Equipo 2">
                            </div>
                            <h4>Javiera Rivera</h4>
                            <h6>Vicepresidente</h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="team-member">
                            <div class="circle">
                                <img src="img3/vector.webp" alt="Miembro del Equipo 3">
                            </div>
                            <h4> Mathias Avila </h4>
                            <h6> Gerente Comercial </h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="team-member">
                            <div class="circle">
                                <img src="img3/vector.webp" alt="Miembro del Equipo 4">
                            </div>
                            <h4> Mathias Trujillo </h4>
                            <h6> Junior </h6>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--  Fin sección Nuestro equipo  -->





        <!--Formulario-->
        <section id="contactUs" class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-form">
                        <h1>Contáctanos</h1>
                        <form id="contact-form">
                            <input type="text" id="name" placeholder="Nombre" required>
                            <input type="email" id="email" placeholder="Correo Electrónico" required>
                            <input type="text" id="address" placeholder="Dirección" required>
                            <select class="form-select" name="servicio" required>
                                <option value="">Seleccione un Servicio</option>
                                <option value="Aire Acondicionado">Aire Acondicionado</option>
                                <option value="Grupo Electrógeno">Grupo Electrógeno</option>
                                <option value="Sala de Calderas">Sala de Calderas</option>
                                <option value="Sala de Bombas">Sala de Bombas</option>
                            </select>
                            <textarea id="message" placeholder="Mensaje" required></textarea>
                            <label>
                                <input type="checkbox" id="terms-checkbox" required>
                                Acepto los <a href="#" id="terms-link">términos y condiciones</a>
                            </label>
                            <div class="g-recaptcha" data-sitekey="6Lf7W-wpAAAAAGuurkc7JIMcoKoz3wNDF5IdWqAO"></div>
                            <input type="submit" value="Enviar Mensaje">
                        </form>
                    </div>
                    <div id="modal-overlay"></div>
                    <div id="modal">
                        <p id="modal-message"></p>
                        <button class="modal-button" id="modal-close">Aceptar</button>
                    </div>


                    <div id="terms-overlay"></div>
                    <div id="terms-modal">
                        <ul>
                            <p><strong>Términos y Condiciones del Formulario de Contacto</strong></p>
                        </ul>
                        <ol>
                            <li><strong>Uso de la Información Personal:</strong> La información proporcionada en este
                                formulario será utilizada únicamente con el propósito de responder a tu consulta o
                                solicitud. No compartiremos tus datos personales con terceros sin tu consentimiento
                                expreso.</li>
                            <li><strong>Exactitud de la Información:</strong> Te comprometes a proporcionar información
                                precisa y actualizada en este formulario. Nos reservamos el derecho de no responder a
                                consultas que contengan información falsa o engañosa.</li>
                            <li><strong>Uso Adecuado:</strong> Este formulario está destinado para consultas legítimas y
                                respetuosas. No se permitirá el uso de lenguaje ofensivo, difamatorio o inapropiado. Nos
                                reservamos el derecho de no responder a consultas que violen esta política.</li>
                            <li><strong>Privacidad y Seguridad:</strong> Nos comprometemos a proteger la privacidad y
                                seguridad de tus datos personales de acuerdo con nuestra política de privacidad. Sin
                                embargo, no podemos garantizar la seguridad absoluta de la información transmitida a
                                través de Internet.</li>
                            <li><strong>Responsabilidad:</strong> No nos hacemos responsables por cualquier pérdida o
                                daño que pueda surgir del uso de la información proporcionada en este formulario. El uso
                                de este formulario es bajo tu propio riesgo.</strong>
                                <ul><strong>Al enviar este formulario, confirmas que has leído y entendido estos
                                        términos y condiciones, y estás de acuerdo en cumplir con ellos.</strong></ul>
                        </ol>
                        <div class="btn-modal">
                            <div class="btn-modal">
                                <button class="modal-button" id="terms-close">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Reseñas -->
        <section class="section-carrusel2" id="reseñas">
            <div class="container">
                <h2 class="libre-baskerville-regular">Algunas Reseñas <img src="img3/calificacion.webp" height="70px"
                        width="70px" alt=""></i></h2>
                <div class="row">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" id="carousel-indicators">
                        </div>
                        <div class="carousel-inner" id="carousel-inner">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fin Reseñas -->

        <!-- Sección Preguntas Frecuentes -->
        <section id="faq" class="section">
            <div>
                <h2 class="libre-baskerville-regular">Preguntas Frecuentes</h2>
                <div class="preguntas">
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Cómo solicito una cotización? <img src="./img3/suma.svg"
                                alt="Abrir Respuesta"></p>
                        <p class="respuesta" style="">Puedes contactarnos al correo Contacto@energyandwater.cl o al
                            +56232569798.</p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Necesitas visita técnica? <img src="./img3/suma.svg" alt="Abrir Respuesta">
                        </p>
                        <p class="respuesta" style="">Puedes solicitar visita técnica para evaluación mediante correo
                            electrónico Contacto@energyandwater.cl o al +56232569798</p>
                    </div>
                    <div class="contenedor-pregunta activa">
                        <p class="pregunta">¿Qué tipo de aire acondicionado pueden revisar? <img src="./img3/suma.svg"
                                alt="Abrir Respuesta"></p>
                        <p class="respuesta" style="max-height: 30px;">Revisamos, reparamos e instalamos equipos
                            domiciliarios e industriales.</p>
                    </div>
                </div>
            </div>
        </section> <!-- Fin Preguntas Frecuentes-->
        <!-- Boton de navegacion -->

        <button id="scrollToTopBtn">
            <i class="fas fa-arrow-up"></i>
        </button>




    </main>
    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-4 contact-info">
                    <h4>Contácto</h4>
                    <p><a href="https://maps.app.goo.gl/tStDViai1aYSSrv7A"><i class="fas fa-map-marker-alt"></i>
                            Manquehue Sur 520, oficina 205, Las Condes</a></p>
                    <p><a href="mailto:contacto@energyandwater.cl "></a><i class="fas fa-envelope"></i>
                        contacto@energyandwater.cl</a></p>
                    <p><i class="fas fa-phone"></i> +56232569798</p>
                </div>
                <!-- Social Icons -->
                <div class="col-md-4 social-icons text-center">
                    <h4>Síguenos</h4>
                    <div class="icons-wrapper">
                        <a href="https://web.facebook.com/ENERGYANDWATERservices?locale=es_LA%7D" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/energyandwatercl/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/56930835203" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <!-- About Us -->
                <div class="col-md-4 text-center text-md-end">
                    <h4 style="text-align: justify">Energy & Water</h4>
                    <p>Todos los derechos reservados ® .</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Custom Scripts -->

    <script src="js/script5.js"></script>
    <script src="js/navbar.js"></script>
    <!-- <script src="js/menu.js"></script> -->
    
    <script src="js/categorias.js"></script>
    <script src="js/preguntasFrecuentes.js"></script>
    <script src="js/reseña1.js"></script>
    <script src="js/data.js"></script>
    <script src="js/button.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/service.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            var menu = document.getElementById('menu');
            var icon = document.getElementById('menu-icon');

            menu.classList.toggle('active');

            // Alterna el icono entre 'fa-bars' y 'fa-times' (X)
            if (menu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    </script>

   

</body>

</html>