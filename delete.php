<?php
 include_once "config.php";
 if(isset($_GET['idfood'])){
     $id = $_GET['idfood'];
   $qurey =" DELETE FROM  `products`  where `productID` = '$id'";
   $run = mysqli_query($con,$qurey);
   if($run){
       header('location: admin.php');
   }else{
       echo"error";
   }   
}

?>