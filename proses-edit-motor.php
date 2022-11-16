<?php

include "koneksi.php";

$id_motor=$_POST['id_motor'];
$kd_motor=$_POST['kd_motor'];
$jenis_motor=$_POST['jenis_motor'];
$merk=$_POST['merk'];
$lokasi=$_POST['lokasi'];
$jenis_pemesanan=$_POST['jenis_pemesanan'];
$harga=$_POST['harga'];
$jenis_pembayaran=$_POST['jenis_pembayaran'];


$ubah=$koneksi->query("update uts set kd_motor='$kd_motor', jenis_motor='$jenis_motor', merk='$merk', lokasi='$lokasi', jenis_pemesanan='$jenis_pemesanan', harga='$harga', jenis_pembayaran='$jenis_pembayaran where motor_id='$id'");

if($ubah==true){

    header("location:tampil-motor.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>