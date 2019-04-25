document.getElementById("Livraisonn").addEventListener("submit" , function (e) {

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
	/*var IdLivraison = document.getElementById("IdLivraison");
	var AdresseLivraison = document.getElementById("AdresseLivraison");
	var NuméroFacture = document.getElementById("NuméroFacture");
	var IDLivreur = document.getElementById("IDLivreur");

    if (!IdLivraison.value)
    {
    	erreur = "veuillez renseigner un identifiant de livraison"
    }

     
*/

});