<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja</title>
    <style>
        body {
            margin: 10px;
        }

        .main {
            display: flex;
        }

        hr {
            width: auto;
        }

        table {
            border: 1px solid #EEEEEE;
            width: 30%;
            margin: auto;
            margin-left: 20px;
        }

        td {
            padding: 10px;
        }

        form {
            width: 70%;
        }
    </style>
</head>

<body>
    <div class="main">
        <form method="POST" action="form_belanja.php">
            <h3>Belanja Online</h3>
            <hr>
            <div class="form-group row">
                <label for="customer" class="col-2 col-form-label">Customer</label>
                <div class="col-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-id-card-o"></i>
                            </div>
                        </div>
                        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2">Pilih Produk</label>
                <div class="col-5">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required">
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS" required="required">
                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI" required="required">
                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-2 col-form-label">Jumlah</label>
                <div class="col-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-sort-numeric-asc"></i>
                            </div>
                        </div>
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" min="0" required="required" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-2 col-4">
                    <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </form>
        <table>
            <tr style="background-color: #398AB9; color: white;">
                <td>Daftar Harga</td>
            </tr>
            <tr style="border-bottom: 1px solid #EEEEEE;">
                <td>TV : Rp 4.200.000,-</td>
            </tr>
            <tr style="border-bottom: 1px solid #EEEEEE;">
                <td>KULKAS : Rp 3.100.000,-</td>
            </tr>
            <tr>
                <td>MESIN CUCI : Rp 3.800.000,-</td>
            </tr>
            <tr style="background-color: #398AB9; color: white;">
                <td>Harga Dapat Berubah Setiap Saat</td>
            </tr>
        </table>
    </div>
    <hr>
    <main>
        <?php
        $nama = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        if ($produk == "TV") {
            $harga = 4200000;
        } elseif ($produk == "KULKAS") {
            $harga = 3100000;
        } elseif ($produk == "MESIN CUCI") {
            $harga = 3800000;
        }
        $total = $jumlah * $harga;

        echo "Nama Customer : " . $nama;
        echo "<br/>Produk yang di Beli : " . $produk;
        echo "<br>Jumlah Barang : " . $jumlah;
        echo "<br>Total Belanja : Rp " . $total;
        ?>
    </main>

</body>

</html>
