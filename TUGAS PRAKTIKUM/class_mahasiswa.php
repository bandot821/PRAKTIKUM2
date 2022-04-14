<?php
    class Mahasiswa {
        var $nim;
        var $nama;
        var $thn_angkatan;
        var $prodi;
        var $ipk;

        function __construct($nim, $nama, $thn_angkatan, $prodi, $ipk)
        {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->thn_angkatan = $thn_angkatan;
            $this->prodi = $prodi;
            $this->ipk = $ipk;
        }

        public function predikat_ipk(){
            if ($this->ipk < 2.0) {
                return "Cukup";
            } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) {
                return "Baik";
            } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) {
                return "Memuaskan";
            } elseif ($this->ipk >= 3.75 && $this->ipk <= 4.0) {
                return "Cum Laude";
            }
        }

        public function cetak(){
            echo "<td>$this->nim</td><td>$this->nama</td><td>$this->prodi</td><td>$this->thn_angkatan</td><td>$this->ipk</td>";
        }
    }
?>
© 2022 GitHub, Inc.
Terms
