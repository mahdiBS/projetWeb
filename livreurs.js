document.getElementById("Livreurs").addEventListener("submit" , function (e) {

	var erreur;
    var inputs = this.getElementsByTagName("input");

    for(var i = 0; i < inputs.length; i++)
    {
    	console.log(inputs[i]);
    	if (!inputs[i].value) 
    	{
    		erreur = "veuillez renseigner tous les champs";
    	}
    }
if (erreur)
     {
     	e.preventDefault();
     	document.getElementById("erreur").innerHTML = erreur ;
     	return false;
     } else 
     {
	alert('Formulaire envoyé !');     	
     }