<?php
$amount = 100;
for ($i = 0;$i <= $amount - 1;$i++) {
    $dayofyear = rand(001, 366); /*picks a day of the year*/
    $years = array("95", "96", "97", "98", "99", "00", "01", "02", "03"); /*sets allowed years*/
    $year = $years[mt_rand(0, count($years) - 1) ]; /*picks a year*/
    $sevenmod = 1; /*sets some variables*/
    $lastnum = 0;
    while ($sevenmod >= 1 or $lastnum >= 8 or $lastnum == 0) { /*executes the mod7 keygen while the mod of 7 is 1 or the last number is over 8 or the last number is zero*/
        $dig1 = 0;
        $dig2 = 0;
        $dig3 = 0;
        $dig4 = 0;
        $dig5 = 0;
        $dig6 = 0; /*resets all digits*/
        for ($u = 0;$u <= 5;$u++) { /*generates 6 digits*/
            $dig = 0; /*resets active digit*/
            $dig = rand(0, 9); /*creates a random number*/
            if ($dig1 !== 0) { /*assigns active digit to an empty number*/
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
        $sevenkey = $dig1 + $dig2 + $dig3 + $dig4 + $dig5 + $dig6; /*does the mod check*/
        $sevenmod = $sevenkey % 7;
        $lastnum = $dig6; /*sets last digit*/
    }
    $lastdig = rand(1, 999); /*creates random number*/
    $dayofstr = strval($dayofyear); /*changes year to string*/
    if (strlen($dayofstr) == 1) { /*adds necessary zeros*/
        if (strlen(strval($lastdig)) == 1) {
            echo ("00" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-00" . $lastdig . "<br>"); /*prints key*/
        } elseif (strlen(strval($lastdig)) == 2) {
            echo ("00" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-0" . $lastdig . "<br>");
        } else {
            echo ("00" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-" . $lastdig . "<br>");
        }
    } elseif (strlen($dayofstr) == 2) {
        if (strlen(strval($lastdig)) == 1) {
            echo ("0" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-00" . $lastdig . "<br>");
        } elseif (strlen(strval($lastdig)) == 2) {
            echo ("0" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-0" . $lastdig . "<br>");
        } else {
            echo ("0" . $dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-" . $lastdig . "<br>");
        }
    } else {
        if (strlen(strval($lastdig)) == 1) {
            echo ($dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-00" . $lastdig . "<br>");
        } elseif (strlen(strval($lastdig)) == 2) {
            echo ($dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-0" . $lastdig . "<br>");
        } else {
            echo ($dayofstr . $year . "-OEM-0" . $dig1 . $dig2 . $dig3 . $dig4 . $dig5 . $dig6 . "-" . $lastdig . "<br>");
        }
    }
}
?>
