<?php
    include("sessionchecker.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="home.css">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="navi-bar">

        <div class="navi-items">

            <div class="logo_search">
                <div class="logo"><a href="#"><img src="LOGO.png"></a></div>

                <!-- <div class="search">
    
                    <i class='bx bx-search-alt'></i>
                    <input type="text" placeholder="Search">
                </div> -->
                

            </div>
          
            <div class="navi-btn">

                <div class="buttons active"><i class='bx bx-home-alt'></i><a href="#">Home</a></div>
            <div class="buttons"><i class='bx bx-shopping-bag' ></i><a href="#">Products</a></div>
            <div class="buttons"><i class='bx bx-cart' ></i><a href="#">Cart</a></div>
            <div class="buttons"><i class='bx bx-phone'></i><a href="#">About Us</a></div>
            
            </div>

            <div class="user">

                <div class="name"><?php echo $_SESSION['username'] ?> </div>
    
                <div class="photo"></div>
    
            </div>

        </div>

        
    </div>
<div class="grade">
  <div class="btn">
    <button>Order Now</button>
  </div>
  
</div>
<div class="main-body">
  <div class="home_photo">
   
    <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel" >
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="img\homepic1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img\homepic2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img\homepic3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img\homepic4.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> 
    </div>
  </div>
</div>



        </div>

        <div class="hot-product"></div>

    </div>
            

        </div>
    </div>

    <!-- <div>
        <form action="logout.php" method="post">
            <button type="submit" name="logout" class="btn btn-danger">Log out</button>
        </form>
    </div> -->


</body>
</html>