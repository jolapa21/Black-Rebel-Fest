<?php
session_start();

if(!isset($_SESSION["login"]))
{
    header("location: login.php");
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "brf");

$username = $_SESSION["username"];
$result = mysqli_query($conn, "SELECT * FROM tiket WHERE username = '$username'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="stylesheet" href="index_style.css">
    <link rel="stylesheet" href="mytiket_style.css">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Black Rebel Fest 2022</title>
</head>

<body class="hero" style="height: 100vh;">
    <nav class="navbar navbar-dark py-3 sticky-top navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h3 class="logo">BRF22</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?lineup">Line Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?tiket">Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <?php if(isset($_SESSION["username"])) { ?>
                            <p class="nav-link text-white m-auto">
                                Selamat datang, <?php echo $_SESSION["username"]; ?>.
                            </p>  
                        <?php }?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row align-items-center">   
            <div class='col-lg-12 login'>
                <div class='row'>
                    <div class='col-lg-6'>
                        <img src="../img/shirt.jpg">
                    </div>
                    <div class='col-lg-6'>
                        <p style='color: lightgrey; font-size: 50px; writing-mode: vertical-rl; text-orientation: upright;'>
                            
                        </p>
                    </div>
                </div>
            </div>

            <div class='col-lg-12 login'>
                <div class='row'>
                    <div class='col-lg-6'>
                        <img src="../img/shirt.jpg">
                    </div>
                    <div class='col-lg-6'>
                        <p style='color: lightgrey; font-size: 50px; writing-mode: vertical-rl; text-orientation: upright;'>       
                        
                        </p>
                    </div>
                </div>
            </div>

            <div class='col-lg-12 login'>
                <div class='row'>
                    <div class='col-lg-6'>
                        <img src="../img/shirt.jpg">
                    </div>
                    <div class='col-lg-6'>
                        <p style='color: lightgrey; font-size: 50px; writing-mode: vertical-rl; text-orientation: upright;'>
                            
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>