<?php
include("./php/connection.php");

$query = "SELECT * FROM bags";
$result = mysqli_query($con, $query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PackJoy</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>

  <header>
    <div class="nav container">
      <div id="menu-icon" class="fas fa-bars"></div>
      <a href="#" class="logo">PackJoy</a>
      <ul class="navbar">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#cars">Backpack</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#parts">Parts</a></li>
        <li><a href="#blog">Our Blog</a></li>
      </ul>
      <div class="s-l" id="login-btn">
        <a href="./php/login.php" class="btn" id="login-btn--">Login</a>
      </div>
    </div>
  </header>
  <section class="home">
    <div class="main-text">
      <h1>Welcome to PackJoy</h1>
      <p>Your one stop shop for all your packing needs.</p>
      <button class="main-btn">Shop Now</button>
    </div>
  </section>

  <style>
    /* Container styling */
    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 20px;
      padding: 20px;
    }

    /* Card styling */
    .card {
      width: 200px;
      background-color: #f5f5f5;
      border-radius: 8px;
      padding: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    /* Image styling */
    .card-image img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    /* Title styling */
    .card-content h2 {
      margin-top: 10px;
      font-size: 16px;
      color: #333;
    }

    /* Price styling */
    .card-content .price {
      margin-top: 8px;
      font-size: 14px;
      color: #555;
    }
  </style>

  <section class="bag" id="bag">
    <h2>Our Featured Backpack</h2>
    <div class="center-text">
      <?php

      while ($row = mysqli_fetch_assoc($result)) {

      ?>
        <div class="container">
          <div class="box">
            <img src="./image/<?= basename($row['image']); ?>" alt="Book Image">

            <div class="p-nm">
              <h5>Sale</h5>
            </div>
            <div class="price">
              <h4><?= $row['title'] ?></h4>
              <p>₹<?= $row['price'] ?></p>
            </div>
            <a href="./php/form.php?book_id=<?= $row['book_id'] ?>" class="main-btn">Buy Now</a>
            <!-- <a href="./php/form.php" class="main-btn">Buy Now</a> -->
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section>



  <!-- <section class="bag" id="bag">
    <h2>Our Featured Backpack</h2>
    <div class="center-text">
      <div class="container">
        <div class="box">
          <img src="image/bag01.jpg" alt="">
          <div class="p-nm">
            <h5>Sale</h5>
          </div>
          <div class="price">
            <h4>American Tourister</h4>
            <p>$39.99</p>
          </div>
          <button class="main-btn">Shop Now</button>
        </div>
      </div>

      <div class="container">
        <div class="box">
          <img src="image/bag01.jpg" alt="">
          <div class="p-nm">
            <h5>Sale</h5>
          </div>
          <div class="price">
            <h4>American Tourister</h4>
            <p>$39.99</p>
          </div>
          <button class="main-btn">Shop Now</button>
        </div>
      </div>
      <div class="container">
        <div class="box">
          <img src="image/bag01.jpg" alt="">
          <div class="p-nm">
            <h5>Sale</h5>
          </div>
          <div class="price">
            <h4>American Tourister</h4>
            <p>$39.99</p>
          </div>
          <button class="main-btn">Shop Now</button>
        </div>
      </div>
      <div class="container">
        <div class="box">
          <img src="image/bag01.jpg" alt="">
          <div class="p-nm">
            <h5>Sale</h5>
          </div>
          <div class="price">
            <h4>American Tourister</h4>
            <p>$39.99</p>
          </div>
          <button class="main-btn">Shop Now</button>
        </div>
      </div>
      <div class="container">
        <div class="box">
          <img src="image/bag01.jpg" alt="">
          <div class="p-nm">
            <h5>Sale</h5>
          </div>
          <div class="price">
            <h4>American Tourister</h4>
            <p>$39.99</p>
          </div>
          <button class="main-btn">Shop Now</button>
        </div>
      </div>
      <div class="container">
        <div class="box">
          <img src="image/bag01.jpg" alt="">
          <div class="p-nm">
            <h5>Sale</h5>
          </div>
          <div class="price">
            <h4>American Tourister</h4>
            <p>$39.99</p>
          </div>
          <button class="main-btn">Shop Now</button>
        </div>
      </div>
      <div class="container">
        <div class="box">
          <img src="image/bag01.jpg" alt="">
          <div class="p-nm">
            <h5>Sale</h5>
          </div>
          <div class="price">
            <h4>American Tourister</h4>
            <p>$39.99</p>
          </div>
          <button class="main-btn">Shop Now</button>
        </div>
      </div>
      <div class="container">
        <div class="box">
          <img src="image/bag01.jpg" alt="">
          <div class="p-nm">
            <h5>Sale</h5>
          </div>
          <div class="price">
            <h4>American Tourister</h4>
            <p>$39.99</p>
          </div>
          <button class="main-btn">Shop Now</button>
        </div>
      </div>
    </div>
  </section> -->
  <!-- <script src='main.js'></script> -->
</body>

</html>