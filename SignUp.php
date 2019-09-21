<?php
session_status();


$con = mysqli_connect ('localhost','root');

mysqli_select_db($con, 'teambubble');
$name = $_POST['txtFullName'];
$user = $_POST['txtUser'];
$pass = $_POST['txtPass'];
$repass = $_POST['txtRePass'];
$email = $_POST['txtEmail'];

$s = "select * from signup where Username = '$user' ";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1){
    echo "Username Already Taken";

}else{
    $reg ="insert into signup(fullName , Username , Password , retypePassword , Email) value ('$name' , '$user' , '$pass' , '$repass' , '$email')";
    mysqli_query($con, $reg);
    echo "<h2>Registration Succesfully</h2>";
    header('location:Login.html'); 
    

}