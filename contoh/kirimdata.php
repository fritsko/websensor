<?php
    //buat koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "sensor");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();}
    // $conn = mysqli_connect("localhost","root","");
    //     $link = mysqli_select_db($conn,"sensor");
    //     $sql = "INSERT INTO tb_sensor (volumeair) VALUES ('$volumeair')";
    // if (mysqli_query($terhubung, $sql)) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($tehubung);
    // }
    $volumeair = $_GET['volumeair'];
    // $arus = $GET['arus'];
    // $ph = $GET['ph'];

    mysqli_connect($conn, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");

    $simpan = mysqli_query($conn, "insert into to tb_sensor(volumeair)values('$volumeair')");

    if($simpan)
        echo "berhasil";
    else
        echo "gagal";
?>