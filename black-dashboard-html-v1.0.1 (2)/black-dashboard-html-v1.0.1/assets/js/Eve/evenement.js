function name1()
{
    b=f.Nom.value;
    var valide1=false;
  var re = new RegExp("^[a-zA-Z]+$", "g");
      if(re.test(b)) 
      {
        valide1=true;  
        
      }
      if(!valide1)
      {
        document.getElementById("NOM").innerHTML="Veuillez saisir un nom ne contient pas des caracteres speciaux";
      }
      else
        document.getElementById("NOM").innerHTML="";
      return valide1;

} 

function verifier()

  {
    date();
    
if(heure()==true && id()==true &&adresse()==true &&prix()==true &&nbr()==true &&name()==true&&date()==true)
      {
 notif("ajoute avec succes","green");
        document.f.submit();
        
       
        
      }


    else 
     {
       notif("Veuillez suivre les regles","red");

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

function date()
{
        b=f.Date.value;
        var re = new Date();
        var valide1=false;

x=(Number(b.substr(8, 2))+((Number(b.substr(5, 2))-1)*30)+(Number(b.substr(0, 4))*365))-((re.getMonth()*30)+re.getDate()+(re.getFullYear()*365 ));
var y=Number(b.substr(8, 2))-re.getMonth();
    
    
        if(x>0) 
        {
            valide1=true;  
            
        }
        if(!valide1)
        {
            document.getElementById("DATE").innerHTML="Veuillez saisir une date supérieure au date actuelle";
        }
        else
            document.getElementById("DATE").innerHTML="";
        return valide1;

}   





function heure()
{
        b=f.Heure.value;
        
        if(b!="")
        {
            return true;
        }
        else return false;

}  

function id()
{
        b=f.ID.value;
        
        if(b!="")
        {
            return true;
        }
        else return false;

}  

function adresse()
{
    b=f.ADRESSE.value;
    var valide1=false;
  var re = new RegExp("^[a-zA-Z0-9]+$", "g");
      if(re.test(b)) 
      {
        valide1=true;  
        
      }
      if(!valide1)
      {
        document.getElementById("ADR").innerHTML="Veuillez saisir un prenom ne contient pas des caracteres speciaux";
      }
      else
        document.getElementById("ADR").innerHTML="";
      return valide1;
}

function prix()
{
    b=f.PRIX.value;
    var valide1=false;
  var re = new RegExp("^[0-9]+$", "g");
      if(re.test(b)) 
      {
        valide1=true;  
        
      }
      if (!valide1)
      {
        document.getElementById("Prix").innerHTML="Veuillez saisir un numero contient  des nombres entiers";
      }
      else
        document.getElementById("Prix").innerHTML="";
      return valide1;
}   


function nbr()
{
        b=f.Nbr.value;
        var valide1=false;
    var re = new RegExp("^[0-9]+$", "g");
        if(re.test(b)) 
        {
            valide1=true;  
            
        }
        if (!valide1)
        {
            document.getElementById("NB").innerHTML="Veuillez saisir un numero contient  des nombres entiers";
        }
        else
            document.getElementById("NB").innerHTML="";
        return valide1;
}       




 



    $(document).ready(function () {
        $("#Nbr").keyup(function () {   
            if(nbr()){
                $('#Nbr').css('border','2px solid  green');
            }
            else
            {
                $('#Nbr').css('border','2px solid  red');
            }
        })
    })



        $(document).ready(function () {
        $("#Nom").keyup(function () {   
            if(name1()){
                $('#Nom').css('border','2px solid  green');
            }
            else
            {
                $('#Nom').css('border','2px solid  red');
            }
        })
    })


                $(document).ready(function () {
        $("#ADRESSE").keyup(function () {   
            if(adresse()){
                $('#ADRESSE').css('border','2px solid  green');
            }
            else
            {
                $('#ADRESSE').css('border','2px solid  red');
            }
        })
    })


                $(document).ready(function () {
        $("#PRIX").keyup(function () {   
            if(prix()){
                $('#PRIX').css('border','2px solid  green');
            }
            else
            {
                $('#PRIX').css('border','2px solid  red');
            }
        })
    })



                  $(document).ready(function () {
        $("#Date").keyup(function () {   
            if(date()){
                $('#Date').css('border','2px solid  green');
            }
            else
            {
                $('#Date').css('border','2px solid  red');
            }
        })
    })
