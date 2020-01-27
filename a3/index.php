
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
    <!-- class title means the background image should sretch to cover nav region-->
    <nav class="title">
        <ul class="links">
          <li id="aboutLink" ><a href="#AboutUs">About Us</a></li>
          <li id='upgradeLink'><a href="#upgrades">Upgrades</a></li>
          <li id='nowShowingLink'><a href="#NowShowing">Now Showing</a></li>
          <li id='synopsisLink'><a href="#Synopsis">Synopsis</a></li>
          <li id='pricingLink'><a href="#PricingGuide">Pricing Guide</a></li>
          <li id='bookNowLink'><a href="#BookNow">Book Now</a></li>
          <li id='contactLink'><a href="#contact">Contact</a></li>
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
        <article class='mainSection parallax' id='NowShowing'>
          <h2>Now Showing</h2>
          <div class='panel poster' id='p1'>
            <img  src='../../media/SW_ROTS_poster.jpg' alt="Star Wars The Rise of Skywalker Poster">
            
            <h4 class='movTitle'>Star Wars TROS           M</h4>
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
          <div class='panel poster' id='p2'>
            <img src='../../media/Frozen2_poster.jpg' alt="Frozen 2 Poster">
            
            <h4 class='movTitle'>Frozen 2           G</h4>
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
          <div class='panel poster' id='p3'>
            <img src='../../media/AN_poster.jpg' alt="The Aeronauts Poster">
            
            <h4 class='movTitle'>The Aeronauts            M</h4>
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
          <div class='panel poster' id='p4'>
            <img  src='../../media/JJR_poster.jpg' alt="JoJo Rabbit Poster">
            
            <h4 class='movTitle'>JoJo Rabbit            M</h4>
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
          
        </article>
        <article class='mainSection parallax' id='Synopsis'>
          <div class='synopsisBox'>
            <h2>Synopsis</h2>
            <!-- Code copied directly from youtube video embed snippet -->
            <section class="movieSynopsis" id="p4Synopsis">
              <iframe class='trailer' width="50%" height="40%" src="https://www.youtube.com/embed/tL4McUzXfFI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
              <div class='synopsisText'>
                <h3> JoJo Rabbit                    M</h3>
                <!-- plot taken from https://www.google.com/search?q=jojo+rabbit+plot&oq=jojo+rabbit+plot&aqs=chrome..69i57j0l7.4953j0j4&sourceid=chrome&ie=UTF-8 -->
                <p class='plot'>Jojo is a lonely German boy who discovers that his single mother is hiding a Jewish girl in their 
                  attic. Aided only by his imaginary friend -- Adolf Hitler -- Jojo must confront his blind nationalism 
                  as World War II continues to rage on</p>
              </div>
              <div class='synopsisButtons'>
                <button class='movieTime Monday' id='p4Mon'>Mon -</button>
                <button class='movieTime Tuesday' id='p4Tue'>Tue -</button>
                <button class='movieTime Wednesday' id='p4Wed'>Wed 12pm</button>
                <button class='movieTime Thursday' id='p4Thu'>Thu 12pm</button>
                <button class='movieTime Friday' id='p4Fri'>Fri 12pm</button>
                <button class='movieTime Saturday' id='p4Sat'>Sat 9pm</button>
                <button class='movieTime Sunday' id='p4Sun'>Sun 9pm</button>
              </div>
            </section>
            <section class="movieSynopsis" id="p1Synopsis" >
            <iframe class='trailer' width="560" height="315" src="https://www.youtube.com/embed/8Qn_spdM5Zg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
              <div class='synopsisText'>
                <h3> Star Wars TROS           M</h3>
                <!-- plot taken from https://www.google.com/search?rlz=1C1CHBF_en-GBAU823AU834&ei=8L8sXveLO6fVz7sP97uH-Ac&q=star+wars+the+rise+of+skywalker+synopsis&oq=star+wars++synopsis&gs_l=psy-ab.1.0.0i7i30l3j0j0i7i30l6.7499.9032..10077...2.3..0.178.976.0j6......0....1..gws-wiz.......0i71j0i8i7i30j0i13.L-IdU2Rmkx8 -->
                <p class='plot'>When it's discovered that the evil Emperor Palpatine did not die at the hands of Darth Vader,
                   the rebels must race against the clock to find out his whereabouts. Finn and Poe lead the Resistance
                   to put a stop to the First Order's plans to form a new Empire, while Rey anticipates her inevitable 
                    confrontation with Kylo Ren.</p>
              </div>
              <div class='synopsisButtons'>
                <button class='movieTime Monday' id='p1Mon'>Mon 1200</button>
                <button class='movieTime Tuesday' id='p1Tue'>Tue 1200</button>
                <button class='movieTime Wednesday' id='p1Wed'>Wed 1800</button>
                <button class='movieTime Thursday' id='p1Thu'>Thu 1800</button>
                <button class='movieTime Friday' id='p1Fri'>Fri 1800</button>
                <button class='movieTime Saturday' id='p1Sat'>Sat 1200</button>
                <button class='movieTime Sunday' id='p1Sun'>Sun 1200</button>
              </div>
            </section>

            <section class="movieSynopsis" id="p2Synopsis" >
            <iframe class="trailer" width="560" height="315" src="https://www.youtube.com/embed/Zi4LMpSDccc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
              <div class='synopsisText'>
                <h3> Frozen 2           PG</h3>
                <!-- plot taken from https://www.google.com/search?rlz=1C1CHBF_en-GBAU823AU834&ei=_L8sXoa8BvTZz7sP6_Kn8AM&q=frozen+2+synopsis&oq=frozen+2+sy&gs_l=psy-ab.3.0.0l10.1381064.1384000..1385134...0.3..1.896.2116.0j2j0j1j0j1j1......0....1..gws-wiz.......0i71j0i67j0i131.HNIaPcMWirs -->
                <p class='plot'>Elsa the Snow Queen has an extraordinary gift -- the power to create
                   ice and snow. But no matter how happy she is to be surrounded by the people of Arendelle,
                    Elsa finds herself strangely unsettled. After hearing a mysterious voice call out
                    to her, Elsa travels to the enchanted forests and dark seas beyond her kingdom --
                    an adventure that soon turns into a journey of self-discovery.</p>
              </div>
              <div class='synopsisButtons'>
                <button class='movieTime Monday' id='p2Mon'>Mon -</button>
                <button class='movieTime Tuesday' id='p2Tue'>Tue -</button>
                <button class='movieTime Wednesday' id='p2Wed'>Wed 2100</button>
                <button class='movieTime Thursday' id='p2Thu'>Thu 2100</button>
                <button class='movieTime Friday' id='p2Fri'>Fri 2100</button>
                <button class='movieTime Saturday' id='p2Sat'>Sat 1800</button>
                <button class='movieTime Sunday' id='p2Sun'>Sun 1800</button>
              </div>
            </section>

            <section class="movieSynopsis" id="p3Synopsis" >
            <iframe class='trailer' width="560" height="315" src="https://www.youtube.com/embed/Rm4VnwCtQO8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
              <div class='synopsisText'>
                <h3> The Aeronauts           M</h3>
                <!-- plot taken from https://www.google.com/search?rlz=1C1CHBF_en-GBAU823AU834&ei=8L8sXveLO6fVz7sP97uH-Ac&q=star+wars+the+rise+of+skywalker+synopsis&oq=star+wars++synopsis&gs_l=psy-ab.1.0.0i7i30l3j0j0i7i30l6.7499.9032..10077...2.3..0.178.976.0j6......0....1..gws-wiz.......0i71j0i8i7i30j0i13.L-IdU2Rmkx8 -->
                <p class='plot'>In 1862 headstrong scientist James Glaisher and wealthy young widow
                   Amelia Wren mount a balloon expedition to fly higher than anyone in history. As 
                   their perilous ascent reduces their chances of survival, the unlikely duo soon discover 
                   things about themselves -- and each other -- that help both of them find their place in
                   the world.</p>
              </div>
              <div class='synopsisButtons'>
                <button class='movieTime Monday' id='p3Mon'>Mon 1800</button>
                <button class='movieTime Tuesday' id='p3Tue'>Tue 1800</button>
                <button class='movieTime Wednesday' id='p3Wed'>Wed -</button>
                <button class='movieTime Thursday' id='p3Thu'>Thu -</button>
                <button class='movieTime Friday' id='p3Fri' >Fri -</button>
                <button class='movieTime Saturday' id='p3Sat'>Sat 1500</button>
                <button class='movieTime Sunday' id='p3Sun' >Sun 1500</button>
              </div>
            </section>



          </div>
        </article>
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
                <th>First Class Adult</th>
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
          <div class='bookingBox'>
            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" method="post" onsubmit="return checkForm()">
              <div class='panel' id='standardBooking'> 
                <h3>Standard Seating</h3>
                <div class='bookingCombo' id='standard'>
                  <p class='AdultsAlign'>
                   
                  <select id='AdultStandard' name='seats[STA]'>
                    
                      <option value='0' selected>0</option>
                      <option value='1'>1</option>
                      <option value='2'>2</option>
                      <option value='3'>3</option>
                      <option value='4'>4</option>
                      <option value='5'>5</option>
                      <option value='6'>6</option>
                      <option value='7'>7</option>
                      <option value='8'>8</option>
                      <option value='9'>9</option>
                      <option value='10'>10</option>
                    </select>
                    <label for='seats[STA]'>Adults</label>
                  </p>
                  <p class='ConcessionAlign'>  
                  
                  <select id='ConcessionStandard' name='seats[STP]'>
                    <option value='0' selected>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                  </select>
                  <label for='seats[STP]'>Concession</label>
                  </p>
                  <p class='ChildrenAlign'>
                  
                  <select id='ChildrenStandard' name='seats[STC]'>
                    <option value='0' selected>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                  </select>
                  <label for='seats[STC]'>Children</label>
                  </p>

                </div>
                

              </div>
              
              <div class='panel' id='FClassBooking'> 
                <h3>First Class Seating</h3>
              
                <div class='bookingCombo' id='FClass'>
                  <p class='AdultsAlign'>
                   
                  <select id='AdultFClass' name='seats[FCA]'>
                    
                      <option value='0' selected>0</option>
                      <option value='1'>1</option>
                      <option value='2'>2</option>
                      <option value='3'>3</option>
                      <option value='4'>4</option>
                      <option value='5'>5</option>
                      <option value='6'>6</option>
                      <option value='7'>7</option>
                      <option value='8'>8</option>
                      <option value='9'>9</option>
                      <option value='10'>10</option>
                    </select>
                    <label for='seats[FCA]'>Adults</label>
                  </p>
                  <p class='ConcessionAlign'>  
                  
                  <select id='ConcessionFClass' name='seats[FCP]'>
                    <option value='0' selected>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                  </select>
                  <label for='seats[FCP]'>Concession</label>
                  </p>
                  <p class='ChildrenAlign'>
                  
                  <select id='ChildrenFClass' name='seats[FCC]'>
                    <option value='0' selected>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                  </select>
                  <label for='seats[FCC]'>Children</label>
                  </p>

                </div>
                

            </div>

              <div class='panel' id='CustomerInfo'>
                <h3>Customer Info</h3>
                <p>
                <label for='customerName'>Name: </label>
                <input type='text' name='cust[name]' placeholder='eg. John Smith'/>
                
                </p>
                <p>
                <label for='customerEmail'>Email: </label>
                <input type='email' name='cust[email]' placeholder='eg. bat@man.com'/>
               
                </p>
                <p>
                <label for='customerPhone'>Mobile: </label>
                <input type='number' name='cust[mobile]' placeholder='eg. 0412345678 (no spaces)'/>
                
                </p>
                <p>
                <label for='customerCC'>Credit Card: </label>
                <input type='number' name='cust[card]' placeholder='1234567890123456 (no spaces)'/>
               
                </p>
                <p>
                <label for='ccExpiry'>Expiry:</label>
                <input type='month' name='cust[expiry]' min="2020/01" placeholder='YYYY/MM'/>
                
                </p>

                <input class='hide' type='text' id='movieId' name='movie[id]' hidden>
                <input class='hide' type='text' id='movieDay' name='movie[day]' hidden>
                <input class='hide' type='text' id='movieHour' name='movie[hour]' hidden> 

              </div>
              <p id='customerFormSubmit' >
                
              </p>
              
              <div class="panel" id="customerFormSubmit">
                <label for='moneyField'>Total $</label>
                <input type='number' id='moneyField' name='moneyField' placeholder='0.00' readonly>
                <input id="orderButton" type='submit' value='Order'>
              </div>              
            </form>
          </div>
        </article> 
        

    </main>
  </div>
    <footer id='contact'>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> admin@lunardo.com.au PH: +61188448844 Glen Sjollema S3353578. <a href="https://github.com/glensjollema1/wp.git">Visit the project on GitHub</a>
      Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      
    </footer>

  </body>
  <script src='script.js'></script>
</html>
