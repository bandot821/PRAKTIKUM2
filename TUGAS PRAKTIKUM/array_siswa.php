<?php
$ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
$ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
$ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<h3 class="text-center mt-3">Daftar Nilai Siswa</h3>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    body {
        background-color: tan;
    }

    #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 70%;
        margin: auto;

    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddf;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #4CAF50;
        color: white;
    }
</style>
<table id="customers">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $ns) {
            echo "<tr><td>$nomor</td>";
            // echo '<tr><td>' . $ns['id'] . '</td>';
            echo '<td>' . $ns['nim'] . '</td>';
            echo '<td>' . $ns['uts'] . '</td>';
            echo '<td>' . $ns['uas'] . '</td>';
            echo '<td>' . $ns['tugas'] . '</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
            echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
    </tbody>
</table>