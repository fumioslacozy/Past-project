<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>AssociaWeb Control Panel</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/backend.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">AssociaWeb</h2>
        <label for="inputid" class="sr-only">Username</label>
        <input type="text" name="user"  class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass"  class="form-control" placeholder="Password" required>
       	<p align=center><input type="submit" class="btn  btn-primary" value="Login" name="submit" /></p>
      </form>

    </div> <!-- /container -->
    <?php
    if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	include"connection.php";

	$query=mysql_query("SELECT * FROM tbl_admin WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
            $dbid=$row['id'];
	$dbusername=$row['username'];
	$dbpassword=$row['password'];

	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['back_user']=$user;
        $_SESSION['back_id']=$dbid;


	/* Redirect browser */
	header("Location: backHome.php");
	}
	} else {
            echo '<p align=center>Invalid username or password!</p>';
        }
}else{

}
    }
    ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/workaround.js"></script>
  </body>
</html>
