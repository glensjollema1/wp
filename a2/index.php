
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime('style.css'); ?>">
    <script src='../wireframe.js'></script>
    <!--Web fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Neuton&display=swap">
  </head>

  <body>

    <header>
      <div class="title">
		<div class="logocontainer">
        	<img id='logo' src='../../media/Lunardo_logo.png' alt='Lunardo logo'/></div>
        <h1>Lunardo Cinemas</h1>
        <!-- Lunardo Logo created using templates and tools at www.FreeLogoDesign.org -->

        </div>
    </header>
  <div class='parallax'>
   	<nav>
      <ul class="links">
        <li><a href="#AboutUs">About Us</a></li>
        <li><a href="#NewSeating">New Seating</a></li>
        <li><a href="#NowShowing">Now Showing</a></li>
        <li><a href="#PricingGuide">Pricing Guide</a></li>
        <li><a href="#BookNow">Book Now</a></li>
        <li><a href="#bottom">Contact</a></li>
      </ul>
    </nav>

    <main>
      
        <article class='mainSection' id='AboutUs'>
          <div class='aboutUsContainer'>
            <h2 id='stormy'> IT WAS A DARK AND STORMY NIGHT...</h2>
            <p> Which makes it the perfect night for a a movie! Hello and welcome to Lunardo Cinemas.
            We have been here in operation since 1952 and have happily provided this community with the latest in cinema
            for almost 70 years. We are a family owned business now into its 3rd Generation of owner operators, and with that
            comes not only in depth industry knowledge but also a strong connection to the community. We currently sponsor both junior
            cricket and junior rugby in the area.</p>
            <p>Over the years we have undergone many changes in keeping up with the latest in cinema technology and to ensure that we
            stay relevant. Our latest change has seen a significant upgrade to our seating and, in conjunction with our premier projectors,
            we can provide and absolutely unforgettable cinema experience. We can't wait for you to come and try it out!</p>
          </div>
        </article>
        <article class='mainSection' id='NewSeating'>
          <div class='seatContainer' id='seat1'>
            <img class='seat' src='../../media/Profern-Standard-Twin.png'> 
          </div>
          <div class='seatTextContainer' id='seatText1'>
            <p class='SeatText'>Testing the texticles</p>
          </div>
          <div class='seatContainer' id='seat2'>
            <img class='seat' src='../../media/Profern-Verona-Twin.png'> 
          </div>
          <div class='SeatTextContainer' id='seatText2'>
            <p class='SeatText'></p>
          </div>
        </article>
        <section class='mainSection' id='NowShowing'>
        </section>
        <article class='mainSection' id='Pricing'>
        </article>
        <article class='mainSection' id='BookNow'>
        </article> 
          

    </main>
  </div>
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> admin@lunardo.com.au PH: +61188448844 Glen Sjollema S3353578. <a href="https://github.com/glensjollema1/wp.git">Visit the project on GitHub</a>
      Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
