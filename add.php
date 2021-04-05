<?php
$host="localhost";
$user="root";
$password="";
$db="login";

$con= mysqli_connect($host,$user,$password,$db) or die;
if(isset($_POST['submit'])){
    $name=$_POST["productname"];
    $price=$_POST["productprice"];
    $category=$_POST["productcategory"];
    $image=$_FILES["productimage"]['name'];

    $sourceimage = $_FILES["productimage"]['tmp_name'];
    $destimage = "images/" . $image;
    move_uploaded_file($sourceimage,$destimage);
  
   $qurey="INSERT into products(productName,productPrice,productImage,productCategory) values('$name' , '$price' , 'images/$image' , '$category')";
   $run=mysqli_query($con,$qurey) or die("failed");
   if($run){
       header('location:admin.php');
   }else{
       echo"error";
   }   
}
?>