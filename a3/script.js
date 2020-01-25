/* Insert your javascript here */

//Variables to store total number of seats being purchased
var childStandardSeats      = 0;
var adultStandardSeats      = 0;
var concessionStandardSeats = 0;
var childFCSeats            = 0;
var adultFCSeats            = 0;
var concessionFCSeats       = 0;

 var priceArray = {             }

window.onscroll = function() {
    //console.clear();
    //get everything within the nav section that is an anchor and place into an array
    var navLinkElements = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
    //retrieve all the elements that are articles 
    var articles = document.getElementsByTagName('main')[0].getElementsByTagName('article');
    //console.log(articles);
    
    for (var i = 0; i < articles.length; i++)
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


function orderTotalField() 
{   
    let field = document.
}