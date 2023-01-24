<?php
session_start();
if(!isset($_SESSION["login"]))
{
    header("location: index.php");
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "brf");

if(isset($_POST["pesan"]))
{  
    $jenis = $_SESSION["jenis"];
    $jumlah = $_SESSION["jumlah"];
    $username = $_SESSION["username"];

    $query = "INSERT INTO tiket VALUES ('', '$username', '$jenis', '$jumlah')";
    
    mysqli_query($conn, $query);

    echo"<script>
            alert('Tiket Berhasil Dipesan!');
        </script>";
    
    header("location: index.php?tiket");
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
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="login_style.css">
  <link rel="stylesheet" href="index_style.css">
  <title>Login Page</title>
</head>

<body class="hero">
  <div class="login">
    <h1 class="text-center" style="color: black;">BRF22</h1>

    <p style='color: grey;'>Username</p>
    <p style='font-size: 25px;'><?php echo $_SESSION["username"]; ?></p>
    <p style='color: grey;'>Jenis Tiket</p>
    <p style='font-size: 25px;'><?php echo $_SESSION["jenis"]; ?></p>
    <p style='color: grey;'>Jumlah Tiket</p>
    <p style='font-size: 25px;'><?php echo $_SESSION["jumlah"]; ?></p>

    <form action="" method="post">
        <input class="btn btn-warning w-100" type="submit" name="pesan" id="pesan" value="Konfirmasi Pesanan">
    </form>
  </div>

</body>
</html>


