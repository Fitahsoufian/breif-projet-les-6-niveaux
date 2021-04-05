<?php
     include_once "config.php";
?>
<?php
$id = "";
if(isset($_GET['idfood'])){
     $id = $_GET['idfood'];
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
    </ul>
<div class="container">
    <img class="img1" src="./images/nouriture.jpg" alt="">
    
<form class="dash1" action="traitement.php" method="POST" enctype="multipart/form-data">
    <h1>Update product</h1>
<BR>
<?php
if(isset($_GET['idfood'])): ?>
    <?php $id = $_GET['idfood']; ?>
    <?php $query = mysqli_query($con, "SELECT * FROM products WHERE productID = '$id' ");
    $foodResults = mysqli_fetch_array($query);
    $name = $foodResults['productName'];
    $price = $foodResults['productPrice']; 
    ?>
<input class="dashboard" type="hidden" name="id" value="<?php echo $id?>" > <br>
    <label for="">product name :</label> <br>
    <input class="dashboard" type="text" name="productname" value="<?php echo $name?>" > <br>
    <label for="">product price :</label><br>
    <input class="dashboard" type="text" name="productprice" value="<?php echo $price?>"> <br>
    <label for="">product image :</label><br>
    <input class="dashboard" type="file" name="productimage"> <br>
 

</select>
<br>
<input class="dashboard" value="update product" name="update" type="submit">
</form>
<?php endif; ?>

</div>
<?php

if(isset($_POST["update"]))
{
   
    $id = $_POST["id"];
    $name= $_POST["productname"];
    $price= $_POST["productprice"];
    $category= $_POST["productcategory"];
    $image=$_FILES["productimage"]['name'];

    $sourceimage = $_FILES["productimage"]['tmp_name'];
    $destimage = "images/" . $image;
    move_uploaded_file($sourceimage,$destimage);
  
   $qurey =" UPDATE  `products` set `productName` = '$name',`productPrice` = '$price',`productImage` = '$destimage' where `productID` = '$id'";
   $run = mysqli_query($con,$qurey);
   if($run){
       header('location: admin.php');
   }else{
       echo"error";
   }   
}

?>
</body>
</html>