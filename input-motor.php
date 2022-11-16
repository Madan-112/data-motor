<!doctype HTML>
<html>
<head>
    <title>Form Input Motor</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-motor.php" method="POST">

                    <div class="form-group">
                        <label for="kd_motor">KODE MOTOR</label>
                        <input type="text" name="kd_motor" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_motor">JENIS MOTOR</label>
                        <select name="jenis_motor" class="form-control">
                            <option value="matic">MATIC</option>
                            <option value="cub">CUB</option>
                            <option value="sport">SPORT</option>
                            <option value="bike big">BIKE BIG</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="merk">MERK</label>
                        <input type="text" name="merk" class="form-control">
                    </div>

                    

                    <div class="form-group">
                        <label for="lokasi">LOKASI</label>
                        <textarea name="lokasi" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="jenis_pemesanan">JENIS PEMESANAN</label>
                        <select name="jenis_motor" class="form-control">
                            <option value="online">ONLINE</option>
                            <option value="offline">OFFLINE</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">HARGA</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jenis_pembayaran">JENIS PEMBAYARAN</label>
                        <select name="jenis_pembayaran" class="form-control">
                            <option value="cash">CASH</option>
                            <option value="credit">CREDIT</option>
                        </select>
                    </div>


                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>