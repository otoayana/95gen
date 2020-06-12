<?php
	for( $i = 0; $i <= 9; $i++) {
		$dayofyear = rand(001,366);
		$years = array("95", "96", "97", "98", "99", "00", "01", "02", "03");
		$year = $years[mt_rand(0, count($years) - 1)];
		$sevenmod = 1;	
		while ($sevenmod >= 1) {
			$dig1 = 0;
			$dig2 = 0;
			$dig3 = 0;
			$dig4 = 0;
			$dig5 = 0;
			$dig6 = 0;
			for( $u = 0; $u <= 5; $u++ ) {
				$dig = 0;
				$dig = rand(1,7);
				if ($dig1 !== 0) {
					if ($dig2 !== 0) {
						if ($dig3 !== 0) {
							if ($dig4 !== 0) {
								if ($dig5 !== 0) {
									$dig6 = $dig;
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
			$sevenkey = $dig1 + $dig2 + $dig3 + $dig4 + $dig5 + $dig6;
			$sevenmod = $sevenkey % 7;
		}
		$lastdig = rand(1,999);
		$dayofstr = strval($dayofyear);
		if (strlen($dayofstr) == 1) {
			if (strlen(strval($lastdig)) == 1) {
				echo("00" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-00" . $lastdig  . "\n");
			} elseif (strlen(strval($lastdig)) == 2) {
				echo("00" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-0" . $lastdig . "\n");	
			} else {
				echo("00" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-" . $lastdig . "\n");
			}
		} elseif (strlen($dayofstr) == 2) {
			if (strlen(strval($lastdig)) == 1) {

				echo("0" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-00" . $lastdig . "\n");
			} elseif (strlen(strval($lastdig)) == 2) {
				echo("0" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-0" . $lastdig . "\n");
			} else {
				echo("0" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-" . $lastdig . "\n");
			}
		} else {
			if (strlen(strval($lastdig)) == 1) {
				echo($dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-00" . $lastdig . "\n");
			} elseif (strlen(strval($lastdig)) == 2) {
				echo($dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-0" . $lastdig . "\n");
			} else {
				echo($dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-" . $lastdig . "\n");
			}
		}
	}
?>
