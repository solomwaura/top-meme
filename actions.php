<?php

    header("Content-Type:application/json");

  

    try{
        $sql = "SELECT * FROM meme ";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $my_array[] =$row;
        }
        $response = [];
        $response['data'] = $my_array;

        json_encode($response,JSON_PRETTY_PRINT);

    } catch(PDOException $e){
        echo 'Database error.' .$e->getMessage();
    }
    


?>