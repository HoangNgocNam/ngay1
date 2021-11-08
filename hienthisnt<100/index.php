<?php
function check($n){
    if ($n < 2){
        return false;
    }
    for ($i = 2; $i < $n; $i++){
        if ($n % $i === 0){
            return false;
        }
    }
    return true;
}
echo "cac so nt < 100 la:  <br>";

for ($i = 0; $i < 100; $i++){
    if (check($i)){
        echo $i.",";
    }
}

