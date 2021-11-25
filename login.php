<?php
    $conn= mysqli_connect('localhost', 'root', '', 'webtf');

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }





if(isset($_POST['login_user'])){
  
    $email= $_POST['email'];
    $password=$_POST['password'];
    
    $query1= "SELECT * from phasion WHERE email= '$email'";

    $que = mysqli_query($conn,$query1); 
    
    $row1 = mysqli_fetch_array($que);

  

  
    //if row1 is not empty has
    if(!empty( $row1)){
        // $password= md5($password);

        if($password== $row1['password']){
          session_start();
          
          $_SESSION['user_id'] = $row1['id']; 
          header("location: Extra Pages/main.php");


        }else{
            echo '<script> alert("password is wrong");</script>';
        }





        
    }else{
        echo '<script> alert("user not found");</script>'; 
    }
 



    


}

?>