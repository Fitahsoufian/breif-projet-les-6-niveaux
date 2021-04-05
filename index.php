<?php

include_once "config.php";

$dessertsSQL = "SELECT productName, productPrice, productImage FROM products WHERE productCategory='2'";
$dessertsQuery = mysqli_query($con, $dessertsSQL);

$foodSQL = "SELECT productName, productPrice, productImage FROM products WHERE productCategory='1'";
$foodQuery = mysqli_query($con, $foodSQL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
  <div class="nav">
    <ul>
      <li><a href="./home.php" class="nav-link">Home</a></li>
      <li><a href="./index.php " class="nav-link">Menu</a></li>
      <li><a href="#" class="nav-link">Order Now</a></li>
      <li><a href="#" class="nav-link">About</a></li>
      <li><a href="./login.php" class="nav-link">Login</a></li>
    </ul>
  </div>
    <div class="global">
        <img class="img" src="./images/nouriture.jpg" alt="">
        <h3 class="rest">Restaurant</h3>
        <div class="slogan">
        <h1>JUST</h1>
        <h3>A GREAT</h3>
        <h1>FOOD</h1>
      </div>
        <img class="logo" src="./images/logo.png" alt="">
        <div class="menu">
        <div class="left">
        <h2 class="title"><u> Desserts</u></h2>
<?php 
          while($dessertsResults = mysqli_fetch_assoc($dessertsQuery)){

            echo '<div class="first a">
            <img class="ex" src="'. $dessertsResults["productImage"] . '" alt="">
            <div class="org">
            <p class="food">'.$dessertsResults["productName"].'</p>
            <h4 class="prix">'.$dessertsResults["productPrice"].' DH</h4></div>
          </div>';
}
?> 
        </div>
        <div class="right">
          <h2 class="title"><u> FOOD</u></h2>
          <?php 

          while($foodResults = mysqli_fetch_assoc($foodQuery)){

          echo '<div class="first a">
          <img class="ex" src="'. $foodResults["productImage"] . '" alt="">
          <div class="org">
          <p class="food">'.$foodResults["productName"].'</p>
          <h4 class="prix">'.$foodResults["productPrice"].' DH</h4></div>
          </div>';

          }
          ?>

        </div>
      </div>

    </div>
    <div class="footer">
      <div class="foot">
      <img class="footerlogo" src="./images/logo.png" alt="">
      <h5 class="txt1">© Copyright 2020-2021 YouCode Company S.L. All rights reserved</h5></div> <br>
      <div class="info">
      <div class="info1">
      <h5 class="txt"> YouCodeRestaurant@gmail.com </h5><br>
      <h5 class="txt"> 0539871425 </h5>
    </div>
    <div class="info2">
      <h5 class="txt"> YouCodeRestaurant</h5><br>
      <h5 class="txt"> @YouCodeRestaurant </h5> <br>
      <h5 class="txt"> YouCodeRestaurant </h5>
    </div>
    </div>
    </div>
</body>
</html>