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
        <h3>The Videos page</h3>
        <div class="content">
            <?php
                include 'conn.php';

                if($output->num_rows > 0) {
                    ?>


                    <div class="gallery">
                        <?php
                        while($row = $output->fetch_array()){
                            
                        ?>
                        <video width="320" height="240" controls autoplay>
                        <source src="../videos/<?php echo $row['file']; ?>" type="video/mp4"> 
                        <source src="movie.ogg" type="video/ogg"> -->
                        Your browser does not support the video tag. -->
                        </video>
                       
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