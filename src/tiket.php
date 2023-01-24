<?php
session_start();

if(!isset($_SESSION["login"]))
{
    header("location: login.php");
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "brf22");

if(isset($_POST["pesan"]))
{  
    $jenis = $_POST["jenis"];
    $jumlah = $_POST["jumlah"];
    $username = $_SESSION["username"];

    $_SESSION["jenis"] = $jenis;
    $_SESSION["jumlah"] = $jumlah;

    header("location: bayar.php");
}

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
    <link rel="stylesheet" href="tiket_style.css">
    
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
        <div class="row align-items-center" style="height: 80vh;">
            <div class="col-lg-6 login">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="form-label">Jenis Tiket</label>
                        <select class="form-select" name="jenis" id="jenis">
                            <option value="bronze">Bronze</option>
                            <option value="silver">Silver</option>
                            <option value="gold">Gold</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Jumlah Tiket</label>
                        <select class="form-select" name="jumlah" id="jumlah">
                            <option value="satu">Satu</option>
                            <option value="dua">Dua</option>
                            <option value="tiga">Tiga</option>
                        </select>
                    </div>
                    
                    <?php if(mysqli_num_rows($result) > 2) {?>
                        <input class="btn btn-secondary w-100" type="submit" name="" id="" value="Memenuhi Batas Pemesanan">
                    <?php }  
                    else {?>
                        <input class="btn btn-warning w-100" type="submit" name="pesan" id="pesan" value="Pesan Tiket">
                    <?php }?>
                </form>
                <br>
                <?php if(mysqli_num_rows($result) > 0) {?>
                    <a class="btn btn-warning w-100" href="index.php?mytiket">Your Ticket</a>
                <?php } ?>
            </div>

            <div class="col-lg-6">
                <h1 class="diplay-4 text-white">
                    Get Your Tickets!
                </h1>
                <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt excepturi iusto, accusantium, cumque repellat accusamus eius atque dolorum</p>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>