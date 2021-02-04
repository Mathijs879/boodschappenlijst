<?php 
  
    require "models/Boodschap.php";
    require "functions.php";
 
    

   
    $groceries = $app['database']->selectAll('groceries', "Boodschap");
    //dd($groceries);

    function total($groceries) {
    
        $total = 0;
        foreach($groceries as $grocery) {
            $total += $grocery->getSubTotal();
            
        }
        return $total;  
    }

    $total = total($groceries);
    
    require "views/index.view.php";

?>
