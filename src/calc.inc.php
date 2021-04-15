<?php

    $prix_tablette = 800;
    $prix_pc = 500;
    $prix_portable = 700;

	if(isset($_SESSION["tablettes"])){
        $result_prix_tablettes = 0;
        $result_prix_pc = 0;
        $result_prix_portable = 0;
    }else
    $result_prix_tablettes = $_SESSION["tablettes"] * $prix_tablette;
    $result_prix_pc = $_SESSION["pc"] * $prix_pc;
    $result_prix_portable = $_SESSION["portable"] * $prix_portable; 
    }

    $prix_total = $result_prix_tablettes + $result_prix_pc + $result_portable;
	

    
		
?>