<?php
// start session so that errors can be available in this file to print
session_start();

?>




<!DOCTYPE html>
<html>
<head>
  <title>Add new Item</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  <style type="text/css">
    .abc{
      border-radius: 50px;
      padding-bottom: 50px;
      margin-left: 50px;
      margin-right: 50px;
      
    }
  </style>

</head>
<body>
  <div align="center" class="bg-dark text-light pt-4 pb-4">
    <a href="../logout.php"><button style="float: right;" class="btn btn-danger mr-3">LOGOUT</button></a>
    <a href="admindash.php"><button style="float: left;" class="btn btn-success ml-3"><< BACK</button></a>
    <h1>WELCOME TO ADMIN DASHBOARD</h1>  
  </div>


  <div class="text-light abc">
    <div class="text-center mt-5 pt-5" >
      <h1>ADD NEW ITEM</h1>
    </div>

    <table align="center" style="margin-top: 50px; margin-right: 400px;" cellpadding="3">
      <form action="../database/dbshoe.php " method="post" enctype="multipart/form-data">
     


        <tr>
          <td>Name</td>
          <td>
            <input type="text" name="name" required>
          </td>
        </tr>
        <tr>
          <td>price</td>
          <td>
            <input type="text" name="price" required>
          </td>
        </tr>
        <tr>
          <td>desc</td>
          <td>
            <textarea cols="22" name="desc" required=""></textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <br><input type="submit" name="submit" value="ADD" class="btn btn-success" style="margin-right:   75px; width: 150px;">
            
          </td>
        </tr>
      </form>
    </table>
  </div>


  <script src="bootstrap/jss/jquery.min.js"></script>
  <script src="bootstrap/jss/popper.min.js"></script>
  <script src="bootstrap/jss/bootstrap.min.js"></script>
</body>
</html>
