<?php
  include 'conn.php';
?>


<html>
    <head>
        <title>home</title>
    </head>
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        
        @media(max-width:400px){
            body{
                padding:10px;
                background-color:red;
                
            }
            .content {
                display:block;
            }
        }
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
                            <li><a href="#">About Us</a></li>
                            
                        </ul>
                    </nav>
                </div>
                <div class="head"></div>
            </div>
        </header>
        <div class="top">

                <h2>Featured meme's</h2>

        </div>
        <div class="content">
           
            
            
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
                            <p><i class="fa-light fa-arrow-down-left-and-arrow-up-right-to-center"></i></p>
                            <a href="download.php?image=uploads/<?php echo $row['file']?>"> Save </a>
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