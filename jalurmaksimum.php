<?php 
function jumlahMaksimum($arr1, $arr2) {
    $jml1 = 0;
    $jml2 = 0;
    $indexA = [];
    $valueA = [];
    $output = 0;
    $bool = false;  

    if (count($arr1) > count($arr2)) {
        $ai = 0;
        for ($i = 0; $i < count($arr1); $i++) {
            $angka1 = $arr1[$i];
            for ($j = 0; $j < count($arr2); $j++) {
                if ($angka1 == $arr2[$j]) {
                    $indexA[$ai++] = $j;
                    $valueA[$ai-1] = $angka1;
                    $bool = true;
                }
            }
        }
    } else {
        $ai = 0;
        for ($i = 0; $i < count($arr2); $i++) {
            $angka1 = $arr2[$i];
            for ($j = 0; $j < count($arr1); $j++) {
                if ($angka1 == $arr1[$j]) {
                    $indexA[$ai++] = $j;
                    $valueA[$ai-1] = $angka1;
                    $bool = true;
                }
            }
        }
    }

    if ($bool) {
        if (count($arr1) < count($arr2)) {
            for ($h = 0; $h < count($indexA); $h++) {
                $jml1 = 0;
                $jml2 = 0;
                for ($i = 0; $i < count($arr1); $i++) {
                    if ($arr2[$i] == $valueA[$h]) {
                        break;
                    }
                    $jml1 += $arr1[$i];
                }

                for ($j = $indexA[$h]; $j < count($arr2); $j++) {
                    $jml2 += $arr2[$j];
                }

                $temp = $jml1+$jml2;
                if ($output < $temp) {
                    $output = $temp;
                }
            }
         }  else {
            //  disini LOGIKA
            for ($h = 0; $h < count($indexA); $h++) {
                $jml1 = 0;
                $jml2 = 0;
                for ($i = 0; $i < count($arr2); $i++) {
                    if ($arr2[$i] == $valueA[$h]) {
                        break;
                    }
                    $jml2 += $arr2[$i];
                }

                for ($j = $indexA[$h]; $j < count($arr1); $j++) {
                    $jml1 += $arr1[$j];
                }
                $temp = $jml1+$jml2;
                if ($output < $temp) {
                    $output = $temp;
                }
            }
        }
    } else {
        for ($i = 0; $i < count($arr1); $i++) {
            $jml1 += $arr1[$i];
        }
        for ($i = 0; $i < count($arr2); $i++) {
            $jml2 += $arr2[$i];
        }

        if ($jml1 > $jml2) {
            $output = $jml1;
        } else {
            $output = $jml2;
        }
    }
    
    return $output;
}

$arr1 = [2, 3, 7, 10, 12, 15, 30, 34];
$arr2 = [1, 5, 7, 8, 10, 15, 16, 19];
echo jumlahMaksimum($arr1, $arr2);
?>