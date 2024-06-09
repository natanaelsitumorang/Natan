<?php

    $connection     = new mysqli("localhost", "root", "", "latihan");
    $nim            = $_POST['nim'];

    $result = mysqli_query($connection, "delete from mahasiswa where nim='$nim'");

    if($result) {
        echo json_encode([
            'message' => 'Data mahasiswa delete successfully'
        ]);
    } else{
        echo json_encode([
            'message' => 'Data mahasiswa Failed to delete'
        ]);
    }
