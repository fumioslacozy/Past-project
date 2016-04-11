<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
   
} else {
    $content ='
                                <ol class="breadcrumb">
                                        <li><a href="backHome.php">Home</a></li>
                                        <li><a href="backManageMember.php?page=1">Manage Member</a></li>
                                        <li class="active">Add New Member</li>
                                </ol>

                                <h2>Add New Member</h2>
                                <hr>

				<form method="post" action="">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" name="firstname"> 
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" name="lastname">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email">
				</div>
                                <div class="form-group">
				<label>Subscription Level</label>
                                    <div class="radio">
					<label><input type="radio" name="subscription" value="Free" checked>Free</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="subscription" value="Invited">Invited</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="subscription" value="Advanced">Advanced</label>
                                    </div>
                                </div>
				<input type="submit" name="submit" value="Register" class="btn btn-primary">
				
				</form>
	';
    
    
include "connection.php";
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $password = $_POST['password'];
   $subscription = $_POST['subscription'];
   $active = 1;

if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['subscription'])) {
                $username = mysql_escape_string($_POST['username']);
                $email = mysql_escape_string($_POST['email']);
                $firstname = mysql_escape_string($_POST['firstname']);
                $lastname = mysql_escape_string($_POST['lastname']);
                $password = mysql_escape_string($_POST['password']);
                $subscription = mysql_escape_string($_POST['subscription']);
                $todaydate= date("Y-m-d");
                $expireddate = date(("Y-m-d"), strtotime("+1 Year"));

                $sql = mysql_query("SELECT  * FROM `tbl_member` where `username` = '$username'");
                if (mysql_num_rows($sql) > 0) {
                        $content ='
                        <ol class="breadcrumb">
                                <li><a href="backHome.php">Home</a></li>
                                <li><a href="backManageMember.php?page=1">Manage Member</a></li>
                                <li class="active">Add New Member</li>
                        </ol>

                        <h2>Add New Member</h2>
                        <hr>
                        <h4><p align ="left">Sorry, that user already exists.</p></h4>
				<form method="post" action="">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" name="firstname"> 
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" name="lastname">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email">
				</div>
                                <div class="form-group">
				<label>Subscription Level</label>
                                    <div class="radio">
					<label><input type="radio" name="subscription" value="Free">Free</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="subscription" value="Invited">Invited</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="subscription" value="Advanced">Advanced</label>
                                    </div>
                                </div>
				<input type="submit" name="submit" value="Register" class="btn btn-primary">
				
				</form>
                        ';
                    include 'TemplateBackend.php';
                    exit();
                }
                if ($subscription == "Advanced") {
                    $insert = 'INSERT into tbl_member(username, email, fname, lname, password,subscription, start_date, expired_date, active) VALUES("'.$username.'",
                        "'.$email.'","'.$firstname.'","'.$lastname.'","'.$password.'","'.$subscription.'","'.$todaydate.'","'.$expireddate.'","'.$active.'")';
                    mysql_query($insert);
                    header("Location: backManageMember.php?page=1");                    
                }else{
                    $insert = 'INSERT into tbl_member(username, email, fname, lname, password,subscription, start_date, active) VALUES("'.$username.'",
                        "'.$email.'","'.$firstname.'","'.$lastname.'","'.$password.'","'.$subscription.'","'.$todaydate.'","'.$active.'")';
                    mysql_query($insert);
                    header("Location: backManageMember.php?page=1");        
                }
                
       

       
}else{
                            $content ='
                        <ol class="breadcrumb">
                                <li><a href="backHome.php">Home</a></li>
                                <li><a href="backManageMember.php?page=1">Manage Member</a></li>
                                <li class="active">Add New Member</li>
                        </ol>

                        <h2>Add New Member</h2>
                        <hr>
                        <h4><p align ="left">All fields are required!</p></h4>
	                     <form method="post" action="">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" name="firstname"> 
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" name="lastname">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email">
				</div>
                                <div class="form-group">
				<label>Subscription Level</label>
                                    <div class="radio">
					<label><input type="radio" name="subscription" value="Free">Free</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="subscription" value="Invited">Invited</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="subscription" value="Advanced">Advanced</label>
                                    </div>
                                </div>
				<input type="submit" name="submit" value="Register" class="btn btn-primary">
				
				</form>
                        ';
                    include 'TemplateBackend.php';
                    exit();
}
}
}
include 'TemplateBackend.php';
?>




