function id()
{
		b=f.livraison.value;
		var valide1=false;
	var re = new RegExp("^[a-zA-Z0-9]+$", "g");
	    if(re.test(b)) 
    	{
    		valide1=true;  
    		
    	}

    	return valide1;

}	
function facture()
{
    b=f.facture.value;
    var valide1=false;
  var re = new RegExp("^[a-zA-Z0-9]+$", "g");
      if(re.test(b)) 
      {
        valide1=true;  
        
      }

      return valide1;

} 



function adresse()
{
    b=f.adresse.value;
    var valide1=false;
  var re = new RegExp("^[a-zA-Z0-9]+$", "g");
      if(re.test(b)) 
      {
        valide1=true;  
        
      }

      return valide1;
}   



function notif(text,color)
{
    var x=document.getElementById("toast");
        x.classList.add("show");
  x.innerHTML=text;
  x.style.backgroundColor=color;
  setTimeout(function(){
    x.classList.remove("show");
  },3000);
}

function tryy(){
  b=f.livraison.value;
  if(b.length>0)
  {
  if(id())  
  notif("Votre champ est valide","green");
  else
  notif("Veuillez saisir un nom ne contient pas des caractères speciaux","red");
  }
  else
    notif("Verifier Votre champ","red");
}

function show(){
  b=f.livraison.value;
  if(b.length>0)
  {
  if(id())  
  {
   if (facture())
   {
    if (adresse()) 
   notif("Votre champ est valide","green");   
  else
   notif("Veuillez saisir un champ ne contient pas des caractères speciaux","red");
}
   else
  notif("Veuillez saisir un champ ne contient pas des caractères speciaux","red");
  }
  else
  notif("Veuillez saisir un champ ne contient pas des caractères speciaux","red");
  }
  else
    notif("Verifier Votre champ","red");
}


	  $(document).ready(function () {
        $("#livraison").keyup(function () {   
            if(id()){
                $('#livraison').css('border','2px solid  green');
            }
            else
            {
                $('#livraison').css('border','2px solid  red');
            }
        })
    })



	  	  $(document).ready(function () {
        $("#facture").keyup(function () {   
            if(facture()){
                $('#facture').css('border','2px solid  green');
            }
            else
            {
                $('#facture').css('border','2px solid  red');
            }
        })
    })


	  	  	  	  $(document).ready(function () {
        $("#adresse").keyup(function () {   
            if(adresse()){
                $('#adresse').css('border','2px solid  green');
            }
            else
            {
                $('#adresse').css('border','2px solid  red');
            }
        })
    })

