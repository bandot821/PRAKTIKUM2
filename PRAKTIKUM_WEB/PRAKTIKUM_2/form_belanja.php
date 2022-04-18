<!DOCTYPE html>
<html lang="id">

<head>
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <center>
        <h1>
            FORM BELANJA
        </h1>
    </center>
    <!--Form Pembelanjaan-->
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-3 col-form-label">Customer</label>
                        <div class="col-9">
                            <input id="customer" name="customer" placeholder="Nama Customer" value="" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3">Pilih Produk</label>
                        <div class="col-9">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-3 col-form-label">Jumlah</label>
                        <div class="col-9">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-3 col-9">
                            <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--Tabel Harga-->
            <div class="col-4">
                <table class="table">
                    <thead>
                        <tr>
                            <td class="table-primary">Daftar harga</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV : 4.200.000</td>
                        </tr>
                        <tr>
                            <td>Kulkas : 3.100.000</td>
                        </tr>
                        <tr>
                            <td>MESIN CUCI : 3.800.000</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Harga Dapat Berubah Setiap Saat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Hasil Belanja-->
        <div>
            <?php
            $_proses = $_POST['proses'];
            $_customer = $_POST['customer'];
            $_produk  = $_POST['produk'];
            $_jumlah = $_POST['jumlah'];
            $_total;
            if ($_produk === "TV") {
                $_total = 4200000;
            } else if ($_produk === "Kulkas") {
                $_total = 3100000;
            } else if ($_produk === "Mesin Cuci") {
                $_total = 3800000;
            } else {
                $_total = 0;
            }
            $_totalakhir = ($_jumlah * $_total);

            echo '<br/> Nama Customer : ' . $_customer;
            echo '<br/> Produk Pilihan : ' . $_produk;
            echo '<br/> Jumlah : ' . $_jumlah;
            echo '<br/> Total Belanja : ' . $_totalakhir;
            ?>
        </div>
    </div>
</body>

</html>
