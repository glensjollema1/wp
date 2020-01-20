/* Insert your javascript here */

function navClicked(){
    /*get the id of the event element*/ 
    let currentId = event.currentTarget.id
    
    console.log(currentId+" was clicked");
   

    let elementsArray = document.getElementsByTagName('li');

    for(let element of elementsArray)
    {
        console.log(element);
        let navLinkClickTest = element.id;
        if(navLinkClickTest === currentId)
        {
             document.getElementById(navLinkClickTest).style.color = 'red';
            
        } 
        else 
        {
            document.getElementById(navLinkClickTest).style.color = 'white';
        }
        
    }
       
}