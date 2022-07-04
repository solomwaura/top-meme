<?php

$username ="bbe94980ae7411";
$server = "us-cdbr-east-06.cleardb.net";
$password = "10d7f8f9";
$dbname = "heroku_cea91a05f9525df";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn == TRUE){
    echo "";
}

else{
    die("could not connect:" .mysql_error());
}

if(isset($_POST['upload'])){
    // $file = $_POST['files'];
    // counting total files

    $total = count($_FILES['files']['name']);

    // looping through all files

    for($i=0;$i<$total;$i++){

        $filename = $_FILES['files']['name'][$i];
        
        if( move_uploaded_file($_FILES['files']['tmp_name'][$i],'../uploads/'.$filename)){
            $sql = "INSERT INTO meme (file) VALUES('$filename')";

            if($conn->query($sql) === TRUE) {
                header('location: ../meme_admin/meme.php');
            }
            else{
                header('location: upload.php');
            }
        }else{
            echo 'Error in uploading file - '.$_FILES['files']['name'][$i].'<br/>';
        }

     
       
    }

}

$query = "SELECT * FROM meme ORDER BY id DESC";

$result = $conn->query($query);


$myquery = "SELECT * FROM videos  ORDER BY id DESC";

$output = $conn->query($myquery);
?>