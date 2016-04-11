<?php

    $content=
	'
        <form action="" method="POST">
	<h3>Login</h3>
	<div class="row">
	  <div class="col-lg-4">
		<p align=right>Username</p>
	  </div><!-- /.col-lg-4 -->
			  <div class="col-lg-4">
				  <input type="text" class="form-control" name="user">
			  </div><!-- /.col-lg-4 --><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	
	<div class="row">
	  <div class="col-lg-4">
		<p align=right>Password</p>
	  </div><!-- /.col-lg-4 -->
			  <div class="col-lg-4">
				  <input type="password" class="form-control" name="pass">
			  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	
	<div class="row">
	  <div class="col-lg-11">
		<p align=center><a href="forgotpassword.php">Forgot Your Password ?</a></p>
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	
	<div class="row">
	  <div class="col-lg-11">
		<p align=center><input type="submit" class="btn  btn-primary" value="Login" name="submit" /></p>
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	</form>
	';     
    

if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	include"connection.php";

	$query=mysql_query("SELECT * FROM tbl_member WHERE username='".$user."' AND password='".$pass."' AND active='1'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
        $dbid=$row['id'];
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
        $dbemail=$row['email'];
        $dbfname=$row['fname'];
        $dblname=$row['lname'];
        $dbsubscription=$row['subscription'];
        $dbexpired_date=$row['expired_date'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;
        $_SESSION['sess_id']=$dbid;
        $_SESSION['sess_email']=$dbemail;
        $_SESSION['sess_fname']=$dbfname;
        $_SESSION['sess_lname']=$dblname;
        $_SESSION['sess_subscription']=$dbsubscription;
        $_SESSION['sess_exdate']=$dbexpired_date;

	/* Redirect browser */
	header("Location: home.php");
	}
	} else {
        $content=
	'
        <form action="" method="POST">
	<h3>Login</h3>
	<div class="row">
	  <div class="col-lg-4">
		<p align=right>Username</p>
	  </div><!-- /.col-lg-4 -->
	  <div class="col-lg-4">
		<div class="input-group">
		  <input type="text" class="form-control" name="user">
		</div><!-- /input-group -->
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	
	<div class="row">
	  <div class="col-lg-4">
		<p align=right>Password</p>
	  </div><!-- /.col-lg-4 -->
	  <div class="col-lg-4">
		<div class="input-group">
		  <input type="password" class="form-control" name="pass">
		</div><!-- /input-group -->
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	
	<div class="row">
	  <div class="col-lg-11">
		<p align=center><a href="#">Forgot Your Password ?</a></p>
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
        	
        <div class="row">
	  <div class="col-lg-11">
		<p align=center>Invalid Username or Password or Your Account is not Activated yet.</p>
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	
	<div class="row">
	  <div class="col-lg-11">
		<p align=center><input type="submit" class="btn  btn-primary" value="Login" name="submit" /></p>
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	</form>
	'; 
	}

} else {
        $content=
	'
        <form action="" method="POST">
	<h3>Login</h3>
	<div class="row">
	  <div class="col-lg-4">
		<p align=right>Username</p>
	  </div><!-- /.col-lg-4 -->
	  <div class="col-lg-4">
		<div class="input-group">
		  <input type="text" class="form-control" name="user">
		</div><!-- /input-group -->
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	
	<div class="row">
	  <div class="col-lg-4">
		<p align=right>Password</p>
	  </div><!-- /.col-lg-4 -->
	  <div class="col-lg-4">
		<div class="input-group">
		  <input type="password" class="form-control" name="pass">
		</div><!-- /input-group -->
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	
	<div class="row">
	  <div class="col-lg-11">
		<p align=center><a href="#">Forgot Your Password ?</a></p>
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
        	
        <div class="row">
	  <div class="col-lg-11">
		<p align=center>All fields are required!</p>
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	
	<div class="row">
	  <div class="col-lg-11">
		<p align=center><input type="submit" class="btn  btn-primary" value="Login" name="submit" /></p>
	  </div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
	</form>
	'; 
}
}
    include 'Template.php';
?>

