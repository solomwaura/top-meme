<?php

    include '../scripts/conn.php';

?>
<html>
    <head>
        <title>upload</title>
    </head>
    <body>
        <div class="content">
            <form action="../scripts/conn.php" method="post" enctype="multipart/form-data">
                <input type="file" name="files[]" id="file" required multiple> <br>
                  <br>
                <input type="submit" value="Upload" name="upload">
            </form>
        </div>
    </body>
</html>