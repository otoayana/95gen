<?php
	$amount == 100; /*if you want to generate more keys, change this value*/
	for( $i = 0; $i <= $amount - 1; $i++) { /*loops the process x amount of times*/
		$pre1 = rand(0,9); /*picks the initial three numbers*/
		$pre2 = rand(0,9);
		$pre3 = rand(0,9);
		while ($pre1 == $pre2 and $pre1 == $pre3 and $pre1 >= 3) { /*regenerates numbers in case invalid conditions are present*/
				$pre1 = rand(0,9);
				$pre2 = rand(0,9);
				$pre3 = rand(0,9);
		}
		$sevenmod = 1;
		$lastdig = 0;
		while ($sevenmod >= 1 or $lastchar >= 8 or $lastchar == 0) {
			$dig1 = 0;
			$dig2 = 0;
			$dig3 = 0;
			$dig4 = 0;
			$dig5 = 0;
			$dig6 = 0;
			$dig7 = 0; /*resets all digits to zero*/
			for( $u = 0; $u <= 6; $u++ ) {
				$dig = 0; /*resets active digit to zero*/
				$dig = rand(0,9); /*picks random number*/
				if ($dig1 !== 0) { /*searches if each digit is not empty and if it is it fills it with the active digit*/
					if ($dig2 !== 0) {
						if ($dig3 !== 0) {
							if ($dig4 !== 0) {
								if ($dig5 !== 0) {
									if ($dig6 !== 0) {
										$dig7 = $dig;
									} else {
										$dig6 = $dig;
									}
								} else {
									$dig5 = $dig;
								}
							} else {
								$dig4 = $dig;
							}
						} else {
							$dig3 = $dig;
						}
					} else {
						$dig2 = $dig;
					}	
				} else {
					$dig1 = $dig;
				}
			}
			$sevenkey = $dig1 + $dig2 + $dig3 + $dig4 + $dig5 + $dig6 + $dig7; /*checks if digit is valid by adding them all up and getting mod*/
			$sevenmod = $sevenkey % 7;
			$lastchar = $dig7 /*gets the last character for checking if it is 8 or zero*/
			
		}
		if ($pre1 == 0 and $pre2 == 0 and $pre3 == 0) { /*checks for zeroes*/
			$prechars = "000";
		} elseif ($pre1 == 0 and $pre2 == 0) {
			$prechars = "00" . $pre3;
		} elseif ($pre1 == 0 and $pre3 == 0) {
			$prechars = "0" . $pre2 . "0";
		} elseif ($pre2 == 0 and $pre3 == 0) {
			$prechars = $pre1 . "00";
		} elseif ($pre3 == 0) {
			$prechars = $pre1 . $pre2 . "0";
		} elseif ($pre2 == 0) {
			$prechars = $pre1 . "0" . $pre3;
		} elseif ($pre1 == 0) {
			$prechars = "0" . $pre2 . $pre3;
		} else {	
			$prechars = $pre1 . $pre2 . $pre3;
		}
		print($prechars . "-" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . $dig7 . '<br>'); /*prints key*/ 
	}
?>
