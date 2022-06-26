<?php
  include 'conn.php';
?>


<html>
    <head>
        <title>home</title>
    </head>
    <link rel="stylesheet" href="static/style.css">
    <style>
   
    </style>
    <body>
        <header>
            <div class="header">
                <div class="head">
                    <img src="static/meme-logo.png" alt="Logo" >
                </div>
                <div class="head">
                    <nav>
                        <ul>
                            <li><a href=".">Home</a></li>
                            <li><a href="meme.php">Meme's</a></li>
                            
                            
                        </ul>
                    </nav>
                </div>
                <div class="head"></div>
            </div>
        </header>
        
        <div class="content">
            <div class="front">
           <img src="static/memes.jpg" alt="meme">
            </div>
            
            <div class="top">
            <h2>Featured meme's</h2>
        </div>
            <?php
                include 'conn.php';

                if($result->num_rows > 0) {
                    ?>


                    
                    <?php
                    while($row = $result->fetch_array()){

                        
                    ?> 
                        <div class="gallery">
                           
                            <div>
                            <img src="uploads/<?php echo $row['file']; ?>" alt="meme">
                            </div>
                            <a href="download.php?image=uploads/<?php echo $row['file']?>">Download</a>
                        </div>
                <?php        
                    
                    }
                    
                    
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