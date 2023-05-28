<?php
  session_start();
  include("config.php");

  $flag = isset($_SESSION['name']);
  if($flag){
    $name = $_SESSION['name'];

    if(isset($_POST['1'])){
      $query = "UPDATE `info` SET `laptop`=`laptop`+1 , `total`=`total`+1500 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
    if(isset($_POST['2'])){
      $query = "UPDATE `info` SET `monitor`=`monitor`+1 , `total`=`total`+400 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
    if(isset($_POST['3'])){
      $query = "UPDATE `info` SET `keyboard`=`keyboard`+1 , `total`=`total`+150 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
    if(isset($_POST['4'])){
      $query = "UPDATE `info` SET `mouse`=`mouse`+1 , `total`=`total`+170 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
    if(isset($_POST['5'])){
      $query = "UPDATE `info` SET `processor`=`processor`+1 , `total`=`total`+300 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
    if(isset($_POST['6'])){
      $query = "UPDATE `info` SET `graphics`=`graphics`+1 , `total`=`total`+500 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
    if(isset($_POST['7'])){
      $query = "UPDATE `info` SET `ssd`=`ssd`+1 , `total`=`total`+100 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
    if(isset($_POST['8'])){
      $query = "UPDATE `info` SET `gaming`=`gaming`+1 , `total`=`total`+700 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
    if(isset($_POST['9'])){
      $query = "UPDATE `info` SET `headphone`=`headphone`+1 , `total`=`total`+140 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
    if(isset($_POST['10'])){
      $query = "UPDATE `info` SET `smart`=`smart`+1 , `total`=`total`+200 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
    if(isset($_POST['11'])){
      $query = "UPDATE `info` SET `router`=`router`+1 , `total`=`total`+130 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
    if(isset($_POST['12'])){
      $query = "UPDATE `info` SET `portable`=`portable`+1 , `total`=`total`+90 WHERE name='$name'";
      mysqli_query($connect, $query);
    }
  }
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gadget Shop</title>
  

  <link rel="stylesheet" href="style.css" />

</head>

<body>
  <header>
    <section>
      <div class="promo">
        <p style="margin-top: 0;"><span class="promo2">Use code "WebEng" to get 10% discount</span></p>
      </div>
    </section>

    <section class="navbar_m">
      <nav id="nav" class="navbar">
        <h1 class="logo"><a href="./index.php"><span>G</span>adge<span>t</span> <span>S</span>ho<span>p</span></a></h1>
        <a href="Gadget_Shop.php"></a>
        <div class="nav-links">

        <?php
          if($flag){
            ?>
            <div class="navbar">
            Welcome, <?php echo $name; ?>
            <form method="POST">
              <input type="submit" value ="Log Out" name="logout" class="button">
            </form>
            <a href="cart.php"><b>Cart</b></a></div>
            <?php 
            if(isset($_POST['logout'])){
              session_destroy();
              header("Location: index.php");
            }
            
            ?>
            
            <?php
          }
          else{
            ?>
          <div class="nav-links">
          <a href="Signup.php"><b>Sign Up</b></a>
          <a href="Login.php"><b>Login</b></a>
        </div>
            <?php
          }
        ?>
          
        </div>
      </nav>
    </section>
  </header>


  <div class="slider">
      
      <img src="slider/img/1.png" class="slide" width="100%" height="50%">  
      <img src="slider/img/2.png" class="slide" width="100%" height="50%">
      <img src="slider/img/3.png" class="slide" width="100%" height="50%">

   </div>

   <script src="script.js"></script>

  


  <div class="featured_category">
    <h2 class="featured-header">Featured Category</h2>
    <p class="featured-text">Get Your Desired Product from Featured Category!</p>
    <div class="featured-items">


      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/laptop.png" alt="Laptop" width="48" height="48">
        </span>
        <p>Laptop</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/monitor.png" alt="monitor" width="48" height="48">
        </span>
        <p>Monitor</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/keyboard.png" alt="Keyboard" width="48" height="48">
        </span>
        <p>Keyboard</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/mouse.png" alt="Mouse" width="48" height="48">
        </span>
        <p>Mouse</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/cpu.png" alt="Processor" width="48" height="48">
        </span>
        <p>Processor</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/gpu.png" alt="Graphics Card" width="48" height="48">
        </span>
        <p>Graphics Card</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/ssd.png" alt="SSD" width="48" height="48">
        </span>
        <p>SSD</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/gaming-console.png" alt="Gaming Console" width="48" height="48">
        </span>
        <p>Gaming Console</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/headphone.png" alt="Headphone" width="48" height="48">
        </span>
        <p>Headphone</p>

      </div>


      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/smart-watch.png" alt="Smart Watch" width="48" height="48">
        </span>
        <p>Smart Watch</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/router.png" alt="Router" width="48" height="48">
        </span>
        <p>Router</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/portable-camera.png" alt="Portable WiFi Camera" width="48" height="48">
        </span>
        <p>Portable WiFi Camera</p>

      </div>




    </div>
  </div>
  <div class="featured products">
    <h2 class="products-header">Featured Products</h2>
    <p class="products-text">Get Your Desired Product from Featured Category!</p>
    <div class="products-items">

      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/MacBook Pro 14-Inch M1 Max Chip, 32GB RAM, 1TB SSD (Z15H00107) Space Grey-228x228.jpg"
            alt="Laptop">
        </span>
        <p class="produc-title">MacBook Pro 14-Inch M1 Max Chip, 32GB RAM, 1TB SSD</p>
        <span class="price-tag">1499.99$</span>
        <form method="POST">
          <input type="submit" name="1" value="Buy Now" class="button">
        </form>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/MSI Prestige PS341WU 34 8ms Nano IPS 5K2K WUHD Ultra-Wide Monitor.jpg" alt="Monitor">
        </span>
        <p class="produc-title">MSI Prestige PS341WU 34 8ms Nano IPS 5K2K WUHD Ultra-Wide Monitor</p>
        <span class="price-tag">399.99$</span>
        <form method="POST">
          <input type="submit" name="2" value="Buy Now" class="button">
        </form>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Corsair K70 RGB Mechanical Gaming Keyboard Cherry MX Speed.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Corsair K70 RGB Mechanical Gaming Keyboard Cherry MX Speed</p>
        <span class="price-tag">149.99$</span>
       <form method="POST">
          <input type="submit" name="3" value="Buy Now" class="button">
        </form>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Razer Viper Ultimate RGB Gaming Mouse with Charging Dock.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Razer Viper Ultimate RGB Gaming Mouse with Charging Dock</p>
        <span class="price-tag">169.99$</span>
        <form method="POST">
          <input type="submit" name="4" value="Buy Now" class="button">
        </form>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Intel 12th Gen Core i9-12900K Alder Lake Processor.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Intel 12th Gen Core i9-12900K Alder Lake Processor</p>
        <span class="price-tag">299.99$</span>
        <form method="POST">
          <input type="submit" name="5" value="Buy Now" class="button">
        </form>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Zotac Gaming GeForce RTX 3090 Ti AMP Extreme Holo 24GB GDDR6X Graphics Card.jpg"
            alt="Laptop">
        </span>
        <p class="produc-title">Zotac Gaming GeForce RTX 3090 Ti AMP Extreme Holo 24GB GDDR6X Graphics Card</p>
        <span class="price-tag">499.99$</span>
        <form method="POST">
          <input type="submit" name="6" value="Buy Now" class="button">
        </form>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Transcend 230S 4TB 2.5 Inch SATA III SSD.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Transcend 230S 4TB 2.5 Inch SATA III SSD</p>
        <span class="price-tag">99.99$</span>
        <form method="POST">
          <input type="submit" name="7" value="Buy Now" class="button">
        </form>

      </div>

      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Sony PlayStation 5 Analog Version FIFA 2023 Edition.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Sony PlayStation 5 Analog Version FIFA 2023 Edition</p>
        <span class="price-tag">699.99$</span>
        <form method="POST">
          <input type="submit" name="8" value="Buy Now" class="button">
        </form>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Razer BlackShark V2 Pro Rainbow Six Siege Special Edition.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Razer BlackShark V2 Pro Rainbow Six Siege Special Edition</p>
        <span class="price-tag">139.99$</span>
        <form method="POST">
          <input type="submit" name="9" value="Buy Now" class="button">
        </form>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Apple Watch Series 7 45mm Sports Band.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Apple Watch Series 7 45mm Sports Band</p>
        <span class="price-tag">199.99$</span>
        <form method="POST">
          <input type="submit" name="10" value="Buy Now" class="button">
        </form>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Asus Rog Rapture GT-AC5300 5334 Mbps Tri Band WiFi Router.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Asus Rog Rapture GT-AC5300 5334 Mbps Tri Band WiFi Router</p>
        <span class="price-tag">129.99$</span>
        <form method="POST">
          <input type="submit" name="11" value="Buy Now" class="button">
        </form>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Netgear VMS3230 Arlo Home Video Monitoring IP Camera System.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Netgear VMS3230 Arlo Home Video Monitoring IP Camera System</p>
        <span class="price-tag">89.99$</span>
        <form method="POST">
          <input type="submit" name="12" value="Buy Now" class="button">
        </form>

      </div>

    </div>
  </div>

  <footer>
    <div class="container">
      <div class="main-footer">

        <div>
          <h1 class="logo"><span>G</span>adge<span>t</span> <span>S</span>ho<span>p</span></h1>

          <p>
            Best Gadget Shop In Bangladesh!
          </p>
        </div>

        <div class="footer-block about-us">
          <h4 class="h4">About Us</h4>


          <p>
            Mushfiqur Rahman Sohidul<br />
            Md. Minhajul Islam Fahim<br />
          </p>




        </div>
        <div class="footer-block org-info">
          <h4 class="h4">Contact Us</h4>
          <p>
            <br />Head Office: Daffodil International University<br />Daffodil Smart City (DSC), Ashulia, Dhaka-1341.
          </p>
          <p>
            <b>Email:</b>
            <br />
            <a href="mail">mushfiqur15-13832@diu.edu.bd</a>
          </p>

          <div class="row sub-footer">
            <div class="copyright-info">
              <p>Copyright © 2023 | Team Pseudo | All rights reserved</p>
            </div>

          </div>

  </footer>

</body>

</html>