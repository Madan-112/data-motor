<?php

$kd_motor=$_POST['kd_motor'];
$jenis_motor=$_POST['jenis_motor'];
$merk=$_POST['merk'];
$lokasi=$_POST['lokasi'];
$jenis=$_POST['jenis_pemesanan'];
$harga=$_POST['harga'];
$jenis_pembayaran=$_POST['jenis_pembayaran'];

include "koneksi.php";

$simpan=$koneksi->query("insert into motor (motor_id,kd_motor,jenis_motor,merk,lokasi,jenis_pemesanan,harga,jenis_pembayaran) 
                        values ('$kd_motor', '$jenis_motor', '$merk', '$lokasi', '$jenis', '$harga', '$jenis_pembayaran')");

if($simpan==true){

    header("location:tampil-motor.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>