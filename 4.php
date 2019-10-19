<?php 

function hitungparkir($jam){
    
    $biaya=2000;
    $berikutnya=($jam-3)*1000;
    $maksimal=10000;
    
    if ($jam<=3) {
        print($jam*$biaya);
    }elseif (($jam>3) and ($jam<=7)) {
        print ($biaya*3)+$berikutnya;
    }elseif ($jam>7){
        print ($maksimal);
    }
}

hitungparkir(1);
hitungparkir(4);
hitungparkir(7);

?>