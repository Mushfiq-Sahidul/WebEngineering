<?php 

    include("config.php");


    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM `info` WHERE email = '$email' && pass='$pass'";

        $q = mysqli_query($connect,$query);

        if(mysqli_num_rows($q)>0){
            $row = mysqli_fetch_assoc($q);
            session_start();
            $_SESSION['name'] = $row['name'];
            header("Location: index.php");

        }
        else{
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            header("Location: Login.php");
        }

        
    }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div>

        <section class="navbar_m">
            <nav id="nav" class="navbar">
                <h1 class="logo"><a href="./index.php"><span>G</span>adge<span>t</span>
                        <span>S</span>ho<span>p</span></a></h1>
                <a href="Gadget_Shop.php"></a>
                <div class="nav-links">
                    <a href="Signup.php"><b>Sign Up</b></a>
                    <a href="Login.php"><b>Login</b></a>
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </nav>
        </section>


        <div class="login">
            <h2>Login</h2>
            <form method="POST">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="password" placeholder="Password">
                <input type="submit" name="login" value="Log In" class="button">
                <p><b>Don't have an account? </b><a href="Signup.php">Sign Up</a></p>
            </form>


        </div>
    </div>

    </div>

</body>

</html>