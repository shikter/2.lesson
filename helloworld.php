<?php
	// helloworld


	/* Variable starts with $, 
	string has to use quotation 
	marksline ends with semicolon */
	$first_name = "Vadim";
	$last_name = "Kozlov";
	
	//show code to browser
	//for adding up numbers + sign
	//for adding up strings .
	echo $first_name." ".$last_name;

	/*
	< greater than
	> smaller than
	== equal
	<= smaller than or equal
	>= greater than or equal
	!= not equal
	*/
	
	$age = 24;
	
	//if age is smaller than or equal to 6, then you can sleep at lunchtime
	if($age <= 6){
		// it is ture
		echo " Yes you can sleep at lunchtime";
	}else{
		//it is false
		echo " no, you are at school";
	}
?>