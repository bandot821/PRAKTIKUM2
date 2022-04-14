<?php
class Dispenser
{
    protected $volume;
    protected $hargaSegelas;
    private static $volumeGelas = 250;
    public $namaMinuman;

    function __construct($vol, $namaMinuman)
    {
        $this->volume = $vol;
        $this->namaMinuman = $namaMinuman;
        echo "<h3>Menu Minuman Kedai Mang Ujang Redi</h3><ol>";
        echo "<li>Es Teh</li>";
        echo "<li>Es Jeruk</li>";
        echo "<li>Susu Putih</li>";
        echo "<li>Chocolatos</li>";
        echo "<li>Kopi Susu</li></ol>";

        echo "Volume Minuman Sebanyak <b>$this->volume mL</b><br/><br/>";
    }

    // function jenisMinuman($jenis)
    // {
    //     $this->namaMinuman = strtolower($jenis);
    // }

    public function hargaMinuman()
    {
        if ($this->namaMinuman == "es teh") {
            $this->hargaSegelas = 3000;
        } elseif ($this->namaMinuman == "es jeruk") {
            $this->hargaSegelas = 4000;
        } elseif ($this->namaMinuman == "susu putih") {
            $this->hargaSegelas = 5000;
        } elseif ($this->namaMinuman == "chocolatos") {
            $this->hargaSegelas = 4500;
        } elseif ($this->namaMinuman == "kopi susu") {
            $this->hargaSegelas = 3500;
        } else {
            return "Minuman tidak tersedia, silahkan pesan yang lain.";
        }
    }

    // function totalMinum($brp_gelas)
    // {
    //     $this->totalGelas = (int)$brp_gelas;
    // }

    // function totalHarga()
    // {
    //     self::hargaMinuman();
    //     $this->totalHarga = $this->hargaSegelas * $this->totalGelas;
    // }

    function limitMinum($beli)
    {
        self::hargaMinuman();
        $isi = ($beli * $this->volumeGelas);

        if ($this->volume > 0) {
            $sisa = ($this->volume - $isi);
            echo "Pelanggan membeli $beli gelas $this->namaMinuman.<br>Sisa Volume Minuman : $sisa mL <br><br>";
        } else {
            echo "<b style=color:red>Maaf minuman telah habis, Tunggu Refill yaa !!!</b> <br><br>";
        }
        // $x = 1;
        // $this->volume = $this->refill;
        // while ($x <= $this->totalMl) {
        //     if ($this->volume == 0) {
        //         echo "<br/>Minuman sudah habis.";
        //         echo "<br/>Total Harga yang harus anda bayar sebesar <strong>Rp. " . number_format($this->totalHarga, 2, ",", ".") . "</strong>";
        //     } elseif ($this->totalMl != 0) {
        //         echo "<br/>Anda Membeli segelas $this->namaMinuman dengan harga per gelas adalah Rp. " . number_format($this->hargaSegelas, 2, ",", ".");
        //         // if ($x == $this->totalMl) {
        //         //     break;
        //         // }
        //     }
        //     $x++;
        // }
    }
    function isiUlang($isi_lagi)
    {
        echo "<b style=color:green>Dispenser telah di isi, silahkan beli sebutuhnya !!!</b> <br><br>";
        $this->volume += $isi_lagi;
    }
}
$minum2 = new Dispenser(3000, "Es Teh");
$minum2->limitMinum(2);
