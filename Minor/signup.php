<?php
if(isset($_GET['username'])){
            $content ='
            <h3>You Account Succesfully Created</h3>
            <hr>
            <div class="form-group">
                <label>An email has been sent to you to activate your account.</label>
            </div>';
}else{
    $content ='
	<h3><p align ="left">Register New Account</p></h3>

				<form method="post" action="">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" placeholder="First name" name="firstname"> 
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" placeholder="Last Name" name="lastname">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" placeholder="Username" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" placeholder="Password" name="password">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" placeholder="Email" name="email">
				</div>
				<div class="form-group">
					<label>Confirm Email</label>
					<input type="email" class="form-control" placeholder="Confirm Email" name="confirm_email">
				</div>
				<div class="form-group">
					<label><input type="checkbox" name ="term" value="agree"> I agree to term and conditions</input></label>
				</div>
				<input type="submit" name="submit" value="Register" class="btn btn-primary">
				
				</form>
	';
    
}
include "connection.php";
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   $cemail = $_POST['confirm_email'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $password = $_POST['password'];
   $cpassword = $_POST['confirm_password'];
   $subscription = "Free";
   $remaining = "Unlimited";
   $hash = md5( rand(0,1000) );

if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['email']) && !empty($_POST['confirm_email'])) {
    if(!empty($_POST['term'])){
        if($password == $cpassword){
            if($email == $cemail){
                $username = mysql_escape_string($_POST['username']);
                $email = mysql_escape_string($email);
                $cemail = mysql_escape_string($cemail);
                $firstname = mysql_escape_string($_POST['firstname']);
                $lastname = mysql_escape_string($_POST['lastname']);
                $password = mysql_escape_string($password);
                $cpassword = mysql_escape_string($cpassword);
                $subscription = mysql_escape_string($subscription);
                $startdate= date("Y-m-d");
                $remaining = mysql_escape_string($remaining);
                $hash = mysql_escape_string($hash);
       

                $sql = mysql_query("SELECT  * FROM `tbl_member` where `username` = '$username'");
                if (mysql_num_rows($sql) > 0) {
                        $content ='
                        <h3><p align ="left">Register New Account</p></h3>
                        <h4><p align ="left">Sorry, that user already exists.</p></h4>
				<form method="post" action="">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" placeholder="First name" name="firstname"> 
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" placeholder="Last Name" name="lastname">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" placeholder="Username" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" placeholder="Password" name="password">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" placeholder="Email" name="email">
				</div>
				<div class="form-group">
					<label>Confirm Email</label>
					<input type="email" class="form-control" placeholder="Confirm Email" name="confirm_email">
				</div>
				<div class="form-group">
					<label><input type="checkbox" name ="term" value="agree"> I agree to term and conditions</input></label>
				</div>
				<input type="submit" name="submit" value="Register" class="btn btn-primary">
				
				</form>
                        ';
                    include 'Template.php';
                    exit();
                }
       
       $insert = 'INSERT into tbl_member(username, email, fname, lname, password,subscription,start_date, hash) VALUES("'.$username.'",
           "'.$email.'","'.$firstname.'","'.$lastname.'","'.$password.'","'.$subscription.'","'.$startdate.'","'.$hash.'")';
       mysql_query($insert);
       
$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$username.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
http://www.oniichanpro.com/verify.php?email='.$email.'&hash='.$hash.'
 
'; // Our message above including the link
                     
$headers = 'From:associawebnoreply@gmail.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

header("Location:signup.php?username=$username");  
       }else{
                $content ='
                        <h3><p align ="left">Register New Account</p></h3>
                        <h4><p align ="left">Sorry, your email do not match.</p></h4>
				<form method="post" action="">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" placeholder="First name" name="firstname"> 
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" placeholder="Last Name" name="lastname">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" placeholder="Username" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" placeholder="Password" name="password">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" placeholder="Email" name="email">
				</div>
				<div class="form-group">
					<label>Confirm Email</label>
					<input type="email" class="form-control" placeholder="Confirm Email" name="confirm_email">
				</div>
				<div class="form-group">
					<label><input type="checkbox" name ="term" value="agree"> I agree to term and conditions</input></label>
				</div>
				<input type="submit" name="submit" value="Register" class="btn btn-primary">
				
				</form>
                        ';
                    include 'Template.php';
                    exit();
            }
        }else{
                            $content ='
                        <h3><p align ="left">Register New Account</p></h3>
                        <h4><p align ="left">Sorry, your passwords do not match.</p></h4>
				<form method="post" action="">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" placeholder="First name" name="firstname"> 
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" placeholder="Last Name" name="lastname">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" placeholder="Username" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" placeholder="Password" name="password">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" placeholder="Email" name="email">
				</div>
				<div class="form-group">
					<label>Confirm Email</label>
					<input type="email" class="form-control" placeholder="Confirm Email" name="confirm_email">
				</div>
				<div class="form-group">
					<label><input type="checkbox" name ="term" value="agree"> I agree to term and conditions</input></label>
				</div>
				<input type="submit" name="submit" value="Register" class="btn btn-primary">
				
				</form>
                        ';
                    include 'Template.php';
                    exit();
        }
    }else{
                            $content ='
                        <h3><p align ="left">Register New Account</p></h3>
                        <h4><p align ="left">You Must Agree With Term and Condition!</p></h4>
				<form method="post" action="">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" placeholder="First name" name="firstname"> 
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" placeholder="Last Name" name="lastname">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" placeholder="Username" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" placeholder="Password" name="password">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" placeholder="Email" name="email">
				</div>
				<div class="form-group">
					<label>Confirm Email</label>
					<input type="email" class="form-control" placeholder="Confirm Email" name="confirm_email">
				</div>
				<div class="form-group">
					<label><input type="checkbox" name ="term" value="agree"> I agree to term and conditions</input></label>
				</div>
				<input type="submit" name="submit" value="Register" class="btn btn-primary">
				
				</form>
                        ';
                    include 'Template.php';
                    exit();
    }
}else{
                            $content ='
                        <h3><p align ="left">Register New Account</p></h3>
                        <h4><p align ="left">All fields are required!</p></h4>
				<form method="post" action="">
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" placeholder="First name" name="firstname"> 
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" placeholder="Last Name" name="lastname">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" placeholder="Username" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" placeholder="Password" name="password">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" placeholder="Email" name="email">
				</div>
				<div class="form-group">
					<label>Confirm Email</label>
					<input type="email" class="form-control" placeholder="Confirm Email" name="confirm_email">
				</div>
				<div class="form-group">
					<label><input type="checkbox" name ="term" value="agree"> I agree to term and conditions</input></label>
				</div>
				<input type="submit" name="submit" value="Register" class="btn btn-primary">
				
				</form>
                        ';
                    include 'Template.php';
                    exit();
}
}
include 'Template.php';
 ?>




