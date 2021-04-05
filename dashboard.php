<?php
    include_once "config.php";
    session_start();
    if(empty($_SESSION["name"])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>
<div class="nav">
    <ul>
      <li><a href="./home.php" class="nav-link">Home</a></li>
      <li><a href="./index.php" class="nav-link">Menu</a></li>
      <li><a href="#" class="nav-link">Order Now</a></li>
      <li><a href="#" class="nav-link">About</a></li>
      <li><a href="./login.php" class="nav-link">Login</a></li>
      <li><a href="#" class="nav-link">Dashboard</a></li>
      <li><a href="./admin.php" class="nav-link">Edite</a></li>
    </ul>
<div class="container">
    <img class="img1" src="./images/nouriture.jpg" alt="">
    
<form class="dash1" action="add.php" method="POST" enctype="multipart/form-data">
    <h1>Add product</h1>
<BR>
<label for="">product name :</label> <br>
<input class="dashboard" type="text" name="productname"> <br>
<label for="">product price :</label><br>
<input class="dashboard" type="text" name="productprice"> <br>
<label for="">product image :</label><br>
<input class="dashboard" type="file" name="productimage"> <br>
<label for="">product category :</label><br>
<select class="dashboard" name="productcategory">
    <?php
    $categoriesSQL = "SELECT * FROM categories";
    $categoriesQuery = mysqli_query($con, $categoriesSQL);
     while($categoriesResults = mysqli_fetch_assoc($categoriesQuery)){
        echo '<option value="'.$categoriesResults['categoryID'].'">'.$categoriesResults['categoryName'].'</option>';
    } ?>

</select>
<br>
<input class="dashboard" value="add  product" name="submit" type="submit">
</form>
à

</div>
</body>
</html>
