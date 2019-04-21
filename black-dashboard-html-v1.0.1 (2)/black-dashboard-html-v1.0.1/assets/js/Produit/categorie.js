function id()
{
		b=f.IdCategories.value;
		var valide1=false;
	var re = new RegExp("^[a-zA-Z0-9]+$", "g");
	    if(re.test(b)) 
    	{
    		valide1=true;  
    		
    	}

    	return valide1;

}	

function type()
{
    b=f.Type.value;
    var valide1=false;
  var re = new RegExp("^[a-zA-Z]+$", "g");
      if(re.test(b)) 
      {
        valide1=true;  
        
      }

      return valide1;

} 

function Marque()
{
		b=f.Marque.value;
		var valide1=false;
	var re = new RegExp("^[a-zA-Z]+$", "g");
	    if(re.test(b)) 
    	{
    		valide1=true;  
    		
    	}

    	return valide1;
}		

function Genre()
{
    b=f.Genre.value;
    var valide1=false;
  var re = new RegExp("^[a-zA-Z]+$", "g");
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
  b=f.IdCategories.value;
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
  b=f.IdCategories.value;
  if(b.length>0)
  {
  if(id())  
  {
   if (Marque())
   {
    if (type()) 
  {
    if (Genre()) 
    notif("Votre champ est valide","green");
  else
    notif("Veuillez saisir des caractères","red");
  }
  else
   notif("Veuillez saisir des caractères","red");
}
   else
  notif("Veuillez saisir des caractères","red");
  }
  else
  notif("Veuillez saisir un champ ne contient pas des caractères speciaux","red");
  }
  else
    notif("Verifier Votre champ","red");
}


	  $(document).ready(function () {
        $("#IdCategories").keyup(function () {   
            if(id()){
                $('#IdCategories').css('border','2px solid  green');
            }
            else
            {
                $('#IdCategories').css('border','2px solid  red');
            }
        })
    })



	  	  $(document).ready(function () {
        $("#Type").keyup(function () {   
            if(type()){
                $('#Type').css('border','2px solid  green');
            }
            else
            {
                $('#Type').css('border','2px solid  red');
            }
        })
    })


	  	  	  	  $(document).ready(function () {
        $("#Marque").keyup(function () {   
            if(Marque()){
                $('#Marque').css('border','2px solid  green');
            }
            else
            {
                $('#Marque').css('border','2px solid  red');
            }
        })
    })


 	  	  	  	  $(document).ready(function () {
        $("#Genre").keyup(function () {   
            if(Genre()){
                $('#Genre').css('border','2px solid  green');
            }
            else
            {
                $('#Genre').css('border','2px solid  red');
            }
        })
    })


