function id()
{
		b=f.IdProduit.value;
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

function stock()
{
		b=f.stock.value;
		var valide1=false;
	var re = new RegExp("^[0-9]+$", "g");
	    if(re.test(b)) 
    	{
    		valide1=true;  
    		
    	}

    	return valide1;
}		

function prix()
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
  b=f.IdProduit.value;
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
  b=f.IdProduit.value;
  if(b.length>0)
  {
  if(id())  
  {
   if (stock())
   {
    if (type()) 
  {
    if (prix()) 
    notif("Votre champ est valide","green");
  else
    notif("Veuillez saisir des nombres entiers","red");
  }
  else
   notif("Veuillez saisir des caractères","red");
}
   else
  notif("Veuillez saisir des nombres entiers","red");
  }
  else
  notif("Veuillez saisir un champ ne contient pas des caractères speciaux","red");
  }
  else
    notif("Verifier Votre champ","red");
}


	  $(document).ready(function () {
        $("#IdProduit").keyup(function () {   
            if(id()){
                $('#IdProduit').css('border','2px solid  green');
            }
            else
            {
                $('#IdProduit').css('border','2px solid  red');
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
        $("#stock").keyup(function () {   
            if(stock()){
                $('#stock').css('border','2px solid  green');
            }
            else
            {
                $('#stock').css('border','2px solid  red');
            }
        })
    })


 	  	  	  	  $(document).ready(function () {
        $("#Prix").keyup(function () {   
            if(prix()){
                $('#Prix').css('border','2px solid  green');
            }
            else
            {
                $('#Prix').css('border','2px solid  red');
            }
        })
    })


