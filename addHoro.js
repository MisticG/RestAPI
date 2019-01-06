function addDate() {

    var birthDate = document.forms["formular"]["datum"].value;

    var formData = new FormData();
    formData.append('birthDate', birthDate);

    fetch('addHoroscope.php', {
        method: 'POST',
        credentials: 'include',
        /*headers: {
            "Content-type": "application/json; charset=UTF-8"},*/
        body: formData
    }).then(function(response){
        alert(response.status)
        if(response.status >= 200 && response.status < 300) {
            return response.text();
        }
        throw new Error(response.statusText)
    }).then(function(response){
        console.log(response);
    })
    
    /*$.ajax({
        type: 'POST',
        url: 'addHoroscope.php',
        data: $(birthDate).serialize(),
        success: function(data) {
            console.log('API', birthDate);
            if (data.authenticated) {
                alert('it works! ' + birthDate.saveHoro);
            } else {
                alert('it does not work =( ');
            }
        } 
    });*/
};
