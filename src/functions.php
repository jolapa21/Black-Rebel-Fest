<?php

$conn = mysqli_connect("localhost", "root", "", "brf22");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    return $rows;
}


function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    if(empty($username)) 
    { 
        echo"<script>
                alert('Username tidak boleh kosong!');
            </script>";
        return false; 
    }
    if(empty($password)) 
    { 
        echo"<script>
                alert('Password tidak boleh kosong!');
            </script>";
        return false; 
    }

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result))
    {
        echo"<script>
                alert('Username sudah terdaftar!');
            </script>";
        return false;
    }

    if($password !== $password2)
    {
        echo"<script>
                alert('Konfirmasi Password tidak sesuai!');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    
    return mysqli_affected_rows($conn);
}

?>