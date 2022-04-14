<?php

    require_once 'libfungsi.php';

    $nama_siswa = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['nilai_uts'];
    $uas = $_POST['nilai_uas'];
    $tugas = $_POST['nilai_tugas'];
    $proses = $_POST['proses'];
    $total = (0.3 * $uts) + (0.35 * $uas) + (0.35 * $tugas);

    if (!empty($proses)) {
        echo '<strong>RESULT</strong>';
        echo '<br/>Nama : ' . $nama_siswa;
        echo '<br/>Mata Kuliah : ' . $matkul;
        echo '<br/>Nilai UTS : ' . $uts;
        echo '<br/>Nilai UAS : ' . $uas;
        echo '<br/>Nilai Tugas/Praktikum : ' . $tugas;
    }

    $hasil_ujian = kelulusan($total);
    $hasil_grade = grade($total);
    $hasil_predikat = predikat($hasil_grade);

    echo '<br/>DINYATAKAN : ' . "<strong>$hasil_ujian</strong>";
    echo '<br/>GRADE : ' . "<strong>$hasil_grade</strong>";
    echo '<br/>PREDIKAT : ' . "<strong>$hasil_predikat</strong>";
?>
