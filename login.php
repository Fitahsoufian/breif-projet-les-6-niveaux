<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="nav">
        <ul>
          <li><a href="./home.php" class="nav-link">Home</a></li>
          <li><a href="./index.php" class="nav-link">Menu</a></li>
          <li><a href="#" class="nav-link">Order Now</a></li>
          <li><a href="#" class="nav-link">About</a></li>
          <li><a href="./login.php" class="nav-link">Login</a></li>
        </ul>
      </div>
      <div class="global">
        <img class="img" src="./images/nouriture.jpg" alt="">
        <img class="logo1" src="./images/logo.png" alt="">
        <h3 class="rest1">Restaurant</h3>
        <div class="login">
            <h3>LOGIN</u> </h3>
        <form action="process.php" method="POST" >
                  <input type="email" id="email" name="username" placeholder="Your email..">
                  <input type="password" id="password" name="password" placeholder="Your password..">
                  <input type="submit" value="Singin" name="singin" >
      </form>    
    </div>
</body>
</html>