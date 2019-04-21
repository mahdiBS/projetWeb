function id()
{
		b=f.IdAvis.value;
		var valide1=false;
	var re = new RegExp("^[a-zA-Z0-9]+$", "g");
	    if(re.test(b)) 
    	{
    		valide1=true;  
    		
    	}

    	return valide1;

}	
function NomEvenement()
{
    b=f.NomEvenement.value;
    var valide1=false;
  var re = new RegExp("^[a-zA-Z]+$", "g");
      if(re.test(b)) 
      {
        valide1=true;  
        
      }

      return valide1;

} 

function ddate()
{
    b=f.Date.value;
    var valide1=false;
  var re = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
      if(re.test(b)) 
      {
        valide1=true;  
        
      }

      return valide1;

} 

function Quantité()
{
		b=f.Quantité.value;
		var valide1=false;
	var re = new RegExp("^[0-9]+$", "g");
	    if(re.test(b)) 
    	{
    		valide1=true;  
    		
    	}

    	return valide1;
}		

function Prix()
{
    b=f.Prix.value;
    var valide1=false;
  var re = new RegExp("^[0-9]+$", "g");
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
  b=f.IdAvis.value;
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
  b=f.IdAvis.value;
  if(b.length>0)
  {
  if(id())  
  {
   if (NomEvenement())
   {
    if (ddate()) 
  {
    if (Quantité())
    {
      if(Prix())
        notif("Votre champ est valide","green");
      else
            notif("Veuillez saisir des nombres entiers","red");
    } 
    
  else
    notif("Veuillez saisir des nombres entiers","red");
  }
  else
   notif("Veuillez saisir une date valide Exp:01/01/2001","red");
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
        $("#IdAvis").keyup(function () {   
            if(id()){
                $('#IdAvis').css('border','2px solid  green');
            }
            else
            {
                $('#IdAvis').css('border','2px solid  red');
            }
        })
    })



	  	  $(document).ready(function () {
        $("#NomEvenement").keyup(function () {   
            if(NomEvenement()){
                $('#NomEvenement').css('border','2px solid  green');
            }
            else
            {
                $('#NomEvenement').css('border','2px solid  red');
            }
        })
    })


	  	  	  	  $(document).ready(function () {
        $("#Date").keyup(function () {   
            if(ddate()){
                $('#Date').css('border','2px solid  green');
            }
            else
            {
                $('#Date').css('border','2px solid  red');
            }
        })
    })


 	  	  	  	  $(document).ready(function () {
        $("#Quantité").keyup(function () {   
            if(Quantité()){
                $('#Quantité').css('border','2px solid  green');
            }
            else
            {
                $('#Quantité').css('border','2px solid  red');
            }
        })
    })

                                $(document).ready(function () {
        $("#Prix").keyup(function () {   
            if(Prix()){
                $('#Prix').css('border','2px solid  green');
            }
            else
            {
                $('#Prix').css('border','2px solid  red');
            }
        })
    })


