<?php

    // letakan di paling atas file
    require_once "libfungsi.php";


    $nama_siswa = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['nilai_uts'];
    $uas = $_POST['nilai_uas'];
    $tugas = $_POST['nilai_tugas'];
    $proses = $_POST['proses'];
    $nilai_akhir = (0.3 * $uts) + (0.35 * $uas) + (0.35 * $tugas);
    
    

    if (!empty($proses)) {
        echo '<strong>RESULT</strong>';
        echo '<br/>Nama : ' . $nama_siswa;
        echo '<br/>Mata Kuliah : ' . $matkul;
        echo '<br/>Nilai UTS : ' . $uts;
        echo '<br/>Nilai UAS : ' . $uas;
        echo '<br/>Nilai Tugas/Praktikum : ' .$tugas;
    }


    
    $hasil_ujian    = kelulusan($nilai_akhir);
    $grade_siswa    = grade($nilai_akhir);
    $predikat_siswa = predikat($grade_siswa);
    

    echo "<br/> GRADE SISWA : " . $grade_siswa;
    echo "<br/> PREDIKAT SISWA : " . $predikat_siswa;
    echo "<br/> SISWA DINYATAKAN : " . $hasil_ujian;

    // if ($nilai_akhir > 55) {
    //     echo '<br/>SISWA LULUS!!';
    // } else {
    //     echo '<br/>SISWA TIDAK LULUS!!';
    // }

    // if ($nilai_akhir > 0 and $nilai_akhir <= 35) {
    //     $grade = "E";
    // } elseif ($nilai_akhir > 35 and $nilai_akhir <= 55) {
    //     $grade = "D";
    // } elseif ($nilai_akhir > 55 and $nilai_akhir <= 69) {
    //     $grade = "C";
    // } elseif ($nilai_akhir > 69 and $nilai_akhir <= 84) {
    //     $grade = "B";
    // } elseif ($nilai_akhir > 84 and $nilai_akhir <= 100) {
    //     $grade = "A";
    // } else {
    //     $grade = "I";
    // }

    // switch ($grade) {
    //     case 'A':
    //         $predikat = "Sangat Memuaskan";
    //         break;
    //     case 'B':
    //         $predikat = "Memuaskan";
    //         break;
    //     case 'C':
    //         $predikat = "Cukup";
    //         break;
    //     case 'D':
    //         $predikat = "Kurang";
    //         break;
    //     case 'E':
    //         $predikat = "Sangat Kurang";
    //         break;
    //     default:
    //         $predikat = "Tidak Ada";
    //         break;
    // }

        
    //  echo '<br/>Dengan Nilai ' . $nilai_akhir . ', Maka Grade Siswa adalah ' . $grade . " dengan Predikat <strong>$predikat</strong>";

?>
