
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    
  </head>

  <body>

    <header>
      <div class="title">
        <img id='logo' src='../../media/Lunardo_logo.png' alt='Lunardo logo'/>
        <h1 id="welcome">Lunardo Cinemas</h1>
        <!-- Lunardo Logo created using templates and tools at www.FreeLogoDesign.org -->
        
        </div>
    </header>

    <nav>
      <ul id="links">
        <li><a href="">About Us</a></li>
        <li><a href="">Now Showing</a></li>
        <li><a href="">Book Now</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>

    <main>
      <article id='AboutUs'>
        <p> Hello and welcom to my arse,  eat plenty of dicks please

        </p>
          
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Glen Sjollema S3353578. <a href="https://github.com/glensjollema1/wp.git">Visit the project on GitHub</a>
      Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
