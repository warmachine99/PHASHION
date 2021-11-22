<?php
if($_POST)
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="webtf";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conn = mysqli_connect($host,$user,$pass,$db);
    $query = "INSERT into phasion (name, email, password) VALUES ('$name','$email', '$password')";
    $result = mysqli_query($conn,$query);
}
else{
    echo 'not inserted';

}

if(!$query){
    echo'<script> alert("uncessful");</script>';
}
else{
 
    header("location: Extra Pages/main.php ");
    
     //After this button what next
}


?>
<!-- "/Extra Pages/main.php"  -->