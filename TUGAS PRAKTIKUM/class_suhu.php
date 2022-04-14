<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Konversi Suhu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <h3 class="text-center mt-3">Tabel Konversi Suhu</h3>
    <hr>
    <?php

    class KonversiSuhu
    {
        public $satuanSuhuAwal;
        public $besaranSuhu;
        public $satuanSuhuTujuan;

        function __construct($suAw, $beSu, $saSuTu)
        {
            $this->satuanSuhuAwal = $suAw;
            $this->besaranSuhu = $beSu;
            $this->satuanSuhuTujuan = $saSuTu;
        }

        function rumusKonversi()
        {
            if ($this->satuanSuhuAwal == "celcius" && $this->satuanSuhuTujuan == "fahrenheit") {
                $rumus = $this->besaranSuhu * 1.8 + 32;
            } elseif ($this->satuanSuhuAwal == "fahrenheit" && $this->satuanSuhuTujuan == "celcius") {
                $rumus = ($this->besaranSuhu - 32) / 1.8;
            } elseif ($this->satuanSuhuAwal == "celcius" && $this->satuanSuhuTujuan == "rheamur") {
                $rumus = $this->besaranSuhu * 0.8;
            } elseif ($this->satuanSuhuAwal == "rheamur" && $this->satuanSuhuTujuan == "celcius") {
                $rumus = $this->besaranSuhu / 0.8;
            }
            return (int)$rumus;
        }

        function cetak()
        {
            return self::rumusKonversi();
        }
    }
    $rumus1 = new KonversiSuhu("celcius", 30, "fahrenheit");
    $rumus2 = new KonversiSuhu("fahrenheit", 40, "celcius");
    $rumus3 = new KonversiSuhu("celcius", 50, "rheamur");
    $rumus4 = new KonversiSuhu("rheamur", 60, "celcius");
    $rumus5 = new KonversiSuhu("celcius", 70, "fahrenheit");
    $rumus6 = new KonversiSuhu("fahrenheit", 80, "celcius");
    $rumus7 = new KonversiSuhu("celcius", 10, "fahrenheit");
    $rumus8 = new KonversiSuhu("rheamur", 20, "celcius");

    $array_suhu = [$rumus1, $rumus2, $rumus3, $rumus4, $rumus5, $rumus6, $rumus7, $rumus8];

    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-responsive table-hover">
                    <thead class="table-dark text-center">
                        <th>Satuan Suhu Awal</th>
                        <th>Suhu Awal</th>
                        <th>Satuan Suhu Akhir</th>
                        <th>Suhu Akhir</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($array_suhu as $arsuhu) {
                            echo "<tr class='text-center'>";
                            echo "<td>{$arsuhu->satuanSuhuAwal}</td>";
                            echo "<td>{$arsuhu->besaranSuhu}°</td>";
                            echo "<td>{$arsuhu->satuanSuhuTujuan}</td>";
                            echo "<td>{$arsuhu->cetak()}°</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

</html>
