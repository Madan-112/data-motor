<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from uts where motor_id='$id'");

if($hapus==true){

    header("location:tampil-motor.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>