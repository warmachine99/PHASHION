<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
    <h2>Login Here</h2>
        <input type="email" name="email" placeholder="Enter Email Here">
        <input type="password" name="" placeholder="Enter Password Here">
        <button class="btnn"><a href="#">Login</a></button>
        <p class="link">Don't have an account<br>
        <a href="#">Sign up </a> here</a></p>
        <p class="liw">Log in with</p>
        <div class="icons">
            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="#"><ion-icon name="logo-google"></ion-icon></a>
            <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
      </div>
   </div>
</body>
</html>







<?php  
// define variables to empty values  
$emailErr ="";  
$email = "";
$password="";
$passwordErr="";
$msg = "";
  
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassworErr = $_POST['cpassword']; 

    if (empty($email) || empty($emailErr) || empty($password) || empty($passwordErr)) {
        $msg = "<div class='alert alert-danger'>All fields are required.</div>";
        } else {
            if ($password !== $passwordErr) {
                    $msg = "<div class='alert alert-danger'>Password and confirm password do not match.</div>";
                }else {
                    $msg = "<div class='alert alert-success'>Login successful.</div>";
                }
            }
        
}


?>

