
<?php

$query="";

if($_POST)
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="webtf";
    $s_name = $_POST['name'];
    $s_price = $_POST['price'];
    $s_desc = $_POST['desc'];
    $conn = mysqli_connect($host,$user,$pass,$db); 
    $query = "INSERT INTO shoe (s_name, s_price, s_desc) VALUES ('$s_name','$s_price','$s_desc')";
    $result = mysqli_query($conn,$query);

  
}
else{
    echo 'not inserted';

}

if(!$query){
    echo'<script> alert("uncessful");</script>';
}
else{

    echo'successfully added item';
 
    // header("location: Extra Pages/main.php ");
    
     //After this button what next
}


?>
<!-- "/Extra Pages/main.php"  -->