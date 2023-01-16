<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");
    $connection = new mysqli("localhost", "root", "", "uas_app");
    $nama      = $_POST['nama']; 
    $alamat    = $_POST['alamat'];
    $tingkat    = $_POST['tingkat'];
    $id         = $_POST['id'];
        
    $result = mysqli_query($connection, "update uas set nama='$nama', alamat='$alamat', tingkat='$tingkat', where id='$id'");
        
    if($result){
        echo json_encode([
            'message' => 'Data edit successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to update'
        ]);
    }