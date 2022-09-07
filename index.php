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
    <link rel="stylesheet" href="css/styles2.css">
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous"
  />
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    crossorigin="anonymous"
  />
   
    <body>
        <header>
            <div class="header">
                <div class="head">
                    <img src="static/meme-logo.png" alt="Logo" >
                </div>
                <div class="head">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <button class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            target-data="#navbar"
                            >
                            <span class="navbar-toggler-icon"></span>

                        </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <div class="navbar-nav">
                                <a href="." class="nav-item nav-link">Home</a>
                                <a href="videos.php" class="nav-item nav-link">Videos</a>
                                <a href="#" class="nav-item nav-link">About Us</a>
                            </div>
                        </div>
                        <!-- <ul>
                            <li><a href=".">Home</a></li>
                            <li><a href="videos.php">Video's</a></li>
                            <li><a href="#">About Us</a></li>
                            
                        </ul> -->
                    </nav>
                </div>
                <div class="head"></div>
            </div>
        </header>
        <div class="top">

                <h2>Featured meme's</h2>

        </div>
        <div class="content container">
           
            
            
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
        <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>
    <script src="static/index.js"></script>
    </body>
    <footer>
        
    </footer>
</html>