<?php

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;

// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

to my personal db and reloading

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

$query = "SELECT * FROM meme";

$result = $conn->query($query);


// if(isset($_GET['file_id'])) {
//     $id = $_GET['file_id'];

//     $sql = "SELECT *FROM memes WHERE id=$id ";

//     $result = $conn->query($conn,$sql);

//     if($result->num_rows>0){
//         $file = mysqli_fetch_assoc($result);
//         $filepath = 'uploads/' . $file['name'];
    
//         if(file_exists($filepath)) {
//             header('Content-Description: File Transfer');
//             header('Content-Type: application/octet-stream');
//             header('Content-Disposition: attachment; filename=' . basename($filepath));
//             header('Expires: 0');
//             header('Cache-Control: must-revalidate');
//             header('Pragma: public');
//             header('Content-Length: ' . filesize('uploads/' . $file['name']));
//             readfile('uploads/' . $file['name']);
//         } 
//     }

    
// }
?>