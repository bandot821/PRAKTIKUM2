<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai</title>
</head>
<body>
    <h1>FORM NILAI</h1> <hr>

    <form  class="form-horizontal" method = "POST" action = "nilai_siswa.php">  
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" value="" size="30" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
        <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
            <option value="Pancasila dan Pendidikan Kewarganegaraan">Pancasila dan Pendidikan Kewarganegaraan</option>
            <option value="Komunikasi Efektif">Komunikasi Efektif</option>
            <option value="Jaringan Komputer">Jaringan Komputer</option>
            <option value="User Interface & User Experience">User Interface & User Experience</option>
            <option value="Bahasa Inggris 1">Bahasa Inggris 1</option>
            <option value="Basis Data">Basis Data</option>
            <option value="Pemrograman Web 2">Pemrograman Web 2</option>
            <option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
        <input id="uts" name="nilai_uts" placeholder="Nilai UTS" type="text" value="" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
        <input id="uas" name="nilai_uas" placeholder="Nilai UAS" type="text" value="" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
        <div class="col-8">
        <input id="tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" value="" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>

    <!-- <?php

    $proses = $_GET['proses'];
    $nama_siswa  = $_GET['nama'];
    $mata_kuliah  = $_GET['matkul'];
    $nilai_uts  = $_GET['nilai_uts'];
    $nilai_uas  = $_GET['nilai_uas'];
    $nilai_tugas  = $_GET['nilai_tugas'];

    echo 'Proses : '.$proses;
    echo '<br/> Nama : '.$nama_siswa;
    echo '<br/> Mata Kuliah :'.$mata_kuliah;
    echo '<br/> Nilai UTS :'.$nilai_uts;
    echo '<br/> Nilai UAS :'.$nilai_uas;
    echo '<br/> Nilai Tugas Praktikum :'.$nilai_tugas;
    ?> -->



</body>
</html>
