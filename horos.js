function inItSite() {
    
    fetch('viewHoroscope.php', {
        method: 'GET',
    }).then(function(response){
        return response.json()
    }).then(function(data) {
        
        /*Om det har returnerats ett riktigt horoskop (d.v.s. det finns ett horoskop i $SESSION)
        Skriv ut det i div:en på html-sidan */
        if(data.name.localeCompare("Error") != 0) {
            document.getElementById("tecken").innerHTML = "Du är " + data.name + ":";
            document.getElementById("teckenInfo").innerHTML = data.signInfo + ".";
            document.getElementById("signImg").src = "signImages/" + data.signImage;
            document.getElementById("signImg").style.visibility = "visible";
        }

    })
}
    
function addHoroscope() {
    
    var buttonTwo = document.getElementById("buttonTwo");
    var buttonThree = document.getElementById("buttonThree");
    buttonTwo.style.visibility = "visible";
    buttonThree.style.visibility = "visible";
 
    var birthDate = document.forms["formular"]["datum"].value;
    var formData = new FormData();
    formData.append('birthDate', birthDate);
     
    fetch('addHoroscope.php', {
        method: 'POST',
        credentials: 'include',
        body: formData
    }).then(function(response){
        if(response.status >= 200 && response.status < 300) {
            return response.text();
        }throw new Error(response.statusText)
    }).then(function(data){

    //om "true" finns i data så har POSTanropet gått bra. Uppdatera då sidan. Annars gör inget.
        if(data.localeCompare("true") == 0){          
            inItSite();
        }

    }) 
}

function updateHoroscope() {

    var birthDate = document.forms["formular"]["dates"].value;
     
    fetch('updateHoroscope.php', {
        method: 'PUT',
        credentials: 'include',
        body: birthDate
    }).then(function(response){
        if(response.status >= 200 && response.status < 300) {
            return response.text();
        }throw new Error(response.statusText)
    }).then(function(data){
    //om "true" finns i data så har PUTanropet gått bra. Uppdatera då sidan. Annars gör inget.
       if(data.localeCompare("true") == 0){
            inItSite();
       }
       
    })  
}

function deleteHoroscope() {

    var buttonTwo = document.getElementById("buttonTwo");
    var buttonThree = document.getElementById("buttonThree");
    buttonTwo.style.visibility = "hidden";
    buttonThree.style.visibility = "hidden";

    fetch('deleteHoroscope.php', {
    method: 'DELETE',
    }).then(function(response){
        return response.text()
    }).then(function(data) {

        /*Om det har returnerats ett riktigt horoskop (d.v.s. det finns ett horoskop i $SESSION)
        så "nollställ" div-en */
        if(data.localeCompare("true") == 1) {        
            document.getElementById("tecken").innerHTML = " ";
            document.getElementById("teckenInfo").innerHTML = " ";
            document.getElementById("signImg").style.visibility = "hidden";
            inItSite();
        }

    })  
}