<?php
function terbesarTerkecil($inputArr) {
    $max = 0;
    $min = 0;

    for($i = 0; $i < count($inputArr); $i++) {
        if ($i == 0) {
            $max = $inputArr[$i];
            $min = $inputArr[$i];
        } else if ($inputArr[$i] < $min) {
            $min = $inputArr[$i];
        } else if ($inputArr[$i] > $max) {
            $max = $inputArr[$i];
        }
    }
        
    $output[0] = [$min, $max];
    return $output;
}

var_dump(terbesarTerkecil([40, 28, 65, 44, 336]));
?>