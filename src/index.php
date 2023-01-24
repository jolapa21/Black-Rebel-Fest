<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="stylesheet" href="index_style.css">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Black Rebel Fest 2022</title>
</head>

<body>
    <?php
        if(isset($_GET['tiket']))
        {
		    include"tiket.php";
		}
		else if(isset($_GET['about']))
        {
			include"about.php";
		}
		else if(isset($_GET['login']))
        {
		    include"login.php";
		}
        else if(isset($_GET['mytiket']))
        {
		    include"mytiket.php";
		}
        else if(isset($_GET['lineup']))
        {
		    include"lineup.php";
		}
		else
        {
			include"home.php";
		}
	?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

