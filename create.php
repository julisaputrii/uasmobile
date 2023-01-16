<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");
    $connection = new mysqli("localhost", "root", "", "uas_app");
    $nama      = $_POST['nama']; 
    $alamat    = $_POST['alamat'];
    $tingkat    = $_POST['tingkat'];
    $date       = date('Y-m-d');
    
    $result = mysqli_query($connection, "insert into uas set nama='$nama', alamat='$alamat', tingkat='$tingkat', date='$date'");
    
    if($result){
        echo json_encode([
            'message' => 'Data input successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to input'
        ]);
    }