$(document).ready(function(){
   $("#adresseIdentique").click(cacher); 
});

function cacher(){
   $("#adresse").hide(); 
   $("#codePostal").hide(); 
   $("#ville").hide(); 
   
}
