<!DOCTYPE html>
<html>
<head>
  <title>Menu Database</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
  <div align="center" class="bg-dark text-light pt-4 pb-4">
    <a href="../logout.php"><button style="float: right;" class="btn btn-danger mr-3">LOGOUT</button></a>
     <h1>WELCOME TO ADMIN DASHBOARD</h1>  
  </div>

  <table align="center" border="1" width="90%" style="margin-top: 20px;" class="mb-5">
    <tr style="background-color: black; color: white;" align="center">
      <th width="100">Item No.</th>
      <th width="250">Name</th>
      <th>Type</th>
      <th width="200">Detail</th>
      <th>Price</th>
      <th width="250">Image</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>

    <?php

      include('../settings/db_cred.php');
    // include('../settings/db_class.php');

    
      $run = mysqli_query(@$conn, "SELECT * FROM shoe");

      if (mysqli_num_rows($run) < 1) 
          {
            echo "<tr><td colspan='5' align='center'>No data found</td><tr>";
          }
      else
      {
        $count = 0;
        while ($data = mysqli_fetch_assoc($run))
        {
          $count++;
          ?>
          <tr align="center">
            <td> <?php echo $data['s_name']; ?> </td>
            <td> <?php echo $data['s_price']; ?> </td>
            <td> <?php echo $data['s_image']; ?> </td>
            <td> <img src="../dataimg/<?php echo $data['image'] ?>" style="max-width:100px;max-height: 100px;"></td>  
            <td> <a href="updateitem1.php?sid=<?php echo $data['id']; ?>"> Edit </a></td>
            <td> <a href="deleteitem1.php?sid=<?php echo $data['id']; ?>"> Delete </a></td>
          </tr>
          <?php
        }
      }
      ?>
    </table>

  <script src="bootstrap/jss/jquery.min.js"></script>
  <script src="bootstrap/jss/popper.min.js"></script>
  <script src="bootstrap/jss/bootstrap.min.js"></script>
</body>
</html>