<?php
include "config.php";

if(isset($_POST['singin'])){
    $name = $_POST["username"];
    $password = $_POST["password"];
    $query= "select * from adminlogin where admin_email='$name' and admin_password='$password'";
    $result=mysqli_query($con,$query);
    $count = mysqli_num_rows($result);

    $row = mysqli_fetch_assoc($result);
    if( $count > 0){
        session_start();
        $_SESSION["name"] = $row["admin_email"];
        
        header ("Location:dashboard.php");  

    }
    else {

        echo "login not success";
    }
}