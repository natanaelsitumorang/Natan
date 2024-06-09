<?php 

    $connection = new mysqli("localhost","mi0z7773_natan","aioih92eonoaed-u","mi0z7773_api_tans");
    $title      = $_POST['title'];
    $kutipan    = $_POST['kutipan'];
    $date       = date('Y-m-d');

    $result = mysqli_query($connection, "insert into note_app set title='$title', kutipan='$kutipan', date='$date'");

    if($result){
        echo json_encode([
            'message' => 'Data input mahasiswa successfully'
        ]);
    }else{
        echo json_encode([
                'message' => 'Data mahasiswa Failed to input'
        ]);  
    }

//hai
        
