<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");
    $connection = new mysqli("localhost", "root", "", "uas_app");
    $id = $_POST['id'];
    $result = mysqli_query($connection, "delete from uas where id=".$id);
    if($result){
        echo json_encode([
            'message' => 'Data delete successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to delete'
        ]);
    }