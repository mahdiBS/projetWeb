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
function prenom()
{
		b=f.preenom.value;
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

    	return valide1;
}		

function password()
{
	var valide1=false;
	b=f.paassword.value;
		    if(b.length>8) 
    	{
    		valide1= true;  
  
    	}
    	if(!valide1)
    	{
    		document.getElementById("passwordd").innerHTML="Veuillez saisir un password supérieur a 8";
    	}
    	else
    		document.getElementById("passwordd").innerHTML="";
    	return valide1;
}
 function mail()	
{
	a = f.usernameee.value;
	valide1 = false;
	for(var j=1;j<(a.length);j++) 
	{
		if(a.charAt(j)=='@')
		 {
			if(j<(a.length-4)) 
			{
				for(var k=j;k<(a.length-2);k++) 
				{
					if(a.charAt(k)=='.') 
						valide1=true;
				}
			}
		}
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
        $("#mail").keyup(function () {   
            if(mail()){
                $('#mail').css('border','2px solid  green');
            }
            else
            {
                $('#mail').css('border','2px solid  red');
            }
        })
    })



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
        $("#prenom").keyup(function () {   
            if(prenom()){
                $('#prenom').css('border','2px solid  green');
            }
            else
            {
                $('#prenom').css('border','2px solid  red');
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


 	  	  	  	  $(document).ready(function () {
        $("#password").keyup(function () {   
            if(password()){
                $('#password').css('border','2px solid  green');
            }
            else
            {
                $('#password').css('border','2px solid  red');
            }
        })
    })
