<?php
//buat koneksi ke database
$tehubung = mysqli_connect("localhost", "root", "", "sensor");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();}

//baca data dari table sensor
$sql = mysqli_query ($tehubung, "select * from tb_sensor");

//baca data paling atas
$data = mysqli_fetch_array($sql);
$volumeair = $data['volumeair'];

//apabila suhu tidak terbaca
if( $volumeair == "") $volumeair = 0;

//cetak nilai suhu
echo $volumeair;

?>