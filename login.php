<?php
session_start();
if(isset($_POST['submit']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM phasion where email='$email' and password='md5($password)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["password"]=$row['password']; 
        header("location: Extra Pages/main.php "); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>
