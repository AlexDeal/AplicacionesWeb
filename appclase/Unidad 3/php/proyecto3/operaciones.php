<?php
	function suma($a,$b){
		$r = $a + $b;
		return $r;
	}
	
	function resta($a,$b){
		$r = $a - $b;
		return $r;
	}

	function multiplica($a,$b){
		$r = $a * $b;
		return $r;
	}

	function divide($a,$b){
		if($b == 0)
		{
			$r = "Divison por Cero";
		}
		else
		{
			$r = $a / $b;	
		}
				
		return $r;
	}


?>