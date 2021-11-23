
<?php include('database.php') ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login </title>
    
        <!-- Theme style  -->
        <link rel="stylesheet" href="Custom Styling/signup.css">
        

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        
    </head>

<body>






<div class="container">
    <form action="database.php" method="POST">
        <h2>Register With Us</h2>
           <div  <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                <div class="input_field">
                <label>Username:</label>
                <input type="text" name="name" placeholder="Enter your name" required value="<?php echo $name; ?>">
                <?php if (isset($name_error)): ?>
	        	<span><?php echo $name_error; ?></span>
	  <?php endif ?>
      
            </div>
            <div class="input_field">
                <label>Password:</label>
                <input type="password" class="input" name="password" placeholder="Enter your password" required>
            </div>      
            <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
                <label>Email:              </label>
                <input type="text"  name="email" placeholder="Enter your email" required value="<?php echo $email; ?>">
            </div>      
            
            <button type ="submit" id="btn" name= "submit"> Submit </button>
        
    
    </form>
</div>

</body>
</html>

