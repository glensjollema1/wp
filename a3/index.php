
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
    <script src='script.js'></script>
    <!--Web fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Sacramento&display=swap" >
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Varela+Round&display=swap">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Tangerine">
	  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Bangers&display=swap">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Neuton&display=swap">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat&display=swap">
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
    <nav>
        <ul class="links">
          <li id="aboutLink" onclick='navClicked();'><a href="#AboutUs">About Us</a></li>
          <li id='upgradeLink' onclick='navClicked();'><a href="#upgrades">Upgrades</a></li>
          <li id='nowShowingLink' onclick='navClicked();'><a href="#NowShowing">Now Showing</a></li>
          <li id='synopsisLink' onclick='navClicked();'><a href="#Synopsis">Synopsis</a></li>
          <li id='pricingLink' onclick='navClicked();'><a href="#PricingGuide">Pricing Guide</a></li>
          <li id='bookNowLink' onclick='navClicked();'><a href="#BookNow">Book Now</a></li>
          <li id='contactLink' onclick='navClicked();'><a href="#bottom">Contact</a></li>
        </ul>
    </nav>
    

    <div class='parallax'>
   
      <main>
      
        <article class='mainSection parallax' id='AboutUs'>
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
        <article class='mainSection parallax' id='upgrades'>
          <h2 id='upgradeHeader'>Cinema Upgrades</h2>
          <div class='seatContainer' id='seat1'>
            <img class='seat' src='../../media/Profern-Standard-Twin.png'> 
          </div>
          <div class='seatTextContainer' id='seatText1'>
            <h3>Standard Seating Upgrade</h3>
            <p class='SeatText'>Say hello to one of our newest additions, consider this gold class at a standard price. 
              These seats come with a fully padded headrest and cupholders. With exceptional lumbar support and buttox 
              grooving, watching a film from this chair is pure joy.
            </p>
          </div>
          <div class='seatContainer' id='seat2'>
            <img class='seat' src='../../media/Profern-Verona-Twin.png'> 
          </div>
          <div class='seatTextContainer' id='seatText2'>
            <h3>First Class Seating Upgrade</h3>
            <p class='SeatText'> Our new first class seats are here to provide you with the ultimate cinema experience. These chairs fully recline,
              have their own tray tables, and inbuilt lights. With these chairs also comes the opportunity to order food and drink and have it 
              brought to your seat at a pre-defined time during the movie. This is the ultimate in luxury.              
            </p>
          </div>
        </article>
        <section class='mainSection parallax' id='NowShowing'>
          <h2>Now Showing</h2>
          <div class='panel' id='p1'>
            <img  src='../../media/SW_ROTS_poster.jpg' alt="Star Wars The Rise of Skywalker Poster">
            
            <h4 class='movTitle'>Star Wars TROS           M</span></h4>
            <table>
              <tr>
                <td>Mon</td><td>1200</td>
              </tr>
              <tr>
                <td>Tue</td><td>1200</td>
              </tr>
              <tr>
                <td>Wed</td><td>1800</td>
              </tr>
              <tr>
                <td>Thu</td><td>1800</td>
              </tr>
              <tr>
                <td>Fri</td><td>1800</td>
              </tr>
              <tr>
                <td>Sat</td><td>1200</td>
              </tr>
              <tr>
                <td>Sun</td><td>1200</td>
              </tr>
            </table>
          </div>
          <div class='panel' id='p2'>
            <img src='../../media/Frozen2_poster.jpg' alt="Frozen 2 Poster">
            
            <h4 class='movTitle'>Frozen 2           G</span></h4>
            <table>
              <tr>
                <td>Mon</td><td>-</td>
              </tr>
              <tr>
                <td>Tue</td><td>-</td>
              </tr>
              <tr>
                <td>Wed</td><td>2100</td>
              </tr>
              <tr>
                <td>Thu</td><td>2100</td>
              </tr>
              <tr>
                <td>Fri</td><td>2100</td>
              </tr>
              <tr>
                <td>Sat</td><td>1800</td>
              </tr>
              <tr>
                <td>Sun</td><td>1800</td>
              </tr>
            </table>
          </div>
          <div class='panel' id='p3'>
            <img src='../../media/AN_poster.jpg' alt="The Aeronauts Poster">
            
            <h4 class='movTitle'>The Aeronauts            M</span></h4>
            <table>
              <tr>
                <td>Mon</td><td>1800</td>
              </tr>
              <tr>
                <td>Tue</td><td>1800</td>
              </tr>
              <tr>
                <td>Wed</td><td>-</td>
              </tr>
              <tr>
                <td>Thu</td><td>-</td>
              </tr>
              <tr>
                <td>Fri</td><td>-</td>
              </tr>
              <tr>
                <td>Sat</td><td>1500</td>
              </tr>
              <tr>
                <td>Sun</td><td>1500</td>
              </tr>
            </table>
          </div>
          <div class='panel' id='p4'>
            <img  src='../../media/JJR_poster.jpg' alt="JoJo Rabbit Poster">
            
            <h4 class='movTitle'>JoJo Rabbit            M</span></h4>
            <table>
              <tr>
                <td>Mon</td><td>-</td>
              </tr>
              <tr>
                <td>Tue</td><td>-</td>
              </tr>
              <tr>
                <td>Wed</td><td>1200</td>
              </tr>
              <tr>
                <td>Thu</td><td>1200</td>
              </tr>
              <tr>
                <td>Fri</td><td>1200</td>
              </tr>
              <tr>
                <td>Sat</td><td>2100</td>
              </tr>
              <tr>
                <td>Sun</td><td>2100</td>
              </tr>
            </table>
          </div>
          
        </section>
        <section class='mainSection parallax' id='Synopsis'>
          <div class='synopsisBox'>
            <h2>Synopsis</h2>
            <!-- Code copied directly from youtube video embed snippet -->
            <iframe class='trailer' width="560" height="315" src="https://www.youtube.com/embed/tL4McUzXfFI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
            <div class='synopsisText'>
              <h3> JoJo Rabbit                    M</h3>
              <!-- plot taken from https://www.google.com/search?q=jojo+rabbit+plot&oq=jojo+rabbit+plot&aqs=chrome..69i57j0l7.4953j0j4&sourceid=chrome&ie=UTF-8 -->
              <p class='plot'>Jojo is a lonely German boy who discovers that his single mother is hiding a Jewish girl in their 
                attic. Aided only by his imaginary friend -- Adolf Hitler -- Jojo must confront his blind nationalism 
                as World War II continues to rage on</p>
            </div>
            <div class='synopsisButtons'>
              <button>Mon -</button>
              <button>Tue -</button>
              <button>Wed 12pm</button>
              <button>Thu 12pm</button>
              <button>Fri 12pm</button>
              <button>Sat 9pm</button>
              <button>Sun 9pm</button>
            </div>
          </div>
        </section>
        <article class='mainSection parallax' id='PricingGuide'>
              <h2>Pricing Guide</h2>
          <div class='synopsisBox'>
            <table>
              <tr>
                <th>Seat Type</th>
                <th>Mon-Tue, and 12pm Wed-Fri</th>
                <th>Sat-Sun and after 12pm Wed-Fri</th>
              </tr>
              <tr>
                <th>Standard Adult</th>
                <td>15.00</td>
                <td>20.50</td>
              </tr>
              <tr>
                <th>Standard Concession</th>
                <td>13.00</td>
                <td>18.00</td>
              </tr>
              <tr>
                <th>Standard Child</th>
                <td>11.00</td>
                <td>15.50</td>
              </tr>
              <tr>
                <th>First Class Adult</th>>
                <td>25.00</td>
                <td>30.00</td>
              </tr>
              <tr>
                <th>First Class Concession</th>
                <td>23.00</td>
                <td>27.50</td>
              </tr>
              <tr>
                <th>First Class Child</th>
                <td>21.00</td>
                <td>25.00</td>
              </tr>  
            </table>
          </div>        

    
        </article>
        <article class='mainSection parallax' id='BookNow'>
          <img src='../../media/website-under-construction.png' alt="Under Construction">
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
