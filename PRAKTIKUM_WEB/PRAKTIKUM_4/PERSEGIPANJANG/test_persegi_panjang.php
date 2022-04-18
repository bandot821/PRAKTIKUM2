<?php 
require_once './persegi_panjang.php';
$persegi_panjang1 = new PersegiPanjang(20,35);
$persegi_panjang2 = new PersegiPanjang(16,32);

echo "Luas dari linkaran I adalah ". $persegi_panjang1->getLuas();
echo "<br> Luas dari linkaran II adalah ". $persegi_panjang2->getLuas();
echo "<br> Keliling dari linkaran I adalah ". $persegi_panjang1->getKeliling();
echo "<br> Keliling dari linkaran II adalah ". $persegi_panjang2->getKeliling();
