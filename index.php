<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page | Team-Bubble</title>
    <link rel="stylesheet" href="style.css">
</head>




<body>


    <div class="bdy">

        <div class="container">

            <div class="null"></div>

            <div class="wrapper">
                <img src="https://res.cloudinary.com/esther/image/upload/v1568825271/Group_3x.svg">
                <div class="forms">
                    

            </div>
        </div>
    </div>
<a  href="Logout.php"><label for="">Logout</label></a>
    <h1>Welcome <?php echo $_SESSION['username'] ?> </h1>
    

</body>

</html>




