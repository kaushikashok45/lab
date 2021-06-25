<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Delivery Status</title>
      <link rel="stylesheet" type="text/css" href="css/login.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <header>
            <img id="logo" src="images/logo.png" alt="logo">
        </header>
        <h1>Delivery Status Checking System</h1>
        <div id="logbox">
            <h2><centre>Enter Details</centre></h2>
            <form method=“post” action="process.php">
                <label>Tracking ID: </label>
                <input type="text" placeholder="Enter Tracking ID.." name="trackid" size="22" maxlength="20" required>
                <span id="error"></span>
                <br> 
                <input type="submit" value="submit" name="track">
            </form>
        </div>
    </body>
</html>
<?php 
  session_start();
  if(isset($_SESSION['message'])){
      echo "<script>document.getElementById('error').innerHTML='Invalid Tracking ID!';</script>";
      unset($_SESSION['message']);
  }
?>
<style>
    #error{
        margin-left:50px;
        text-align:center;
        color:red;
    }
    #success{
        margin-left:50px;
        text-align:center;
        color:green;
    }
</style>