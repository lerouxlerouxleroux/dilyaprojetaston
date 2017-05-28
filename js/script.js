function verif () {

if (document.formul.lastname.value == "") {
        alert ("Vous devez remplir tous les champs");
        document.formul.lastname.focus();
        document.formul.lastname.style.backgroundColor = ""
        return false;
    }


    var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (regex.test(document.getElementById('email').value))
        return true;  
    
    else {
        alert ('entrez email valide!')
    }
    
    return false;
}