<?php
  include 'conn.php';
?>


<html>
    <head>
        <title>home</title>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2888641091946121"
     crossorigin="anonymous"></script>
    </head>
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="style2.css">
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
                           
                            <div class="meme">
                                 <img src="uploads/<?php echo $row['file']; ?>" alt="meme">
                            </div>
                            <p class="icon"><a href="download.php?image=uploads/<?php echo $row['file']?>" class="download"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 1792 1792"><path d="M1344 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm256 0q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm128-224v320q0 40-28 68t-68 28h-1472q-40 0-68-28t-28-68v-320q0-40 28-68t68-28h465l135 136q58 56 136 56t136-56l136-136h464q40 0 68 28t28 68zm-325-569q17 41-14 70l-448 448q-18 19-45 19t-45-19l-448-448q-31-29-14-70 17-39 59-39h256v-448q0-26 19-45t45-19h256q26 0 45 19t19 45v448h256q42 0 59 39z"/></svg></a></p>
                            <!-- <a href="download.php?image=uploads/<?php echo $row['file']?>"> Save </a> -->
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