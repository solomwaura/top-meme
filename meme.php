<html>
    <head>
        <title>meme</title>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2888641091946121"
     crossorigin="anonymous"></script>
    </head>
    <link rel="stylesheet" href="static/style.css">
    <style>
        @media(max-width: 400px){
            body {
                background-color:red;
            }
            .content{
                display:block;
                background-color:red;
            }
        }
    </style>
    <body>
        <header>
            <div class="header">
                <div class="head">
                    <img src="static/meme-logo.png" alt="Logo">
                </div>
                <div class="head">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href=".">Meme's</a></li>
                            <li><a href="#">About Us</a></li>
                            
                            
                        </ul>
                    </nav>
                </div>
                <div class="head"></div>
            </div>
        </header>
        <hr>
     
    <div class="content">
        <div class="top">
            <h2>Featured meme's</h2>
        </div>
    <?php
        include 'conn.php';

        if($result->num_rows > 0) {
     ?>


        
            <?php
            while($row = $result->fetch_array()){

                $file = $row['id'];
                
            ?>
            <br>
            <br>
            <br>
        <div class="gallery">
            <!-- <a href="download.php?image=uploads/<?php echo $row['file']?>">Download</a> -->
            <div>
            <img src="uploads/<?php echo $row['file']; ?>" alt="meme">
            </div>
            <p><i class="fa-light fa-arrow-down-left-and-arrow-up-right-to-center"></i></p>
            <a href="download.php?image=uploads/<?php echo $row['file']?>">Save</a> 
        </div>
            <?php
                }
            ?>
            
    <?php     
        }
    ?>


        
</div>
</body>
<footer>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="meme.php">Meme's</a></li>
                
                
            </ul>
        </nav>
    </footer>
</html>



