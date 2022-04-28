function validateLogin(){
    let login = $("#mail").val();
    let pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
    $("#mail").next('p').remove();
    if (pattern.test(mail)){
        $("<p style='display:inline;color:green'>mail valide</p>").insertAfter("#mail");
    } else {
        $("<p style='display:inline;color:red'>Le mail doit être au format adresse.mail@gmail.com \n\
        </p>").insertAfter("#mail");
    }
}
$(document).ready(function(){
    $("#mail").keyup(validateLogin);
});

