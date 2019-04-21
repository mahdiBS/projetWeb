function id()
{
		b=f.IdSolde.value;
		var valide1=false;
	var re = new RegExp("^[a-zA-Z0-9]+$", "g");
	    if(re.test(b)) 
    	{
    		valide1=true;  
    		
    	}

    	return valide1;

}	
function Produit()
{
    b=f.Produit.value;
    var valide1=false;
  var re = new RegExp("^[0-9]+$", "g");
      if(re.test(b)) 
      {
        valide1=true;  
        
      }

      return valide1;

} 



function PourcentageSolde()
{
		b=f.PourcentageSolde.value;
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
  b=f.IdSolde.value;
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
  b=f.IdSolde.value;
  if(b.length>0)
  {
  if(id())  
  {
   if (Produit())
   {
    if (PourcentageSolde()) 
       {notif("Votre champ est valide","green");
     document.f.submit();}
  else
   notif("Veuillez saisir des nombres entiers","red");
}
   else
  notif("Veuillez saisir un champ ne contient pas des caractères speciaux et nombres","red");
  }
  else
  notif("Veuillez saisir un champ ne contient pas des caractères speciaux","red");
  }
  else
    notif("Verifier Votre champe","red");
}
function validesup()

{
  if(fsup.IDsolde.value){
if(confirm("vous voulez supprimer"))

{



document.fsup.submit();

}

}
        
}


	  $(document).ready(function () {
        $("#IdSolde").keyup(function () {   
            if(id()){
                $('#IdSolde').css('border','2px solid  green');
            }
            else
            {
                $('#IdSolde').css('border','2px solid  red');
            }
        })
    })



	  	  $(document).ready(function () {
        $("#Produit").keyup(function () {   
            if(Produit()){
                $('#Produit').css('border','2px solid  green');
            }
            else
            {
                $('#Produit').css('border','2px solid  red');
            }
        })
    })


	  	  	  	  $(document).ready(function () {
        $("#PourcentageSolde").keyup(function () {   
            if(PourcentageSolde()){
                $('#PourcentageSolde').css('border','2px solid  green');
            }
            else
            {
                $('#PourcentageSolde').css('border','2px solid  red');
            }
        })
    })