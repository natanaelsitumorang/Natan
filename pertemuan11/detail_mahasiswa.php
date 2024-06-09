<?php
    
    $connection = new mysqli("localhost","root","","latihan");
    $data       = mysqli_query($connection, "select * from mahasiswa where nim=".$_GET['nim']);
    $data       = mysqli_fetch_array($data, MYSQLI_ASSOC);

    echo json_encode($data);    