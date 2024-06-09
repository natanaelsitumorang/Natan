<?php 

    $connection = new mysqli("localhost","root","","latihan");
    $title      = $_POST['title'];
    $kutipan    = $_POST['kutipan'];
    $nim         = $_POST['nim'];

    $result = mysqli_query($connection, "update note_app set title='$title', kutipan='$kutipan', where nim='$nim'");

    if($result){
        echo json_encode([
            'message' => 'Data mahasiswa edit successfully'
        ]);
    }else{
        echo json_encode([
                'message' => 'Data mahasiswa Failed to update'
        ]);  
    }
        
