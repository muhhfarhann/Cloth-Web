<?php 
  require 'connection.php';
  $gambar = htmlspecialchars($_GET['gambar']);
  $queryproduk = mysqli_query($conn,"SELECT * FROM detail_product WHERE gambar='$gambar'");
  $produk = mysqli_fetch_assoc($queryproduk);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Local css -->
    <link rel="stylesheet" href="css/detail.css">
</head>
<body>
    
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
        <div class="container">
          <a class="navbar-brand" href="index.html">SHOP<span class="text-primary">A</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="evrything.php
                ">EVERYTHING</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="women.php">WOMEN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="men.php">MEN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="accessories.php">ACCESSORIES</a>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">CONTACTUS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" id="chart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket3" viewBox="0 0 16 16">
                    <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6z"/>
                    </svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- List Chart -->
        <section id="chart-list" class="chart-list">
          <div class="container border">
            <div class="row">
              <div class="col">
                <h6 class="">Chart</h6>
              </div>
              <div class="col text-end">
                <button type="button" class="btn-close" id="close-chart" aria-label="close"></button>
              </div>
            </div>
            <!-- Form to cart and checkout -->
            <form action="" method="post">
              <div class="row chart-items">
                <div class="col">
                  <img src="img/mockup.jpg" alt="" width="50" height="50">
                </div>
                <div class="col-6">
                  <h6>Blue Jeans</h6>
                  <p>$150.000</p>
                </div>
                <div class="col text-end">
                  <button type="submit" class="btn-close" name="cancel"></button>
                </div>
              </div>
              <div class="row border mb-2">
                <button type="button" class="btn btn-outline-success" name="chart">View Chart</button>
              </div>
              <div class="row border">
                <button type="button" class="btn btn-outline-success" name="Checkout">Checkout</button>
              </div>
            </form>
          </div>
        </section>
        <!-- List Chart End -->
      </nav>
    <!-- Navbar End -->

    <!-- Main Start -->
    <main id="main" class="main mb-4">
      <div class="container">
        <div class="row d-flex flex-row">
          <div class="col">
            <div class="row">
              <div class="col text-end">
                <img src="product/<?= $produk['gambar']?>" alt="" width="150">
              </div>
            </div>
          </div>
          <div class="col">
            <p><?= $produk['role']?></p>
            <h2><?= $produk['nama_produk']?></h2>
            <h4>Rp.<?= number_format( $produk['harga'], 0,',','.'); ?></h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, illum?</p>
            <!-- Form add to cart -->
            <form action="" method="post">
              <input type="number" id="quantity" class="input-num border  " name="quantity" value="1" size="1" min="1" max-step="10" inputmode="numeric" autocomplete="off">
              <button type="submit" class="btn btn-outline-success">ADD</button>
            </form>
          </div>
        </div>
      </div>
    </main>
    <!-- Main End -->

    <!-- Content Start -->
    <section id="content" class="content">
      <div class="container border">
        <nav>
          <ul>
            <li><a href="" class="">DESCRIPTION</a></li>
            <li><a href="" class="">ADDTIONAL INFO</a></li>
            <li><a href="" class="">REVIEW</a></li>
          </ul>
        </nav>
        <div class="row">
          <h3>Decription Title</h3>
        </div>
        <div class="row">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, eligendi.
          </p>
        </div>
      </div>
    </section>
    <!-- Content End -->

    <!-- Finish -->
    <section id="finish-content" class="finish-content">
      <div class="container">
        <h2>SALE UP TO 70% OFF FOR ALL CLOTHES</h2>
        <div class="row">
          <div class="col-md col-main">
            <h3>SHOPA</h3>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-md">
            <h3>For Her</h3>
            <ul>
              <li><a href="">MEN TOP</a></li>
              <li><a href="">MEN BOTTOM</a></li>
              <li><a href="">MEN ACCESSORIES</a></li>
            </ul>
          </div>
          <div class="col-md">
            <h3>For Him</h3>
            <ul>
              <li><a href="">WOMEN TOP</a></li>
              <li><a href="">WOMEN BOTTOM</a></li>
              <li><a href="">WOMEN ACCESSORIES</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Finish End -->

    <!-- Footer Start -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="copy-right">
          <p>All right reserved <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
            <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512"/>
          </svg> 2024</p>
        </div>
        
        <div class="links">
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg>
          </a>
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
          </a>
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
              <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
            </svg>
          </a>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

<!-- js -->
<script src="js/index.js"></script>
<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>