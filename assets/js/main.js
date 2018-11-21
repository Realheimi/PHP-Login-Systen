
$(document)
.on("submit", "form.js-register", function(event) {
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form); 
    var data = {
       email: $("input[type='email']", _form).val(),
       password: $("input[type='password']", _form).val()     
    }

    if(data.email.length < 16) {
        _error
            .text("Bitte eine gültige Email-Adresse eingeben")
            .show();
        return false;
    } else if(data.password.length < 8) {
        _error
            .text("Das Passwort muss mindestens 8 Zeichen haben")
            .show();
    }

    console.log(data);

    return false;

})
