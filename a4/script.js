/* Insert your javascript here */



//Discounted is for mon-tue and 12pm Wed-Fri
var discountedPriceArray = {AdultStandard: {price: "15.00"}, 
                            ConcessionStandard: {price: "13.00"}, 
                            ChildrenStandard: {price: "11.00"},
                            AdultFClass: {price: "25.00"},
                            ConcessionFClass: {price: "23.00"},
                            ChildrenFClass: {price: "21.00"}
                        }
//Full price for Sat sun and after 12pm wed-fri                            
var fullPriceArray = {AdultStandard: {price: "20.50"}, 
                    ConcessionStandard: {price: "18.00"}, 
                    ChildrenStandard: {price: "15.50"},
                    AdultFClass: {price: "30.00"},
                    ConcessionFClass: {price: "27.50"},
                    ChildrenFClass: {price: "25.00"}
                }


//variables for seat onchange listeners
var childStandardSeats = document.getElementById('ChildrenStandard'); 
var adultStandardSeats = document.getElementById('AdultStandard');    
var concessionStandardSeats = document.getElementById('ConcessionStandard');
var childFCSeats       = document.getElementById('ChildrenFClass');   
var adultFCSeats       = document.getElementById('AdultFClass');   
var concessionFCSeats  = document.getElementById('ConcessionFClass');


var totalSalePrice = 0.00;
var currentSelectedDay;
var currentSelectedTime;


//variables for synopsis onclick listeners
var posterListener = document.getElementsByClassName('poster');
var synopsisPanels = document.getElementsByClassName('movieSynopsis');
var timeButtons = document.getElementsByClassName('movieTime');



window.onscroll = function() {
   
    //get everything within the nav section that is an anchor and place into an array
    var navLinkElements = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
    //retrieve all the elements that are articles 
    var articles = document.getElementsByTagName('main')[0].getElementsByTagName('article');
   
    
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
function alterSynopsisAndBookingDisplay (clickedPoster)
{
    let poster = clickedPoster.id;

    let synopsis;

    let bookingHeading = document.getElementById('bookingMovieTitle');

    //find the associated trailer id

    switch (poster)
    {
        case 'p1':
            synopsis = p1Synopsis;
            bookingHeading.innerHTML = "Star Wars ROTS";
            document.getElementById('movieId').setAttribute('value', 'ACT');
            break;
        case 'p2':
            synopsis = p2Synopsis; 
            bookingHeading.innerHTML = "Frozen 2";
            document.getElementById('movieId').setAttribute('value', 'ANM');
            break;
        case 'p3':
            synopsis = p3Synopsis; 
            bookingHeading.innerHTML = "The Aeronauts";
            document.getElementById('movieId').setAttribute('value', 'RMC');
            break;
        case 'p4':
            synopsis = p4Synopsis; 
            bookingHeading.innerHTML = "Jojo Rabbit";
            document.getElementById('movieId').setAttribute('value', 'AHF');
            break;
    }

    

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
}

//Updater for the price field in the booking form


function checkWeekend(day)
{
    day = toString(day);

    if (( day === "Sunday") || (day === "Saturday"))
    {
        return true;
    }
    else 
    {
        return false;
    }
}

function checkEarlyWeek(day, time)
{
    day = toString(day);
    time = toString(time);

    if ((day === "Monday") || ( day === "Tuesday") &&
        (time === "12pm"))
    {
        return true;
    }
    else 
    {
        return false;
    }
}




function setMovieDayTime(buttonPressed)
{
    buttonId = buttonPressed.id;
    

    let button = document.getElementById(buttonId);
    //split the string into an array of substrings so that we can take the day and time
    let selectionStrings = button.innerHTML;
    selectionStrings = selectionStrings.split(" ");
   
    let day = selectionStrings[0];
    let time = selectionStrings[1];

  

    let bookingTime = document.getElementById('bookingMovieTime');

    bookingTime.innerHTML = day + " " + time;

    currentSelectedDay = day;
    currentSelectedTime = time;
    
    //set the hidden form fields
    document.getElementById('movieDay').setAttribute('value', day);
    document.getElementById('movieHour').setAttribute('value', time);


   


}

function currentPrice(seat, currentSelectedDay, currentSelectedTime) 
{  
    var seatType = seat.id;
    var amount = seat.value;
    let seatPrice = 0;
    let salePrice;
    let totalField;
    amount = parseInt(amount);
    
    //maybe switch here based on who called the function to find what the seat price should be
    if((checkWeekend(currentSelectedDay)) || (checkEarlyWeek(currentSelectedDay, currentSelectedTime)))
    {
        seatPrice = discountedPriceArray[seatType]['price'];
       
        //convert to an integer
        seatPrice = parseInt(seatPrice);
        totalSalePrice += (seatPrice * amount);
       
    }
    else
    {
        seatPrice = fullPriceArray[seatType]['price'];
        seatPrice = parseInt(seatPrice);
       
        totalSalePrice += (seatPrice * amount);
        
    }
    
    //Need to ensure that the calculation is rounded to 2dp
    salePrice = totalSalePrice.toFixed(2);
    console.log(salePrice);
    totalField = document.getElementById('moneyField');
    
    totalField.setAttribute('value', salePrice);
    console.log(totalField);
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
   
    element.onclick = function () { alterSynopsisAndBookingDisplay(this) }
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

    element.onclick = function () { setMovieDayTime(this) };
    
}

