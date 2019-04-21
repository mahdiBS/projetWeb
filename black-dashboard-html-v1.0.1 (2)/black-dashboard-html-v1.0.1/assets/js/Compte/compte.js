function name()
{
		b=f.noom.value;
		var valide1=false;
	var re = new RegExp("^[a-zA-Z0-9]+$", "g");
	    if(re.test(b)) 
    	{
    		valide1=true;  
    		
    	}

    	return valide1;

}	
function numero()
{
		b=f.nuumero.value;
		var valide1=false;
	var re = new RegExp("^[0-9]+$", "g");
	    if(re.test(b)) 
    	{
    		valide1=true;  
    		
    	}
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
  b=f.noom.value;
  if(b.length>0)
  {
  if(name())  
  notif("Votre champ est valide","green");
  else
  notif("Veuillez saisir un nom ne contient pas des caractères speciaux","red");
  }
  else
    notif("Verifier Votre champ","red");
}

function show(){
  b=f.noom.value;
  c=f.nuumero.value;
  if(b.length>0)
  {
  if(name())  
  {
   if (numero())
  notif("Votre champ est valide","green");
   else
  notif("Veuillez saisir des points contient  des nombres entiers","red");
  }
  else
  notif("Veuillez saisir un nom ne contient pas des caractères speciaux","red");
  }
  else
    notif("Verifier Votre champ","red");
}





	  	  $(document).ready(function () {
        $("#nom").keyup(function () {   
            if(name()){
                $('#nom').css('border','2px solid  green');
            }
            else
            {
                $('#nom').css('border','2px solid  red');
            }
        })
    })



 	  	  	  	  $(document).ready(function () {
        $("#numero").keyup(function () {   
            if(numero()){
                $('#numero').css('border','2px solid  green');
            }
            else
            {
                $('#numero').css('border','2px solid  red');
            }
        })
    })

