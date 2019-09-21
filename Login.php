<?php
session_start();
$con = mysqli_connect ('localhost','root');

mysqli_select_db($con, 'teambubble');
$user = $_POST['txtUser'];
$pass = $_POST['txtPass'];

$s = "select * from signup where Username = '$user' && Password = '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
    
if ($num == 1){
      $_SESSION['username']=$user;
    header('location:index.php');
   exit;
}else{
    header('location:index.html');
     echo"<h2>Username and Password is Invalid<h2>";
}
?>



