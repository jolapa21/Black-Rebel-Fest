<?php
session_start();
if(isset($_SESSION["login"]))
{
    header("location: index.php");
    exit;
}

require 'functions.php';

if(isset($_POST["login"]))
{
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  if(mysqli_num_rows($result) == 1)
  {
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"]))
    {
      $_SESSION["login"] = true;
      $_SESSION["username"] = $username;

      header("location: index.php");
      exit;
    }
    else
    {
      $error = true;
    }
  }
  else
  {
    $error = true;
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

    <?php if(isset($error)): ?>
        <p style="color: red;" class="text-center">Username atau Password Salah!</p>
    <?php endif; ?>

    <form action="" method="post">
      <div class="form-group">
        <label class="form-label">User Name</label>
        <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username">
      </div>

      <div class="form-group">
        <label class="form-label">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password">
      </div>

      <input class="btn btn-warning w-100" type="submit" name="login" id="login" value="Login">
    </form>
    
    <br>
    <p style="color: grey;">Don't have an account?
      <a style="color: black;" href="register.php">Register</a>
    </p>
    <p style="color: grey;">Back to
      <a style="color: black;" href="index.php" class="ayam">Home</a>
    </p>
  </div>

</body>
</html>


