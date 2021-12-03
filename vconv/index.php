<?php 
	
	//This is dividing the get content into array by using the star symbol. Every place in the content of the id with * will be treated as a new element in an array 
	$s = explode('*', $_GET['id']);

	//This if condition checks about the initial entrance and the size of the array if is 1 so that it can only deal with the first size of the array and return the value to the user 
	if(isset($s[0]) && count($s) == 1){
		echo "1. Enter voucher TNM/Airtel";
		echo "<br>";
		echo "2. Already Existing Airtime ";
		echo "<br>";
	}

	//This segment is checking if the user choice has been filled in the process and separate the choices acording to the user specification 
	elseif(isset($s[1]) && count($s) == 2){
		
		//If user has selected TNM will get this as a result on their view
		if($s[1] == '1'){
			echo "Welcome to TNM to Airtel";
			echo "<br>1. Enter TNM voucher number";
			echo "<br>";
			//Airtel Number 
		}

		//Same goes with this option that allows the user to get result of the Airtel based on their number selection
		elseif($s[1] == '2'){
			echo "Welcome to Airtel to TNM";
			echo "<br>1. Enter Airtel voucher number";
			echo "<br>";
			//TNM Number 
		}

		
	}


	//last is the option of the user after taking a step what is he/she going to be informed and get 

	elseif ($s[1] == '1' && count($s) == 3) {
		
			echo "Your voucher convetion to Airtel  is in progress ";
			echo "<br>You will be notified by sms shortly. <br>10% has been deducted from your original ammount";
	}

	elseif ($s[1] == '2' && count($s) == 3) {
		
			echo "Your voucher convetion to TNM  is in progress ";
			echo "<br>You will be notified by sms shortly. <br>10% has been deducted from your original ammount";
	}


	//What need to be done 
	/**
	 * When user select existing airtime in their phone
	 * Guide user to transfer the money to a certain number 
	 * tell user to confirm their transfer by providing you with the id of the transaction 
	 * Tell user to wait for the transaction of the voucher 
	 * Expect the recharged in the operators mobile and transfer the money to the user 
	 * /
	 */

	  

?>