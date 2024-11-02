<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  ShoesPlaza</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fstyle.css">
    <link rel="stylesheet" href="CSS/productdetails.css">
    <link rel="stylesheet" href="CSS/log.css">
    <link rel="stylesheet" href="CSS/regi.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="CSS/about.css">
    <link rel="stylesheet" href="CSS/product.css">
    <link rel="stylesheet" href="CSS/addToCrt.css">

    
     <!-- fevicon -->
     <link rel="shortcut icon" href="favicon\favicon-32x32(1).png" type="image/gif" />
          <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <script src="bootstrap/jquery-1.8.3.min.js"></script>
</head>
<body>


<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color:rgb(0,0,0,.8);">
<div class="container-fluid">
<div id="banner">
  
         <?php echo '<image src="Logo\logo.png" class="d-block w-90" alt="..." height="90" />'; ?>
     </div>

  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #d3b491; font-size: 45px; font-family: lato;">ShoesPlaza</a>
</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse height-15px justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="font-family: lato;">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="product.php" style="font-family: lato;">Product</a>
        </li>
             
        <li class="nav-item">
          <a class="nav-link" href="about.php" style="font-family: lato;">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php" style="font-family: lato;">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="feedback.php" style="font-family: lato;">Feedback</a>
        </li>
        <li class="nav-item"> 

        <?php
          if(isset($_SESSION["un"]))
            echo "<a class='nav-link' href='logout.php' style='font-family: lato;'>LogOut</a>";
          else
          echo "<a class='nav-link' href='log.php' style='font-family: lato;'>Login</a>";
        ?>
        </li>
        <li class="nav-item"> 
          
        </li>
      </ul>
    </div>
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
<div class="carousel-indicators">

    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner bg-dark" style="background-color:rgb(0,0,0,.8);">
  
    <div class="carousel-item active">
    <video  src="videos\Creative Shoes Advertisement.mp4" autoplay muted class="d-block w-100" alt="..." height="450"></video>

    </div>
    <div class="carousel-item">
    <video src="videos\campus.mp4" autoplay muted class="d-block w-100" alt="..." height="400"></video>
    </div>
    <div class="carousel-item">
    <video src="videos\shoes_add.mp4" autoplay muted class="d-block w-100" alt="..." height="400"></video>
    </div>
    <div class="carousel-item">
    <video src="videos\regvideo.mp4" autoplay muted class="d-block w-100" alt="..." height="400"></video>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>
  </html>
