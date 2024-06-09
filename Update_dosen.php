<?php 

    $connection = new mysqli("localhost","root","","latihan");
    $title      = $_POST['title'];
    $content    = $_POST['content'];
    $nim         = $_POST['nim'];
    
    $result = mysqli_query($connection, "update latihan set title='$title', content='$content', where nim='$nim'");

    if($result){
        echo json_encode([
            'message' => 'Data dosen edit successfully'
        ]);
    }else{
        echo json_encode([
                'message' => 'Data dosen Failed to update'
        ]);  
    }
        
