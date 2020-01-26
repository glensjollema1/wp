/* Insert your javascript here */



//Discounted is for mon-tue and 12pm Wed-Fri
var discountedPriceArray = {AdultStandard: 15.00, 
                            ConcessionStandard: 13.00, 
                            ChildrenStandard: 11.00,
                            AdultFClass: 25.00,
                            ConcessionFClass: 23.00,
                            ChildrenFClass: 21.00
                        }
//Full price for Sat sun and after 12pm wed-fri                            
var fullPriceArray = {AdultStandard: 20.50, 
                    ConcessionStandard: 18.00, 
                    ChildrenStandard: 15.50,
                    AdultFClass: 30.00,
                    ConcessionFClass: 27.50,
                    ChildrenFClass: 25.00
                }


//variables for seat onchange listeners
var childStandardSeats = document.getElementById('ChildrenStandard'); 
var adultStandardSeats = document.getElementById('AdultStandard');    
var concessionStandardSeats = document.getElementById('ConcessionStandard');
var childFCSeats       = document.getElementById('ChildrenFClass');   
var adultFCSeats       = document.getElementById('AdultFClass');   
var concessionFCSeats  = document.getElementById('ConcessionFClass');


var totalSalePrice = 0.00;

//variables for synopsis onclick listeners
var posterListener = document.getElementsByClassName('poster');
var synopsisPanels = document.getElementsByClassName('movieSynopsis');
var timeButtons = document.getElementsByClassName('movieTime');



window.onscroll = function() {
    //console.clear();
    //get everything within the nav section that is an anchor and place into an array
    var navLinkElements = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
    //retrieve all the elements that are articles 
    var articles = document.getElementsByTagName('main')[0].getElementsByTagName('article');
    //console.log(articles);
    
    for (let i = 0; i < articles.length; i++)
    {   
        //get y postion of the top of the article and the total height of the article
        //adding these together will produce the Y value of where the section ends.
        var topBounds = articles[i].offsetTop;
        var bottomBounds = topBounds + articles[i].offsetHeight;

        if (window.scrollY >= topBounds && window.scrollY < bottomBounds)
        {
            //if we are within the bounds of this article add the currentLink css class
            navLinkElements[i].classList.add('currentLink');
        }
        else
        {
            //if not, remove the currentLink class
            navLinkElements[i].classList.remove('currentLink');
        }
    }

}


//this function allows the user to click on the movie poster and it will alter the synopsis panel accordingly
function alterSynopsisDisplay (clickedPoster)
{
    let poster = clickedPoster.id;

    let synopsis;

    //find the associated trailer id

    switch (poster)
    {
        case 'p1':
            synopsis = p1Synopsis;
            break;
        case 'p2':
            synopsis = p2Synopsis; 
            break;
        case 'p3':
            synopsis = p3Synopsis; 
            break;
        case 'p4':
            synopsis = p4Synopsis; 
            break;
    }

    console.log(synopsis);

    //first reset all to hidden...
    //for some reason just wrapping it in the if else loop didnt reset the other panels to hidden -- 
    //need to debug this if I can find the time because doing two loops like this probably wont scale well
    for (i = 0; i < synopsisPanels.length; i++)
    {
        synopsisPanels[i].style.visibility = 'hidden';
    }

    for (let j = 0; j < synopsisPanels.length; j++)
    {
        let idString = toString(synopsis.id);
        let comparisonString = toString(synopsisPanels[j].id);
        
        if (comparisonString === idString)
        {
           synopsis.style.visibility = 'visible';
        }
     
    }


   // console.log(clickedPoster.id);
}

//Updater for the price field in the booking form


function checkWeekend(buttonPressed)
{
    let buttonId = buttonPressed.id;
    let button = document.getElementById(buttonId);

    if ((button.classList.contains(Sunday)) || (button.classList.constains(Saturday)))
    {
        return true;
    }
    else {
        return false;
    }
}

function cheapTickets(buttonPressed)
{

}

function setMovieDayTime(buttonPressed)
{
    buttonId = buttonPressed.id;
    console.log('you pressed ' + buttonId);

    let button = document.getElementById(buttonId);

    if((checkWeekend(button)) || (checkEarlyWeek(button)))
    {
        cheapTickets(button);
    }
    else
    {
        fullTickets(button);
    }


}

function currentPrice(seat) 
{  
    var seatType = seat.id;
    var amount = seat.value;
    amount = parsInt(amount);
    console.log("My id is " + seatType);
    console.log("My value is " + amount);
    //maybe switch here based on who called the function to find what the seat price should be
    
    
    //Need to ensure that the calculation is rounded to 2dp
    document.getElementById('moneyField').innerhtml = totalSalePrice.toFixed(2);
}

//initially set all synopsis panels to hidden

for (let i = 0; i < synopsisPanels.length; i++)
{
    synopsisPanels[i].style.visibility = 'hidden';
}


for (let i = 0; i < posterListener.length; i++)
{
    let currentId = posterListener[i].id;
    let element = document.getElementById(currentId);

    element.onclick = function () { alterSynopsisDisplay(this) }
}

 

childStandardSeats.onchange = function () { currentPrice(this) }
adultStandardSeats.onchange = function () { currentPrice(this) }
concessionStandardSeats.onchange = function () { currentPrice(this) }
childFCSeats.onchange = function () { currentPrice(this) }
adultFCSeats.onchange = function () { currentPrice(this) }
concessionFCSeats.onchange = function () { currentPrice(this) }


for (let i = 0; i < timeButtons.length; i++)
{
    let currentId = timeButtons[i].id;
    let element = document.getElementById(currentId);

    element.onclick = function () { setMovieDayTime(this) }
}

