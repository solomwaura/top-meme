<html>
    <head>
        <title>admin-meme's</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <style>
        img{
            width:200px;
            height:200px;
        }
    </style>
    <body>
        <a href="index.php">Upload</a>
        <h3>The meme page</h3>
        <div class="content">
            <?php
                include 'conn.php';

                if($result->num_rows > 0) {
                    ?>


                    <div class="gallery">
                        <?php
                        while($row = $result->fetch_array()){
                            
                        ?>
                        <img src="../uploads/<?php echo $row['file']; ?>" alt="meme">
                        <?php
                        }
                        ?>
                    </div>
               <?php     
                }
               ?>

             
        </div>
    </body>
</html>