<?php

    $connection     = new mysqli("localhost", "root", "", "latihan");
    $nim            = $_POST['nim'];

    $result = mysqli_query($connection, "delete from dosen where nim='$nim'");

    if($result) {
        echo json_encode([
            'message' => 'Data dosen delete successfully'
        ]);
    } else{
        echo json_encode([
            'message' => 'Data dosen Failed to delete'
        ]);
    }
