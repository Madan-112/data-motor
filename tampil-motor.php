<!doctype HTML>
<html>
<head>
    <title>Data Motor</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Motor</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>KODE MOTOR</th><th>JENIS MOTOR</th><th>MERK</th><th>LOKASI</th><th>JENIS PEMESANAN</th><th>HARGA</th><th>JENIS PEMBAYARAN</th>
                <th>
                    <a href="input-motor.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from uts order by kd_motor ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['kd_motor']?></td>
                <td><?php echo $row['jenis_motor']?></td>
                <td><?php echo $row['merk']?></td>
                <td><?php echo $row['lokasi']?></td>
                <td><?php echo $row['jenis_pemesanan']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['jenis_pembayaran']?></td>
                <td>

                <a href="edit-motor.php?id=<?php echo $row['motor_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-motor.php?id=<?php echo $row['motor_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
     $('#dataTables').DataTable();
 });

</script>

</body>
</html>