<?php
  session_start();
  include("config.php");

  $flag = isset($_SESSION['name']);
  if($flag){
    $name = $_SESSION['name'];
   }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>

    <div>
        <header>
            <section class="navbar_m">
                <nav id="nav" class="navbar">
                    <h1 class="logo"><a href="./index.php"><span>G</span>adge<span>t</span>
                            <span>S</span>ho<span>p</span></a></h1>
                    <a href="Gadget_Shop.php"></a>
                    <div class="nav-links">
                    <a href="cart.php"><b>Cart</b></a>
                    </div>
                </nav>
            </section>




            

        <?php
          if($flag){
            $query = "SELECT `laptop`, `monitor`, `keyboard`, `mouse`, `processor`, `graphics`, `ssd`, `gaming`, `headphone`, `smart`, `router`, `portable`, `total` FROM `info` WHERE name='$name' ";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_assoc($result);
            
            $laptop = $row['laptop'];
            $monitor = $row['monitor'];
            $keyboard = $row['keyboard'];
            $mouse = $row['mouse'];
            $processor = $row['processor'];
            $graphics = $row['graphics'];
            $ssd = $row['ssd'];
            $gaming = $row['gaming'];
            $headphone = $row['headphone'];
            $smart = $row['smart'];
            $router = $row['router'];
            $portable = $row['portable'];
            $total = $row['total'];


            echo "<table border='1' style='display: flex;text-align: center;flex-direction: column;align-items: center;'>";
                echo "<tr>"; 
                    echo "<th>"; echo "Class"; echo "</th>";
                    echo "<th>"; echo "Price Per Quantity"; echo "</th>";
                    echo "<th>"; echo "Total Quantity"; echo "</th>";
                echo "</tr>";


                echo "<tr>"; 
                    echo "<th>"; echo "Laptop"; echo "</th>"; 
                    echo "<th>"; echo "1500"; echo "</th>"; 
                    echo "<td>"; echo $laptop; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo "Monitor"; echo "</th>";
                    echo "<th>"; echo "400"; echo "</th>";
                    echo "<td>"; echo $monitor; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo "Keyboard"; echo "</th>";
                    echo "<th>"; echo "150"; echo "</th>";
                    echo "<td>"; echo $keyboard; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo "Mouse"; echo "</th>";
                    echo "<th>"; echo "170"; echo "</th>";
                    echo "<td>"; echo $mouse; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo "Processor"; echo "</th>";
                    echo "<th>"; echo "300"; echo "</th>";
                    echo "<td>"; echo $processor; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo "Graphics Card"; echo "</th>";
                    echo "<th>"; echo "500"; echo "</th>";
                    echo "<td>"; echo $graphics; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo "SSD"; echo "</th>";
                    echo "<th>"; echo "100"; echo "</th>";
                    echo "<td>"; echo $ssd; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo "Gaming Console"; echo "</th>";
                    echo "<th>"; echo "700"; echo "</th>";
                     echo "<td>"; echo $gaming; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo "Headphone"; echo "</th>";
                    echo "<th>"; echo "140"; echo "</th>";
                    echo "<td>"; echo $headphone; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo "Smart Watch"; echo "</th>";
                    echo "<th>"; echo "200"; echo "</th>";
                    echo "<td>"; echo $smart; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo "Router"; echo "</th>";
                    echo "<th>"; echo "130"; echo "</th>";
                    echo "<td>"; echo $router; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo "Portable WiFi Camera";echo "</th>";
                    echo "<th>"; echo "90";echo "</th>";
                     echo "<td>"; echo $portable; echo "</td>";
                echo "</tr>";

                echo "<tr>"; 
                    echo "<th>"; echo ""; echo "</th>";
                    echo "<th>"; echo "Total Cost"; echo "</th>";
                    echo "<td>"; echo $total; echo "</td>";
                echo "</tr>";


            echo "</table>";
          }
          else{
            ?>
            <div class="cart">
                <section class="cart_name">
                    <b>Your shopping cart is empty!</b>
                </section>
            </div>
            <?php
          }
        ?>
        </header>
    </div>

</body>

</html>