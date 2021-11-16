<?php
//buat koneksi ke database
$tehubung = mysqli_connect("localhost", "root", "", "sensor");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();}

//baca data dari table sensor
$sql = mysqli_query ($tehubung, "select * from tb_sensor order by id desc");

//baca data paling atas
$data = mysqli_fetch_array($sql);
$ph = $data['ph'];

// //apabila suhu tidak terbaca
if( $ph == "") $ph = 0;

//cetak nilai suhu
echo $ph;
?>