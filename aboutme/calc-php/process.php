<?php 
	
	$get_op1 = $_GET["op1"]; 
	$get_op2 = $_GET["op2"]; 
	$get_chose = $_GET["chose"]; 

	switch ($get_chose) {
    	case 1:
    	    echo $get_op1+$get_op2;
    	    break;
    	case 2:
    	    echo $get_op1-$get_op2;
    	    break;
    	case 3:
    	    echo $get_op1*$get_op2;
    	    break;
    	case 4:
    		if ($get_op2)
    	    	echo $get_op1/$get_op2;
    	    else echo "NOPE";
    	    break;
    }
?>