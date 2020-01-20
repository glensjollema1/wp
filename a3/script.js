/* Insert your javascript here */

function navClicked(){
    /*get the id of the event element*/ 
    let currentId = event.currentTarget.id
    /*Debugging TODO remove before submission */
    console.log(currentId+" was clicked");
   

    let elementsArray = document.getElementsByTagName('li');

    for(let element of elementsArray)
    {
        console.log(element);
        let navLinkClickTest = element.id;
        if(navLinkClickTest === currentId)
        {
             document.getElementById(navLinkClickTest).classList.add("currentLink");
            
        } 
        else 
        {   
            /*TODO figure this out shouldnt be a continue, needs to test if the element has 
            the currentLink class and if so remove it*/
            continue;
        }
        
    }
       
}