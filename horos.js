function inItSite() {
    fetch('viewHoroscope.php', {
        method: 'GET',
    }).then(function(response){
        return response.json()
    }).then(function(data) {
        //console.log(data.name);
        //console.log(data.name.localeCompare("ERR"));

        /*Om det har returnerats ett riktigt horoskop (d.v.s. det finns ett horoskop i $SESSION)
        Skriv ut det i div:en på html-sidan */
        if(data.name.localeCompare("Error") != 0) {
            document.getElementById("tecken").innerHTML = data.name;
            document.getElementById("teckenInfo").innerHTML = data.signInfo;
        }
        //else gör ingenting
    })
    
    }
    
function addHoroscope() {
    
    var birthDate = document.forms["formular"]["datum"].value;
    var formData = new FormData();
    formData.append('birthDate', birthDate);
     
    fetch('addHoroscope.php', {
        method: 'POST',
        //credentials: 'include',
        body: formData
    }).then(function(response){
        if(response.status >= 200 && response.status < 300) {
            return response.text();
        }throw new Error(response.statusText)
    }).then(function(response){
       // console.log(response);
    })

    inItSite();
}