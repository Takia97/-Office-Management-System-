<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userpanel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="userpanel">
   <h2> Hello <?php echo $_SESSION['username']; ?> </h2><br>

	  <h2> <a href="resetpass.php">reset password </a></h2><br>

     <h2>  <a href="employeelistpage.php" >employee list</a></h2><br>
       
     <h2>  <a href="#" >work list, meeting date, update appointment</a></h2><br>

     <h2>  <a href="#" >Admin Feedback</a></h2><br>

      <h2> <a href="workstatus.php" >Work Status</a></h2><br>

      <h2> <a href="LOGIN.php" >Logout</a></h2><br></h2>
</div>
    

</body>

</html>