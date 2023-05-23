
$(document).ready(function() {
    $("#login").fadeIn(600); // Imposta il tempo in millisecondi per l'animazione
});

$(document).ready(function() {
    $("#login").addClass("visible");
});

function controlli_reg(){
    if (document.reg.nome.value == ""){
        alert("Devi inserire un nome");
        reg.nome.focus();
        return false;
    }
    if (document.reg.cognome.value == ""){
        alert("Devi inserire un cognome");
        reg.cognome.focus();
        return false;
    }
    if(document.reg.email.value == ""){
        alert("Devi indicare un indirizzo email");
        reg.email.focus();
        return false;
    }
    if(document.reg.pass1.value == ""){
        alert("Devi inserire una password");
        reg.pass1.focus();
        return false;
    }

    var valore=document.reg.email.value;

    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valore))){
       alert("L'indirizzo email che hai inserito non è valido");
       reg.email.focus();
       return false;
    }

    if(document.reg.password2.value != document.reg.pass1.value){
        alert("Le due password non corrispondono");
        reg.pass1.focus();
        reg.pass1.select();
        return false;
    }
    return true;
};

function controlli_login(){
    if(document.login.email.value == ""){
        alert("Devi indicare un indirizzo email nel form Login");
        reg.email.focus();
        return false;
    }
    if(document.login.password.value == ""){
        alert("Devi indicare un indirizzo email");
        reg.email.focus();
        return false;
    }

};


