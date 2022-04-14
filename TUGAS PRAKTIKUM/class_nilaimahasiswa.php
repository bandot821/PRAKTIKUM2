<?php
    class nilaiMahasiswa{
        var $matakuliah;
        var $nama;
        var $nilai; 
        var $nim;
        var $grade;
        
        function __construct($nim, $nama, $nilai, $matakuliah)
        {
            $this->nim = $nim;
            $this->nilai = $nilai;
            $this->matakuliah = $matakuliah;
            $this->nama = $nama;
        }

        public function grade(){
            if ($this->nilai >= 0 && $this->nilai <= 35) {
                $this->grade = "E";
            } elseif ($this->nilai > 35 && $this->nilai <= 55) {
                $this->grade = "D";
            } elseif ($this->nilai > 55 && $this->nilai <= 69) {
                $this->grade = "C";
            } elseif ($this->nilai > 69 && $this->nilai <= 84) {
                $this->grade = "B";
            } elseif ($this->nilai > 84 && $this->nilai <= 100) {
                $this->grade = "A";
            } else {
                $this->grade = "Invalid Input!!";
            }

            return $this->grade;
        }

        public function kelulusan(){
            if ($this->nilai < 56 && $this->nilai >= 0){
                return "Tidak Lulus!!";
            } elseif ($this->nilai > 56 && $this->nilai <= 100) {
                return "Lulus!!";
            } else {
                return "Invalid!!";
            }
        }

        public function hasil(){
            echo "Nama : " . $this->nama;
            echo "<br/>NIM : " . $this->nim;
            echo "<br/>Mata Kuliah : " . $this->matakuliah;
            echo "<br/>Nilai : " . $this->nilai;
        }
    }
?>
