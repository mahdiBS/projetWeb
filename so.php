<?php
function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "gestion");
    $result = mysqli_query($connect, $query);
    return $result;
}
class Sort{ 


// Ascending Order





    function sortsolde(){
        
if(isset($_POST['ASC']))
{
    $asc_query = "SELECT * FROM solde ORDER BY Nouveauprix ASC";
    $result = executeQuery($asc_query);
    return $result;
}

// Descending Order
elseif (isset ($_POST['DESC'])) 
    {
          $desc_query = "SELECT * FROM solde ORDER BY Nouveauprix DESC";
          $result = executeQuery($desc_query);
    return $result;

    }
    
    // Default Order
 else {
        $default_query = "SELECT * FROM solde";
        $result = executeQuery($default_query);
    return $result;

}

}
}
?>