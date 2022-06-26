<?php

    include 'conn.php';

?>
<html>
    <head>
        <title>admin</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <body>
        <a href="meme.php">View Memes</a>
        <br>
        <br>
        <br>
        <div class="content">
            <form action="conn.php" method="post" enctype="multipart/form-data">
                <input type="file" name="files[]" id="file" required multiple> <br>
                  <br>
                <input type="submit" value="Upload" name="upload">
            </form>
        </div>
    </body>
</html>