<html>
<style>
body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   display: flex;
   flex-direction: column;
   align-items: center;
}

header {
   display: flex;
   justify-content: space-around;
   align-items: center;
   width: 100%;
   height: 100px;
}

.logo {
   font-size: 2em;
   font-weight: bold;
   color: #333;
}

.tagline {
   font-size: 1.2em;
   color: #666;
}

.cta {
   background-color: #e64a19;
   color: #fff;
   padding: 10px 20px;
   border: none;
   border-radius: 5px;
   cursor: pointer;
}

nav ul {
   list-style-type: none;
   display: flex;
   justify-content: space-around;
   width: 100%;
}

nav ul li a {
   text-decoration: none;
   color: #333;
   padding: 10px;
   border-radius: 5px;
}

main {
   display: flex;
   flex-direction: column;
   align-items: center;
   width: 100%;
   padding: 20px;
}

.intro {
   text-align: center;
   font-size: 1.2em;
   margin-bottom: 20px;
}

.intro h1 {
   font-size: 3em;
}

.content {
   display: flex;
   flex-direction: column;
   align-items: center;
   width: 100%;
   padding: 20px;
   border-top: 1px solid #e6e6e6;
}

.content h2 {
   font-size: 2em;
   margin-bottom: 20px;
}

.content p {
   text-align: center;
   margin-bottom: 20px;
}

.image {
   width: 400px;
   height: 400px;
   background-color: #333;
   margin-bottom: 20px;
   border-radius: 10px;
}

footer {
   display: flex;
   justify-content: space-around;
   align-items: center;
   width: 100%;
   height: 50px;
   background-color: #e6e6e6;
   margin-top: 20px;
}

footer a {
   text-decoration: none;
   color: #333;
   padding: 10px;
   border-radius: 5px;
}
</style>
<body>
   <header>
       <div class="logo">
           <span>ENERGY</span>
           <span>WATER</span>
           <span>AND</span>
           <span>AIR</span>
       </div>
       <div class="tagline">
           <span>Mantenimiento y Automatización</span>
       </div>
       <button class="cta">Inicio</button>
       <nav>
           <ul>
               <li><a href="#services">Servicios</a></li>
               <li><a href="#gallery">Galeria</a></li>
               <li><a href="#contact">Contactanos</a></li>
               <li><a href="#faq">FAQ</a></li>
           </ul>
       </nav>
   </header>
   <main>
       <div class="intro">
           <h1>¿Qué Sones?</h1>
           <p>Bienvenido a Energy Water Spa, empresa dedicada a la instalación y reparación de sistemas de ventilación, calefricación, electricidad y construcción. Con atención personalizada y una experiencia emocionante en el alcance de su empresa.</p>
       </div>
       <div class="image">
           <div class="rectangle" style="background-color: #333;"></div>
       </div>
       <div class="content">
           <h2>Servicios</h2>
           <p>Ofrecemos un servicio profesional de mantenimiento y automatización de sus sistemas de ventilación, calefricación y electricidad.</p>
           <h2>Galeria</h2>
           <p>Conocemos nuestros servicios a través de nuestra galería de fotos.</p>
           <h2>Contactanos</h2>
           <p>Si dese contactarnos, por favor, utilice el formular de contacto.</p>
           <h2>FAQ</h2>
           <p>Preguntes aquí algunas preguntas que puede tener en su mente.</p>
       </div>
   </main>
   <footer>
       <a href="#"><i class="fa fa-facebook"></i></a>
       <a href="#"><i class="fa fa-twitter"></i></a>
       <a href="#"><i class="fa fa-instagram"></i></a>
       <a href="#"><i class="fa fa-linkedin"></i></a>
       <a href="#"><i class="fa fa-youtube"></i></a>
   </footer>
</body>
</html>