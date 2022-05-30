<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>LOGIN.Menu</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
</head>

<body>
  <input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="sidebar">
    <header>Menu</header>
    <ul>
      <li><a href="about.php"><i class="fas fa-qrcode"></i>ABOUT</a></li>
      <li><a href="CONTACT.php"><i class="fas fa-link"></i>CONTACT US</a></li>
      <li><a href="LOGIN.php"><i class="fas fa-stream"></i>LOGIN</a></li>
      <li><a href="ADMIN.php"><i class="fas fa-calendar-week"></i>ADMIN</a></li>

    </ul>
  </div>

  <section class="loginsection">
     <div class="loginbox">
 <image src ="images/login.png" style = "height:15%; width:20%;" class = "avatar">
 <h1>Login here</h1>
 <form action="validation.php" method="POST">
 <p>User name:</p>
 <input type = "text" name="username" id="username" placeholder="Enter username">
 <p>Password:</p>
 <input type = "password" name="password" id="password" placeholder="Enter password">
 <!---<input type = "submit"  name="" value="Login">--->
 <!---onclick="window.location.href = 'userpanel.php';"--->
 
 <button type="submit" class="submitbutton" name="submit">Login</button>
 <br><a href = "forgotpass.php">Forgot password?</a>
 <br><a href = "register.php">Don't have an account?</a>
 </form>
 </div>
  </section>

</body>

</html>

