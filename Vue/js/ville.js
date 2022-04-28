/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
   $('#codePostal').val("");
   $('#ville').empty();
   $('#codePostal').change(remplirVilles);
});


function remplirVilles() {
    $('#ville').empty();
    $.ajax({
        url: '../Public/traitementville.php',
        data: $('#codePostal').serialize(),
        dataType:'json',
        type:'GET',
        success: function (lesVilles, textStatus, jqXHR)
        {
            console.log("je suis la");
            $.each(lesVilles, function (key,val) {
               $('#ville').append('<option>' + val + '</option>'); 
            });
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            console.log("parametre : " + JSON.stringify(jqXHR));
            console.log("status : " + textStatus);
            console.log("erreur : " + errorThrown);
        }
    });
}


