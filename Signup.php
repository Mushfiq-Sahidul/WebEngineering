<?php
    include("config.php");


    if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $query = "INSERT INTO `info`(`name`, `number`, `email`, `pass`) VALUES ('$name','$number','$email','$pass')";

        mysqli_query($connect, $query);
        header('location: Login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
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
            <h2>Register Account</h2>
            <form method="POST">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="number" placeholder="Contact Number">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="pass" placeholder="Password">
                <input type="submit" name="signup" value="Sign Up" class="button">
                <p><b>Already have an account? </b><a href="Login.php">Log In</a></p>
            </form>

        </div>
    </div>

    </header>
    </div>

</body>

</html>