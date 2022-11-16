<!doctype HTML>
<html>
<head>
    <title>Data Motor</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-motor.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from uts where motor_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="kd_motor">kd_motor</label>
                        <input type="hidden" name="motor_id" value="<?php echo $row['motor_id']?>" class="form-control">
                        <input type="number" name="kd_motor" value="<?php echo $row['kd_motor']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_motor">JENIS MOTOR</label>
                        <select name="jenis_motor" class="form-control">
                            <option value="<?php echo $row['jenis_motor']?>" selected><?php echo $row['jenis_motor']?></option>
                            <option value="MATIC">MATIC</option>
                            <option value="SPORT">SPORT</option>
                            <option value="CUB">CUB</option>
                            <option value="BIG BIKE">BIG BIKE</option>
                        </select>
                    </div>

                  
                    <div class="form-group">
                        <label for="merk">MERK</label>
                        <textarea name="merk" class="form-control"><?php echo $row['merk']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="lokasi">LOKASI</label>
                        <input type="text" name="lokasi" value="<?php echo $row['lokasi']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_pemesanan">JENIS PEMESANAN</label>
                        <select name="jenis_pemesanan" class="form-control">
                            <option value="<?php echo $row['jenis_motor']?>" selected><?php echo $row['jenis_pemesanan']?></option>
                            <option value="online">ONLINE</option>
                            <option value="ofline">OFFLINE</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="harga">HARGA</label>
                        <textarea name="harga" class="form-control"><?php echo $row['harga']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="jenis_pembayaran">JENIS PEMBAYARAN</label>
                        <select name="jenis_pembayaran" class="form-control">
                            <option value="<?php echo $row['jenis_pembayaran']?>" selected><?php echo $row['jenis_pembayaran']?></option>
                            <option value="cash">CASH</option>
                            <option value="credit">CREDIT</option>
                        </select>
                    </div>


                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>