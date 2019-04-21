function id()
{
		b=f.livreur.value;
		var valide1=false;
	var re = new RegExp("^[a-zA-Z0-9]+$", "g");
	    if(re.test(b)) 
    	{
    		valide1=true;  
    		
    	}

    	return valide1;

}	
function secteur()
{
    b=f.secteur.value;
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
  b=f.livreur.value;
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
  b=f.livreur.value;
  if(b.length>0)
  {
  if(id())  
  {
   if (secteur())
   notif("Votre champ est valide","green");   
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
        $("#livreur").keyup(function () {   
            if(id()){
                $('#livreur').css('border','2px solid  green');
            }
            else
            {
                $('#livreur').css('border','2px solid  red');
            }
        })
    })



	  	  $(document).ready(function () {
        $("#secteur").keyup(function () {   
            if(secteur()){
                $('#secteur').css('border','2px solid  green');
            }
            else
            {
                $('#secteur').css('border','2px solid  red');
            }
        })
    })
