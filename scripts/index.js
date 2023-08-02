
var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");


//defining the opentab function
function opentab(tabname){
    //for skills , experience and eduction
    for(tablink of tablinks){
        tablink.classList.remove("active-link");

    }
    //for the content of skills , eduction and experience.
    for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
        
    }
    //display the underline title of the remaining active link
    //experience, education
   event.currentTarget.classList.add("active-link");

    //Now display the content of the above active link
    //Send education id to the tabname
    document.getElementById(tabname).classList.add("active-tab")
}


 //Sending a successful message after form submission
 /** 
 const form = document.querySelector('form');
const mesage = document.getElementById("mesage-success");
form.addEventListener('submit', (e) => {
  e.preventDefault();
  mesage.classList.add('show');
  mesage.innerHTML ="Message was sent sucessfully";
  setTimeout( () => form.submit(),2000  );
} );
*/

//Reset the form ones the data is submittedd
//document.getElementById("portfolioForm").reset();

/** 
//This code change the submit button to submitted
//Thereby telling the user that the the details enter was
// successfully subumitted.
function checkForm(form1){
    form1.powerBut.disabled=true;
    form1.powerBut.value = "Submitted";
    return true;
}

*/

//Code of  form
let popup = document.getElementById("pop-up");

function openPopup(){
    popup.classList.add("formon11");
}




  

