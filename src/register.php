<?php
session_start();
if(isset($_SESSION["login"]))
{
    header("location: index.php");
    exit;
}

require 'functions.php';

if(isset($_POST["register"]))
{
    if(registrasi($_POST) > 0)
    {
        echo"<script>
                alert('Akun berhasil dibuat! Silahkan Login!');
            </script>";
    }
    else
    {
        echo mysqli_error($conn);
    }
}
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
    <form action="" method="post">
      <div class="form-group">
        <label class="form-label">User Name</label>
        <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username">
      </div>

      <div class="form-group">
        <label class="form-label">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password">
      </div>

      <div class="form-group">
        <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm Password">
      </div>

      <input class="btn btn-warning w-100" type="submit" name="register" id="register" value="Make Account">
    </form>
    <br>
    <p style="color: grey;">Have an account?
      <a style="color: black;" href="login.php">Login</a>
    </p>
    <p style="color: grey;">Back to
      <a style="color: black;" href="index.php" class="ayam">Home</a>
    </p>
  </div>

</body>
</html>


