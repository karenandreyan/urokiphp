













<?php
	$i = 20;
	switch($i){
		case 0:
			echo "Rezultat: 0"; break;
		case 1:
			echo "Rezultat: 1"; break;
		case 2:	
			echo "Rezultat: 2"; break;
		case 3:
			echo "Rezultat: 3"; break;
		default: echo "Mnogo";	
	}

exit;
	$hour = (int)strftime("%H");
	$welcome = "";
	if($hour>0 and $hour<6){
		$welcome = "Dobroi nochi";
	}elseif($hour>=6 and $hour<12){
		$welcome = "dobroe urto";
	}elseif($hour>=12 and $hour<18){
		$welcome = "dobri den";
	}elseif($hour>=18 and $hour<23){
		$welcome = "dobri vecher";
	}else{
		$welcome = "Dobroi nochi";
	}

?>	

<!-- <h1><?=$welcome?>, Gost</h1> -->


	
