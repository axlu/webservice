"use strict";

function delpost(id)
{
    // AJAX call to control.php
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {                    
        if (this.readyState == 4) {
            if (this.status == 200) {
                
                
            } else {
                // Något gick fel vid anropet
                console.log(this.statusText);
            }
        }
    };

    // save text "delete" and value from id in params
    var params = "delete=" + id;
    console.log(params);
    xhttp.open('POST', 'http://localhost/oktober/pub/control.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhttp.send(params);

}