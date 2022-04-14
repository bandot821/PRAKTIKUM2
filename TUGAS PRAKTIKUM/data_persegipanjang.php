<?php
    require_once "class_persegipanjang.php";
    $pp1 = new persegiPanjang(5, 8);
    $pp2 = new persegiPanjang(8, 10);

    echo "<br/>Luas Persegi Panjang I adalah " . $pp1->getLuas();
    echo "<br/>Luas Persegi Panjang II adalah " . $pp2->getLuas();

    echo "<br/>Keliling Persegi Panjang I adalah " . $pp1->getKeliling();
    echo "<br/>Keliling Persegi Panjang II adalah " . $pp2->getKeliling();

?>
