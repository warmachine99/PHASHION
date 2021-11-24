

<?php

$query="";

if($_POST)
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="webtf";
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conn = mysqli_connect($host,$user,$pass,$db); 
    $query = "INSERT into phasion (id,name, email, password) VALUES ('$id','$name','$email', '$password')";
    $result = mysqli_query($conn,$query);

  
}
else{
    echo 'not inserted';

}

if(!$query){
    echo'<script> alert("uncessful");</script>';
}
else{
 
    header("location: index.php ");
    
     //After this button what next
}


?>
<!-- "/Extra Pages/main.php"  -->