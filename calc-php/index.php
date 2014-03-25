<!DOCTYPE html>
<html>
 <head>
  <title>PhpMyTest</title>
  <meta charset="utf-8">
 </head>
 <body>


 <div style="color:green; display:flex; flex-direction: row;justify-content: center;align-items:center;">

  <form action="index.php" method="GET">
  <input name="op1" >	<input name="op2" >
 <select name="chose">
 	<option value="1">+</option>
 	<option value="2">-</option>
 	<option value="3">*</option>
 	<option value="4">/</option>
 	</select>
 <button type="submit">PUSH IT</button>
 </form>


  <?php
	header('Content-Type: text/html; charset=utf-8');
	if (isset($_GET["op1"]) and isset($_GET["op2"]) and isset($_GET["chose"]))
		{$get_op1 = $_GET["op1"];}
		{$get_op2 = $_GET["op2"];} 
		{$get_chose = $_GET["chose"];

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
    }}
/*	$dva=2;
	$tri=3;
	$res1=$dva + $tri;
	$res2=$dva - $tri;
	$res3=$dva * $tri;
	$res4=$dva / $tri;*/

	//echo "Hello World  <br>";
	//echo "<br>".$res1."<br>".$res2."<br>".$res3."<br>".$res4."<br>";
	//echo "<br>".$res1.$res4."<br>";

/*	$q1=0; 
	$q2=1; 
	$n=70;
	for ($i=0;$i<=$n;$i++)
	{	
		$q3=$q2;
		$q2=$q1+$q2;
		//echo $q1."<br>";
		$q1=$q3;
	}*/

?>
</div>
 </body>
</html>
