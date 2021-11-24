
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
    // $s_image = $_POST['image'];
    //the path to store uploaded image
    $target = "database".basename($_FILES['image']['name']);
    $s_image =$_FILES['image']['name'];
    



    $conn = mysqli_connect($host,$user,$pass,$db); 
    $query = "INSERT INTO shoe (s_name, s_price, s_image) VALUES ('$s_name','$s_price','$s_image')";
    $result = mysqli_query($conn,$query);


    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg = " image uploaded";
    }else{
        $msg = "Error image not uploaded";
    }

  
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