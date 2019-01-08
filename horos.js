function inItSite() {
    fetch('viewHoroscope.php', {
        method: 'GET',
    }).then(function(response){
        return response.json()
    }).then(function(data) {
        document.getElementById("tecken").innerHTML = data.name;
        document.getElementById("teckenInfo").innerHTML = data.signInfo;
    })
    
    }
    
    function addHoroscope() {
    
        var birthDate = document.forms["formular"]["datum"].value;
        //console.log(birthDate);
        var formData = new FormData();
        formData.append('birthDate', birthDate);
     
        fetch('addHoroscope.php', {
            method: 'POST',
             //credentials: 'include',
            body: formData
        }).then(function(response){
            if(response.status >= 200 && response.status < 300) {
                return response.text();
            }
            throw new Error(response.statusText)
        }).then(function(response){
            console.log(response);
        })

        inItSite();
    }