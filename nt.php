<?php
	$dig1 = 0;
	$dig2 = 0;
	$dig3 = 0;
	$dig4 = 0;
	$dig5 = 0;
	$dig6 = 0;
	$dig7 = 0;
	for( $i = 0; $i <= 9; $i++) {
		$pre1 = rand(0,2);
		$pre2 = rand(0,2);
		$pre3 = rand(0,2);
		$sevenmod = 1;
		while ($sevenmod >= 1) {
			$dig1 = 0;
			$dig2 = 0;
			$dig3 = 0;
			$dig4 = 0;
			$dig5 = 0;
			$dig6 = 0;
			$dig7 = 0;
			for( $u = 0; $u <= 6; $u++ ) {
				$dig = 0;
				$dig = rand(1,7);
				if ($dig1 !== 0) {
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
			$sevenkey = $dig1 + $dig2 + $dig3 + $dig4 + $dig5 + $dig6 + $dig7;
			$sevenmod = $sevenkey % 7;
		}
		print($pre1 . $pre2 . $pre3 . "-" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . $dig7 . '<br>');	
	}
?>
