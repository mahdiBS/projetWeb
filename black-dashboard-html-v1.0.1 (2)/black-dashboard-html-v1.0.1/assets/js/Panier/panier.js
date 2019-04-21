function id()
{
		b=f.IdPanier.value;
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
  b=f.IdPanier.value;
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




	  $(document).ready(function () {
        $("#IdPanier").keyup(function () {   
            if(id()){
                $('#IdPanier').css('border','2px solid  green');
            }
            else
            {
                $('#IdPanier').css('border','2px solid  red');
            }
        })
    })



