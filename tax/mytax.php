<?php

	if(isset($_POST['submit'])) {
		
		$dependents=$_POST['dependents'];
		$income=$_POST['income'];
		$message=" <br> Tax slabs are: <br> 
				   1. Annual Income<100000, Tax=0 <br> 
				   2. Annual Income<250000 & Annual Income>=100000, Tax=(income*0.5%)-(dependents*0.2%*income) <br>
				   3. Annual Income<500000 & Annual Income>=250000, Tax=(income*1%)-(dependents*0.15%*income) <br>
				   4. Annual Income>=500000, Tax=(income*1.5%)-(dependents*0.1%*income) <br> ";
		
		if($income<100000){
		$totaltax=0;
		}
		if($income>=100000 && $income<250000){
		$totaltax=($income*0.005)-($dependents*0.002*$income);
		}
		if($income>=250000 && $income<500000){
		$totaltax=($income*0.01)-($dependents*0.0015*$income);
		}
		if($income>=500000){
		$totaltax=($income*0.015)-($dependents*0.001*$income);
		}
		
		echo "your annual income is:";
		echo $income;
		echo "<br>";
		echo "number of dependents are:";
		echo $dependents;
		echo "<br>";
		echo "<br>";
		echo $message;
		echo "<br>";
		echo "<br>";
		echo "your tax bill is:";
		echo $totaltax;
	}
		
?>