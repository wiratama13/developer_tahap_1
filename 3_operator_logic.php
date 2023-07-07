<?php

function pembagian(int $angka,int $bagi) {
    $pembagian = $angka / $bagi;
    return floor($pembagian);
}

echo pembagian(11,2);